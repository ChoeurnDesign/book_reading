<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $reviews = Review::with('book', 'user')->orderBy('created_at', 'DESC');
        if (!empty($request->keyword)) {
            $reviews = $reviews->where('review', 'like', '%' . $request->keyword . '%');
        }

        $reviews = $reviews->paginate(10);
        return view('account.reviews.list', [
            'reviews' => $reviews,
        ]);
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('account.reviews.edit', [
            'review' => $review
        ]);
    }

    public function updateReview($id, Request $request)
    {
        $review = Review::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'review' => 'required',
            'status' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('account.reviews.edit', $id)->withInput()->withErrors($validator);
        }

        $review->review = $request->review;
        $review->status = $request->status;
        $review->save();

        session()->flash('success', 'Review updated successfully.');
        return redirect()->route('account.reviews');
    }

    public function deleteReview(Request $request)
    {
        $id = $request->id;

        $review = Review::find($id);

        if ($review == null) {
            session()->flash('error', 'Review not found');
            return response()->json([
                'status' => false
            ]);
        } else {
            $review->delete();

            session()->flash('success', 'Review deleted successfully.');
            return response()->json([
                'status' => true
            ]);
        }
    }

   public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|integer|exists:books,id',
            'review' => 'required|string|min:6',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors()
                ]);
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Prevent duplicate review by same user for the same book
        $exists = Review::where('user_id', Auth::id())
            ->where('book_id', $request->input('book_id'))
            ->exists();

        if ($exists) {
            $msg = 'You already submitted a review.';
            if ($request->ajax()) {
                session()->flash('error', $msg);
                return response()->json(['status' => true]);
            }
            return redirect()->back()->with('error', $msg);
        }

        $review = new Review();
        $review->review = $request->input('review');
        $review->rating = $request->input('rating');
        $review->user_id = Auth::id();
        $review->book_id = $request->input('book_id');
        $review->status = 1;
        $review->save();

        $msg = 'Review submitted successfully.';
        if ($request->ajax()) {
            session()->flash('success', $msg);
            return response()->json(['status' => true]);
        }
        return redirect()->back()->with('success', $msg);
    }
}
