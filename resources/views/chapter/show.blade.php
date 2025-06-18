@extends('layouts.app') {{-- Extends your main application layout --}}

@section('main')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="mb-3">{{ $chapter->title }}</h1>
            <p class="lead text-muted">From the book: <a href="{{ route('book.detail', $book->id) }}">{{ $book->title }}</a> by <strong>{{ $book->author }}</strong></p>

            <hr>

            <div class="chapter-content mb-4">
                {{-- Content from Markdown will be rendered as HTML --}}
                {!! $chapterHtmlContent !!}
            </div>

            <hr>

            <div class="d-flex justify-content-between mb-4">
                @if ($previousChapter)
                    <a href="{{ route('chapter.detail', [$book->id, $previousChapter->id]) }}" class="btn btn-outline-primary d-flex align-items-center">
                        <i class="fas fa-arrow-left me-2"></i> Previous: {{ $previousChapter->title }}
                    </a>
                @else
                    <span></span>
                @endif

                @if ($nextChapter)
                    <a href="{{ route('chapter.detail', [$book->id, $nextChapter->id]) }}" class="btn btn-outline-primary d-flex align-items-center">
                        Next: {{ $nextChapter->title }} <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                @else
                    <span></span>
                @endif
            </div>

            <div class="text-center">
                <a href="{{ route('book.detail', $book->id) }}" class="btn btn-secondary">Back to Book Details</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
{{-- Any specific scripts for chapter detail page --}}
@endsection
