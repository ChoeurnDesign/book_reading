@extends('layouts.app')

@section('main')
<div class="container py-5">
    <h2 class="text-center mb-5">Create New Book</h2>

    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ old('author') }}">
            @error('author')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Categories Multi-select -->
        <div class="mb-3">
            <label for="category_ids" class="form-label">Categories</label>
            <select class="form-control @error('category_ids') is-invalid @enderror" id="category_ids" name="category_ids[]" multiple>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ in_array($category->id, old('category_ids', [])) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_ids')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            @error('category_ids.*')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <!-- End Categories Multi-select -->

        <div class="mb-3">
            <label for="image" class="form-label">Book Cover Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Published</option>
                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Draft</option>
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Featured Checkbox -->
        <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" value="1" id="featured" name="featured" {{ old('featured') ? 'checked' : '' }}>
            <label class="form-check-label" for="featured">
                Featured Book
            </label>
        </div>
        <!-- End Featured Checkbox -->

        <button type="submit" class="btn btn-primary">Create Book</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
