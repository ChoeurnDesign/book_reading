<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function bookIndex(Request $request)
    {
        $books = Book::orderBy('created_at', 'DESC')
            ->withCount('reviews')
            ->withSum('reviews', 'rating');

        if (!empty($request->keyword)) {
            $books->where('title', 'like', '%' . $request->keyword . '%');
        }

        $books = $books->paginate(12);

        return view('account.book_index', [
            'books' => $books
        ]);
    }

    public function index(Request $request)
    {
        $categories = Category::withCount('books')->orderBy('name')->get();

        $topBook = Book::where('status', 'published')
            ->with('categories')
            ->withCount('reviews')
            ->withSum('reviews', 'rating')
            ->orderByDesc('created_at')
            ->first();

        if (is_null($topBook)) {
            $topBook = new Book([
                'title' => 'No Books Available Yet!',
                'slug' => 'no-books',
                'author' => 'The Author',
                'description' => 'Start adding books to your collection to see them here.',
                'image' => null,
                'status' => 'draft',
            ]);
            $topBook->id = 0;
        }

        return view('home', compact('categories', 'topBook'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $categoryId = $request->input('category_id');

        $books = Book::query();

        if ($query) {
            $books->where(function ($q) use ($query) {
                $q->where('title', 'like', '%' . $query . '%')
                    ->orWhere('author', 'like', '%' . $query . '%');
            });
        }

        if ($categoryId) {
            $books->whereHas('categories', function ($q) use ($categoryId) {
                $q->where('categories.id', $categoryId);
            });
        }

        $books = $books->with('categories')->orderBy('created_at', 'DESC')->paginate(12);

        $categories = Category::orderBy('name')->get();

        return view('books.search_results', compact('books', 'categories', 'query', 'categoryId'));
    }

    public function byCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $books = $category->books()->with('categories')->orderBy('created_at', 'DESC')->paginate(12);

        $categories = Category::orderBy('name')->get();

        return view('books.by_category', compact('books', 'category', 'categories'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|min:5|unique:books,title',
            'author' => 'required|min:3',
            'status' => 'required|in:0,1',
            'category_ids' => 'nullable|array',
            'category_ids.*' => 'exists:categories,id',
        ];
        if (!empty($request->image)) {
            $rules['image'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('books.create')->withInput()->withErrors($validator);
        }

        $book = new Book();
        $book->title = $request->title;
        $book->slug = Str::slug($request->title);
        $book->description = $request->description;
        $book->author = $request->author;
        $book->status = $request->status;
        $book->save();

        $book->categories()->sync($request->input('category_ids', []));

        if (!empty($request->image)) {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;

            if (!File::exists(public_path('uploads/books'))) {
                File::makeDirectory(public_path('uploads/books'), 0755, true);
            }
            if (!File::exists(public_path('uploads/books/thumb'))) {
                File::makeDirectory(public_path('uploads/books/thumb'), 0755, true);
            }

            $image->move(public_path('uploads/books'), $imageName);

            $book->image = $imageName;
            $book->save();

            $manager = new ImageManager(Driver::class);
            $img = $manager->read(public_path('uploads/books/' . $imageName));

            $img->resize(990);
            $img->save(public_path('uploads/books/thumb/' . $imageName));
        }

        return redirect()->route('books.index')->with('success', 'Book added successfully.');
    }

    public function edit($id)
    {
        $book = Book::with('categories')->findOrFail($id);
        $categories = Category::orderBy('name')->get();
        return view('books.edit', [
            'book' => $book,
            'categories' => $categories
        ]);
    }

    public function update($id, Request $request)
    {
        $book = Book::findOrFail($id);
        $rules = [
            'title' => 'required|min:5|unique:books,title,' . $book->id,
            'author' => 'required|min:3',
            'status' => 'required|in:0,1',
            'category_ids' => 'nullable|array',
            'category_ids.*' => 'exists:categories,id',
        ];
        if (!empty($request->image)) {
            $rules['image'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('books.edit', $book->id)->withInput()->withErrors($validator);
        }

        $book->title = $request->title;
        $book->slug = Str::slug($request->title);
        $book->description = $request->description;
        $book->author = $request->author;
        $book->status = $request->status;
        $book->save();

        $book->categories()->sync($request->input('category_ids', []));

        if (!empty($request->image)) {
            if ($book->image) {
                File::delete(public_path('uploads/books/') . $book->image);
                File::delete(public_path('uploads/books/thumb/') . $book->image);
            }

            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;

            if (!File::exists(public_path('uploads/books'))) {
                File::makeDirectory(public_path('uploads/books'), 0755, true);
            }
            if (!File::exists(public_path('uploads/books/thumb'))) {
                File::makeDirectory(public_path('uploads/books/thumb'), 0755, true);
            }

            $image->move(public_path('uploads/books'), $imageName);

            $book->image = $imageName;
            $book->save();

            $manager = new ImageManager(Driver::class);
            $img = $manager->read(public_path('uploads/books/' . $imageName));
            $img->resize(990);
            $img->save(public_path('uploads/books/thumb/' . $imageName));
        }

        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy(Request $request)
    {
        $book = Book::find($request->id);
        if ($book == null) {
            session()->flash('error', 'Book not found');
            return response()->json([
                'status' => false,
                'message' => 'Book not found'
            ]);
        } else {
            $book->usersInLibrary()->detach();
            $book->usersFavorited()->detach();
            $book->categories()->detach();

            if ($book->image) {
                File::delete(public_path('uploads/books/' . $book->image));
                File::delete(public_path('uploads/books/thumb/' . $book->image));
            }
            $book->delete();

            session()->flash('success', 'Book deleted successfully.');
            return response()->json([
                'status' => true,
                'message' => 'Book deleted successfully.'
            ]);
        }
    }

    public function detail($id)
    {
        $book = Book::with([
            'chapters' => function ($query) {
                $query->orderBy('order', 'asc');
            },
            'reviews.user',
            'categories'
        ])->findOrFail($id);

        $isLoggedIn = Auth::check();
        $inLibrary = false;
        $isFavorite = false;

        if ($isLoggedIn) {
            $user = Auth::user();
            $inLibrary = $user->libraryBooks->contains($book->id);
            $isFavorite = $user->favoriteBooks->contains($book->id);
        }

        $reviews = $book->reviews()->orderBy('created_at', 'DESC')->paginate(5);

        $relatedBooks = collect();
        if ($book->categories->isNotEmpty()) {
            $bookCategoryIds = $book->categories->pluck('id')->toArray();
            if (!empty($bookCategoryIds)) {
                $relatedBooks = Book::where('id', '!=', $book->id)
                    ->whereHas('categories', function ($query) use ($bookCategoryIds) {
                        $query->whereIn('categories.id', $bookCategoryIds);
                    })
                    ->with('categories')
                    ->take(3)
                    ->get();
            }
        }

        return view('book_detail', compact('book', 'reviews', 'isLoggedIn', 'inLibrary', 'isFavorite', 'relatedBooks'));
    }

    public function manageChapters(Request $request)
    {
        $books = Book::orderBy('title', 'asc');

        if (!empty($request->keyword)) {
            $books->where('title', 'like', '%' . $request->keyword . '%');
        }

        $books = $books->paginate(10);

        return view('books.manage_chapters_list', compact('books'));
    }

    public function addToLibrary(Request $request, Book $book)
    {
        $user = Auth::user();
        if ($user->role === 'admin') {
            session()->flash('error', 'Admins cannot modify personal library/favorites.');
            return redirect()->route('book.detail', $book->id);
        }

        try {
            $user->libraryBooks()->attach($book->id);
            session()->flash('success', 'Book added to your library!');
        } catch (\Exception $e) {
            session()->flash('error', 'This book is already in your library.');
        }

        return redirect()->route('book.detail', $book->id);
    }

    public function removeFromLibrary(Request $request, Book $book)
    {
        $user = Auth::user();
        if ($user->role === 'admin') {
            session()->flash('error', 'Admins cannot modify personal library/favorites.');
            return redirect()->route('book.detail', $book->id);
        }

        $user->libraryBooks()->detach($book->id);
        session()->flash('success', 'Book removed from your library.');
        return redirect()->route('book.detail', $book->id);
    }

    public function addToFavorites(Request $request, Book $book)
    {
        $user = Auth::user();
        if ($user->role === 'admin') {
            session()->flash('error', 'Admins cannot modify personal library/favorites.');
            return redirect()->route('book.detail', $book->id);
        }

        try {
            $user->favoriteBooks()->attach($book->id);
            session()->flash('success', 'Book added to your favorites!');
        } catch (\Exception $e) {
            session()->flash('error', 'This book is already in your favorites.');
        }

        return redirect()->route('book.detail', $book->id);
    }

    public function removeFromFavorites(Request $request, Book $book)
    {
        $user = Auth::user();
        if ($user->role === 'admin') {
            session()->flash('error', 'Admins cannot modify personal library/favorites.');
            return redirect()->route('book.detail', $book->id);
        }

        $user->favoriteBooks()->detach($book->id);
        session()->flash('success', 'Book removed from your favorites.');
        return redirect()->route('book.detail', $book->id);
    }

    public function listAllBooks(Request $request)
    {
        $books = Book::orderBy('created_at', 'DESC');
        if (!empty($request->keyword)) {
            $books->where('title', 'like', '%' . $request->keyword . '%');
        }

        $books = $books->withCount('reviews')
            ->withSum('reviews', 'rating')
            ->paginate(10);

        return view('books.list', [
            'books' => $books
        ]);
    }

    public function toggleFeatured(Request $request, Book $book)
    {
        $maxFeatured = 8;

        if (!$book->featured) {
            $currentFeaturedCount = Book::where('featured', 1)->count();
            if ($currentFeaturedCount >= $maxFeatured) {
                return response()->json([
                    'success' => false,
                    'message' => "You can only feature up to {$maxFeatured} books."
                ], 400);
            }
        }

        $book->featured = !$book->featured;
        $book->save();

        return response()->json([
            'success' => true,
            'featured' => (bool)$book->featured
        ]);
    }
}
