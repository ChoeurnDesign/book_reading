<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Validation\ValidationException;

use function Symfony\Component\VarDumper\Dumper\esc;

class AccountController extends Controller
{
    public function register()
    {
        return view('account.register');
    }

    public function processRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'password_confirmation' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('account.register')->withInput()->withErrors($validator);
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('account.login')->with('success', 'You have required successfully!');
    }

    public function login()
    {
        return view('account.login');
    }


    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('account.login')->withInput()->withErrors($validator);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('account.profile');
        } else {
            return redirect()->route('account.login')->withInput()->with('error', 'Either email/password is incorrect.');
        }
    }

    public function changePassword(){
        return view('account.change_password');
    }

      public function processChangePassword(Request $request)
        {
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|string|min:8|confirmed',
            ]);

            $user = Auth::user();

            if (!Hash::check($request->old_password, $user->password)) {
                return back()->with('error', 'Old password does not match.');
            }

            $user->password = Hash::make($request->new_password);

            return back()->with('success', 'Password changed successfully.');
        }


    public function profile()
    {
        $user = User::find(Auth::user()->id);
        return view('account.profile', [
            'user' => $user
        ]);
    }

    public function updateProfile(Request $request)
    {

        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id . ',id',
        ];

        if (!empty($request->image)) {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('account.profile')->withInput()->withErrors($validator);
        }

        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        if (!empty($request->image)) {
            File::delete(public_path('uploads/profile/' . $user->image));
            File::delete(public_path('uploads/profile/thumb/' . $user->image));

            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $image->move(public_path('uploads/profile'), $imageName);

            $user->image = $imageName;
            $user->save();

            $manager = new ImageManager(Driver::class);
            $img = $manager->read(public_path('uploads/profile/' . $imageName));

            $img->cover(150, 150);
            $img->save(public_path('uploads/profile/thumb/' . $imageName));
        }

        return redirect()->route('account.profile')->with('success', 'Profile updated successfully.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('account.logout');
    }

    public function myReviews(Request $request)
    {
        $reviews = Review::with('book')->where('user_id', Auth::user()->id);
        $reviews = $reviews->orderBy('created_at', 'DESC');

        if(!empty($request->keyword)){
            $reviews = $reviews->where('review', 'like', '%'.$request->keyword.'%');
        }


        $reviews = $reviews->paginate(10);

        return view('account.my_reviews.my_reviews', [
            'reviews' => $reviews
        ]);
    }

    public function editReview($id) {
        $review = Review::where([
            'id' => $id,
            'user_id' => Auth::user()->id,
        ])->with('book')->first();

        return view('account.my_reviews.edit_review', [
            'review' => $review
        ]);
    }

    public function updateReview($id, Request $request) {

        $review = Review::findOrFail($id);

        $validator = Validator::make($request->all(),[
            'review' => 'required',
            'rating' => 'required'
        ]);
        if($validator->fails()){
            return redirect()->route('account.myReviews.editReview', $id)->withInput()->withErrors($validator);
        }

        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->save();

        session()->flash('success', 'Review updated successfully.');
        return redirect()->route('account.myReviews');
    }

    public function deleteReview(Request $request){
        $id = $request->id;

        $review = Review::find($id);

        if($review == null){
            return response()->json([
                'status' =>false
            ]);
        }

        $review->delete();

        session()->flash('success', 'Review deleted successfully.');

        return response()->json([
            'status' => true,
            'message' => 'Review deleted successfully'
        ]);
    }

    public function myLibrary()
{
    $user = Auth::user();
    // Eager load 'categories' relationship
    $libraryBooks = $user->libraryBooks()->with('categories')->paginate(10);
    return view('account.library.list', compact('libraryBooks'));
}

public function myFavorites()
{
    $user = Auth::user();
    // Eager load 'categories' relationship
    $favoriteBooks = $user->favoriteBooks()->with('categories')->paginate(10);
    return view('account.favorites.list', compact('favoriteBooks'));
}
}
