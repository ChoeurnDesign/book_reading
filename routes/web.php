<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ChapterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Http\Controllers\Auth as AuthControllers;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;

// Auth routes
Auth::routes();

// Static pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|max:100',
        'email' => 'required|email|max:100',
        'message' => 'required|max:1000',
    ]);
    Mail::to('chunchoeurn99@gmail.com')->send(new ContactFormMail($data));
    return back()->with('success', 'Thank you for contacting us! We will respond soon.');
})->name('contact.submit');

// Legal pages
Route::get('/privacy-policy', [App\Http\Controllers\LegalController::class, 'privacy'])->name('legal.privacy');
Route::get('/terms-of-service', [App\Http\Controllers\LegalController::class, 'terms'])->name('legal.terms');

// Book detail & chapter detail (public)
Route::get('/book/{id}', [BookController::class, 'detail'])->name('book.detail');
Route::get('/books/{bookId}/chapters/{chapterId}', [ChapterController::class, 'detail'])->name('chapter.detail');

// Book search and filter (public)
Route::get('/books/search', [BookController::class, 'search'])->name('books.search');
Route::get('/books/category/{slug}', [BookController::class, 'byCategory'])->name('books.category');

// Book user actions (library, favorite) -- must be authenticated
Route::middleware('auth')->group(function () {
    Route::post('/books/{book}/add-to-library', [BookController::class, 'addToLibrary'])->name('books.addToLibrary');
    Route::delete('/books/{book}/remove-from-library', [BookController::class, 'removeFromLibrary'])->name('books.removeFromLibrary');
    Route::post('/books/{book}/add-to-favorites', [BookController::class, 'addToFavorites'])->name('books.addToFavorites');
    Route::delete('/books/{book}/remove-from-favorites', [BookController::class, 'removeFromFavorites'])->name('books.removeFromFavorites');
    Route::post('/books/{book}/toggle-featured', [BookController::class, 'toggleFeatured'])->name('books.toggleFeatured');
});

// Review routes
Route::post('/save-book-review', [HomeController::class, 'saveReview'])->name('book.saveReview');
Route::post('/review/save', [ReviewController::class, 'save'])->middleware('auth')->name('review.save');

// Account routes (grouped under /account)
Route::prefix('account')->group(function () {
    // Guest-only routes
    Route::middleware('guest')->group(function () {
        Route::get('register', [AccountController::class, 'register'])->name('account.register');
        Route::post('register', [AccountController::class, 'processRegister'])->name('account.processRegister');
        Route::get('login', [AccountController::class, 'login'])->name('account.login');
        Route::post('login', [AccountController::class, 'authenticate'])->name('account.authenticate');
        // Forgot Password
        Route::get('forgot-password', [AuthControllers\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
        Route::post('forgot-password', [AuthControllers\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
        Route::get('reset-password/{token}', [AuthControllers\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
        Route::post('reset-password', [AuthControllers\ResetPasswordController::class, 'reset'])->name('password.update');
    });

    // Authenticated users
    Route::middleware('auth')->group(function () {
        Route::get('profile', [AccountController::class, 'profile'])->name('account.profile');
        Route::get('logout', [AccountController::class, 'logout'])->name('account.logout');
        Route::post('update-profile', [AccountController::class, 'updateProfile'])->name('account.updateProfile');
        Route::get('change-password', [AccountController::class, 'changePassword'])->name('account.changePassword');
        Route::post('change-password', [AccountController::class, 'processChangePassword'])->name('account.processChangePassword');
        Route::get('library', [AccountController::class, 'myLibrary'])->name('account.library');
        Route::get('favorites', [AccountController::class, 'myFavorites'])->name('account.favorites');
        Route::get('book_index', [BookController::class, 'bookIndex'])->name('account.book_index');
        Route::get('categories_index', [CategoryController::class, 'categoriesIndex'])->name('account.categories_index');

        // User's own reviews
        Route::get('my_reviews', [AccountController::class, 'myReviews'])->name('account.myReviews');
        Route::get('my_reviews/{id}', [AccountController::class, 'editReview'])->name('account.myReviews.editReview');
        Route::post('my_reviews/{id}', [AccountController::class, 'updateReview'])->name('account.myReviews.updateReview');
        Route::post('delete_my_reviews', [AccountController::class, 'deleteReview'])->name('account.myReviews.deleteReview');

        // Admin-only
        Route::middleware('check_admin')->group(function () {
            // Book management
            Route::get('books', [BookController::class, 'listAllBooks'])->name('books.index');
            Route::get('books/create', [BookController::class, 'create'])->name('books.create');
            Route::post('books', [BookController::class, 'store'])->name('books.store');
            Route::get('books/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
            Route::post('books/edit/{id}', [BookController::class, 'update'])->name('books.update');
            Route::delete('books', [BookController::class, 'destroy'])->name('books.destroy');
            // Review management
            Route::get('reviews', [ReviewController::class, 'index'])->name('account.reviews');
            Route::get('reviews/{id}', [ReviewController::class, 'edit'])->name('account.reviews.edit');
            Route::post('reviews/{id}', [ReviewController::class, 'updateReview'])->name('account.reviews.updateReview');
            Route::post('delete-review', [ReviewController::class, 'deleteReview'])->name('account.reviews.deleteReview');
            // Chapter management
            Route::get('chapters', [BookController::class, 'manageChapters'])->name('admin.chapters.books');
            Route::get('books/{book_id}/chapters', [ChapterController::class, 'index'])->name('chapters.index');
            Route::get('books/{book_id}/chapters/create', [ChapterController::class, 'create'])->name('chapters.create');
            Route::post('books/{book_id}/chapters', [ChapterController::class, 'store'])->name('chapters.store');
            Route::get('books/{book_id}/chapters/{chapter_id}/edit', [ChapterController::class, 'edit'])->name('chapters.edit');
            Route::put('books/{book_id}/chapters/{chapter_id}', [ChapterController::class, 'update'])->name('chapters.update');
            Route::delete('chapters/{id}', [ChapterController::class, 'destroy'])->name('chapters.destroy');
        });
    });
});
