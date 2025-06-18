@extends('layouts.app')

@section('main')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card border-1 shadow-sm" style=" box-shadow: 0 10px 32px #4b556310;">
                <div class="card-header text-white"
                     style=" font-size:1.17rem; letter-spacing:.5px;">
                    Edit Book: {{ $book->title }}
                </div>
                <div class="card-body" style="background:rgba(255,255,255,0.97); border-radius: 0 0 24px 24px;">
                    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="mb-4">
                            <label for="title" class="form-label" style="font-size:1.05rem;">Title</label>
                            <input type="text" class="form-control rounded-pill shadow-sm @error('title') is-invalid @enderror"
                                   id="title" name="title" value="{{ old('title', $book->title) }}" style="background:#f1f5f9; border:1.5px solid #c7d2fe;">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="author" class="form-label" style="font-size:1.05rem;">Author</label>
                            <input type="text" class="form-control rounded-pill shadow-sm @error('author') is-invalid @enderror"
                                   id="author" name="author" value="{{ old('author', $book->author) }}" style="background:#f1f5f9; border:1.5px solid #c7d2fe;">
                            @error('author')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label" style="font-size:1.05rem;">Description</label>
                            <textarea class="form-control shadow-sm @error('description') is-invalid @enderror"
                                      id="description" name="description" rows="5"
                                      style="background:#f1f5f9; border:1.5px solid #c7d2fe; border-radius:18px;">{{ old('description', $book->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Simple custom dropdown for categories -->
                        <div class="mb-4">
                            <label class="form-label" style="font-size:1.05rem;">Categories</label>
                            <div style="position:relative;">
                                <div id="dropdownToggle" class="form-control" style="cursor:pointer; background:#f1f5f9; border:1.5px solid #c7d2fe; border-radius:18px; min-height:46px; display:flex; align-items:center;">
                                    <span id="dropdownLabel">
                                        @php
                                            $selected = $book->categories->pluck('name')->toArray();
                                        @endphp
                                        {{ $selected ? implode(', ', $selected) : 'Select categories' }}
                                    </span>
                                    <span style="margin-left:auto;">&#9662;</span>
                                </div>
                                <div id="dropdownMenu" style="display:none; position:absolute; z-index:1000; background:#fff; border:1.5px solid #c7d2fe; border-radius:18px; width:100%; box-shadow:0 2px 8px #0001; max-height:200px; overflow:auto;">
                                    @foreach($categories as $category)
                                    <div style="padding:6px 16px;">
                                        <label style="cursor:pointer; width:100%">
                                            <input type="checkbox" name="category_ids[]" value="{{ $category->id }}"
                                                {{ (in_array($category->id, old('category_ids', $book->categories->pluck('id')->toArray()))) ? 'checked' : '' }}>
                                            {{ $category->name }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @error('category_ids')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                            @error('category_ids.*')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="image" class="form-label" style="font-size:1.05rem;">Book Cover Image</label>
                            @if ($book->image)
                                <div class="mb-2">
                                    <img src="{{ asset('uploads/books/thumb/' . $book->image) }}" alt="Current Image"
                                         class="img-thumbnail shadow-sm" style="max-width: 150px; border-radius:14px;">
                                </div>
                            @endif
                            <input type="file" class="form-control rounded-pill shadow-sm @error('image') is-invalid @enderror"
                                   id="image" name="image" style="background:#f1f5f9; border:1.5px solid #c7d2fe;">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="status" class="form-label" style="font-size:1.05rem;">Status</label>
                            <select class="form-control rounded-pill shadow-sm @error('status') is-invalid @enderror"
                                    id="status" name="status" style="background:#f1f5f9; border:1.5px solid #c7d2fe;">
                                <option value="1" {{ old('status', $book->status) == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $book->status) == '0' ? 'selected' : '' }}>Blocked</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="submit"
                                    class="btn btn-primary rounded-pill px-4 shadow-sm"
                                    style="font-size:1.06rem;">
                                Update Book
                            </button>
                            <a href="{{ route('books.index') }}"
                               class="btn btn-outline-secondary rounded-pill px-4 shadow-sm"
                               style="font-size:1.06rem;">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Minimal JS for custom dropdown --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('dropdownToggle');
    const menu = document.getElementById('dropdownMenu');
    toggle.addEventListener('click', function(e) {
        menu.style.display = menu.style.display === "block" ? "none" : "block";
    });
    document.addEventListener('click', function(e) {
        if (!toggle.contains(e.target) && !menu.contains(e.target)) {
            menu.style.display = "none";
        }
    });
});
</script>
@endsection
