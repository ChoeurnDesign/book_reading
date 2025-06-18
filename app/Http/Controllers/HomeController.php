<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $featuredBooks = Book::withCount('reviews')
            ->withSum('reviews', 'rating')
            ->where('featured', 1)
            ->get()
            ->map(function ($book) {
                $book->avg_rating = $book->reviews_count
                    ? $book->reviews_sum_rating / $book->reviews_count
                    : 0;
                $book->cover_url = $book->image
                    ? asset('uploads/books/thumb/' . $book->image)
                    : asset('img_style/default_book.png');
                return $book;
            });

        return view('home', [
            'featuredBooks' => $featuredBooks,
        ]);
    }

    //this method will show book detail page
    public function detail($id)
    {
        $book = Book::with([
            'reviews' => function ($query) {
                $query->where('status', 1);
            },
            'reviews.user',
            'chapters'
        ])
            ->withCount('reviews')
            ->withSum('reviews', 'rating')
            ->findOrFail($id);

        // If book status is 0 (inactive), show 404 page
        if ($book->status == 0) {
            abort(404);
        }

        // Get 3 related books (active), excluding the current book, random order
        $relatedBooks = Book::where('status', 1)
            ->where('id', '!=', $id)
            ->inRandomOrder()
            ->withCount('reviews')
            ->withSum('reviews', 'rating')
            ->take(3)
            ->get();

        // Pass variables to view
        return view('book_detail', [
            'book' => $book,
            'relatedBooks' => $relatedBooks,
        ]);
    }

    //this method will save review in DB
    // public function saveReview(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'review' => 'required|min:6',
    //         'rating' => 'required',
    //     ]);
    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => false,
    //             'errors' => $validator->errors()
    //         ]);
    //     }

    //     //Apply condition here
    //     $countReview = Review::where('user_id', Auth::user()->id)->where('book_id', $request->book_id)->count();
    //     if ($countReview > 0) {
    //         session()->flash('error', 'You already submitted a review.');

    //         return response()->json([
    //             'status' => true,
    //         ]);
    //     }

    //     $review = new Review();
    //     $review->review = $request->review;
    //     $review->rating = $request->rating;
    //     $review->user_id = Auth::user()->id;
    //     $review->book_id = $request->book_id;
    //     $review->save();

    //     session()->flash('success', 'Review sumitted successfully.');

    //     return response()->json([
    //         'status' => true,
    //     ]);
    // }

}
