@extends('layouts.app')

@section('main')
<div class="container my-5">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-9">
            @include('layouts.message')

            <div class="card border-0 shadow">
                <div class="card-header text-white bg-primary">
                    Edit Chapter: "{{ $chapter->title }}" for "{{ $book->title }}"
                </div>
                <div class="card-body">
                    <form action="{{ route('chapters.update', [$book->id, $chapter->id]) }}" method="POST">
                        @csrf
                        @method('PUT') {{-- Use PUT method for updates --}}

                        <div class="mb-3">
                            <label for="title" class="form-label">Chapter Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $chapter->title) }}" placeholder="Enter chapter title">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content (Markdown)</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="15" placeholder="Write chapter content in Markdown">{{ old('content', $chapter->content) }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="order" class="form-label">Order</label>
                            <input type="number" class="form-control @error('order') is-invalid @enderror" id="order" name="order" value="{{ old('order', $chapter->order) }}" placeholder="Chapter order (e.g., 1, 2, 3)">
                            @error('order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update Chapter</button>
                        <a href="{{ route('chapters.index', $book->id) }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
