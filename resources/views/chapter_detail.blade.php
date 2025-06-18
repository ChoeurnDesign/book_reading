@extends('layouts.app')

@section('main')
    <div class="container mt-5">
        {{-- Breadcrumbs for navigation --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light p-3 rounded">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none">Books</a></li>
                <li class="breadcrumb-item"><a href="{{ route('book.detail', $book->id) }}" class="text-decoration-none">{{ $book->title }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $chapter->title }}</li>
            </ol>
        </nav>

        <h1 class="mb-3">{{ $chapter->title }}</h1>
        <p class="lead text-muted">Part of: <a href="{{ route('book.detail', $book->id) }}" class="text-decoration-none">{{ $book->title }}</a> by {{ $book->author }}</p>

        <hr>

        {{-- Chapter Content (using Markdown conversion) --}}
        <div class="chapter-content my-4 p-4 bg-light rounded shadow-sm fs-5">
            {!! $chapterHtmlContent !!}
        </div>

        <hr>

        {{-- Chapter Navigation --}}
        <div class="d-flex justify-content-between mt-4 mb-5">
            @if ($previousChapter)
                <a href="{{ route('chapter.detail', [$book->id, $previousChapter->id]) }}" class="btn btn-lg btn-outline-primary">
                    &larr; Previous: {{ $previousChapter->title }}
                </a>
            @else
                <span></span> {{-- Empty span to push next button to the right if no previous --}}
            @endif

            @if ($nextChapter)
                <a href="{{ route('chapter.detail', [$book->id, $nextChapter->id]) }}" class="btn btn-lg btn-primary">
                    Next: {{ $nextChapter->title }} &rarr;
                </a>
            @else
                <span></span> {{-- Empty span for consistent layout --}}
            @endif
        </div>
    </div>
@endsection
