<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoriesIndex()
    {
        $categories = Category::withCount('books')->get();
        return view('account.categories_index', compact('categories'));
    }

    public function saveSelectedCategory(Request $request)
    {
        $request->validate([
            'category_selected' => 'required|exists:categories,id',
        ]);

        // Do something with $request->category_selected
        // For example, store in session, or update user, etc.

        return redirect()->back()->with('success', 'Category saved successfully!');
    }
}
