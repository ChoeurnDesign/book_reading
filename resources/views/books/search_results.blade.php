@extends('layouts.app') {{-- Assuming you have a layouts.app Blade layout --}}

@section('main')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Search Results</h1>

    @if (!empty($query))
        <p class="text-xl mb-4">Results for: "<span class="font-semibold">{{ $query }}</span>"</p>
    @endif

    @if (!empty($categoryId))
        <p class="text-xl mb-4">Category: "<span class="font-semibold">{{ $categories->find($categoryId)->name ?? 'N/A' }}</span>"</p>
    @endif

    @if ($books->isNotEmpty())
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($books as $book)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-2">{{ $book->title }}</h2>
                    <p class="text-gray-600 mb-2">Author: {{ $book->author }}</p>
                    @if ($book->categories->isNotEmpty())
                        <div class="mt-2">
                            <span class="font-medium text-gray-700">Categories:</span>
                            @foreach ($book->categories as $category)
                                <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full mr-1">{{ $category->name }}</span>
                            @endforeach
                        </div>
                    @endif
                    <a href="{{ route('book.detail', $book->id) }}" class="mt-4 inline-block text-indigo-600 hover:text-indigo-800 font-medium">View Details &rarr;</a>
                </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $books->links() }} {{-- Add pagination links --}}
        </div>
    @else
        <p class="text-lg text-gray-700">No books found matching your criteria.</p>
    @endif
</div>
@endsection
