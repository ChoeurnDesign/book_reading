<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Chapter;
use App\Models\Category;
use League\CommonMark\CommonMarkConverter;
use Illuminate\Support\Facades\Session; // For flash messages

class ChapterController extends Controller
{
    // --- Public Chapter Reading ---
    // This method displays a single chapter's content for reading.
    public function detail($bookId, $chapterId)
    {
        // Find the book, or abort with a 404 if not found
        $book = Book::findOrFail($bookId);

        // Find the chapter, ensuring it belongs to the specified book, or abort with a 404
        $chapter = Chapter::where('book_id', $bookId)
                          ->where('id', $chapterId)
                          ->firstOrFail();

        // Convert Markdown content of the chapter to HTML for display
        // 'html_input' => 'strip' enhances security by stripping raw HTML to prevent XSS
        // 'allow_unsafe_links' => false prevents unsafe links in markdown from being rendered
        $converter = new CommonMarkConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);
        $chapterHtmlContent = $converter->convert($chapter->content)->getContent();

        // Fetch the previous chapter in the book based on its order
        // Ordered by 'desc' to find the immediately preceding chapter
        $previousChapter = Chapter::where('book_id', $bookId)
                                  ->where('order', '<', $chapter->order)
                                  ->orderBy('order', 'desc')
                                  ->first();

        // Fetch the next chapter in the book based on its order
        // Ordered by 'asc' to find the immediately following chapter
        $nextChapter = Chapter::where('book_id', $bookId)
                             ->where('order', '>', $chapter->order)
                             ->orderBy('order', 'asc')
                             ->first();

        // Return the view with the book, current chapter, HTML content, and navigation chapters
         return view('chapter.show', compact('book', 'chapter', 'chapterHtmlContent', 'previousChapter', 'nextChapter'));
    }

    // --- Chapter Management Methods (Typically for Admin Users) ---

    // Displays a list of chapters for a specific book in an administrative interface.
    public function index($book_id)
    {
        // Find the book, or abort with a 404
        $book = Book::findOrFail($book_id);

        // Get all chapters associated with the book, ordered by their 'order' field
        // 'get()' is used here to retrieve all chapters, not paginate, for an admin list
        $chapters = $book->chapters()->orderBy('order', 'asc')->get();

        // Return the admin view for listing chapters, passing the book and its chapters
        return view('admin.chapters.list', compact('book', 'chapters'));
    }

    // Shows the form to create a new chapter for a specific book.
    public function create($book_id)
    {
        // Find the book, or abort with a 404
        $book = Book::findOrFail($book_id);

        // Return the admin view for creating a chapter, passing the book context
        return view('admin.chapters.create', compact('book'));
    }

    // Stores a newly created chapter in the database.
    public function store(Request $request, $book_id)
    {
        // Find the book, or abort with a 404
        $book = Book::findOrFail($book_id);

        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'order' => 'nullable|integer|min:0', // 'order' is optional and must be a non-negative integer
        ]);

        // Create a new chapter associated with the found book
        $book->chapters()->create([
            'title' => $request->title,
            'content' => $request->content,
            // If 'order' is not provided, set it to one greater than the current max order
            'order' => $request->order ?? ($book->chapters()->max('order') + 1),
        ]);

        // Flash a success message to the session
        Session::flash('success', 'Chapter created successfully!');

        // Redirect back to the chapters list for the same book
        return redirect()->route('chapters.index', $book->id);
    }

    // Shows the form to edit an existing chapter.
    public function edit($book_id, $chapter_id)
    {
        // Find the book and the specific chapter, ensuring the chapter belongs to the book
        $book = Book::findOrFail($book_id);
        $chapter = Chapter::where('book_id', $book_id)->findOrFail($chapter_id);

        // Return the admin view for editing a chapter, passing the book and chapter data
        return view('admin.chapters.edit', compact('book', 'chapter'));
    }

    // Updates an existing chapter in the database.
    public function update(Request $request, $book_id, $chapter_id)
    {
        // Find the book and the specific chapter
        $book = Book::findOrFail($book_id);
        $chapter = Chapter::where('book_id', $book_id)->findOrFail($chapter_id);

        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'order' => 'nullable|integer|min:0',
        ]);

        // Update the chapter's attributes
        $chapter->update([
            'title' => $request->title,
            'content' => $request->content,
            'order' => $request->order,
        ]);

        // Flash a success message to the session
        Session::flash('success', 'Chapter updated successfully!');

        // Redirect back to the chapters list for the same book
        return redirect()->route('chapters.index', $book->id);
    }

    // Deletes a chapter from the database.
    public function destroy($id)
    {
        // Find the chapter to be deleted
        $chapter = Chapter::findOrFail($id);

        // Store the book_id before deletion, as it will be needed for redirection
        $book_id = $chapter->book_id;

        // Delete the chapter
        $chapter->delete();

        // Flash a success message to the session
        Session::flash('success', 'Chapter deleted successfully!');

        // Redirect back to the chapters list of the associated book
        return redirect()->route('chapters.index', $book_id);
    }

     public function show($bookId, $chapterId)
    {
        // Find the chapter ensuring it belongs to the given book
        $chapter = Chapter::where('book_id', $bookId)->findOrFail($chapterId);

        // Pass the chapter object to the view
        return view('admin.chapters.show', compact('chapter'));
    }

}
