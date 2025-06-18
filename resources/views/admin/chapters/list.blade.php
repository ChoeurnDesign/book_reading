@extends('layouts.app') {{-- Extends your main application layout --}}

@section('main')
<div class="container my-5">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.sidebar') {{-- Includes your sidebar --}}
        </div>
        <div class="col-md-9">
            @include('layouts.message') {{-- Includes your message partial for success/error messages --}}

            <div class="card border-1 shadow">
                <div class="card-header text-white">
                    Chapters for "{{ $book->title }}"
                </div>
                <div class="card-body pb-0">
                    <div class="d-flex justify-content-between mb-3">
                        <a href="{{ route('chapters.create', $book->id) }}" class="btn btn-success rounded-pill">Add New Chapter</a>
                        {{-- Optional: Add search for chapters here later if needed --}}
                    </div>

                    @if ($chapters->isNotEmpty())
                        <table class="table table-striped mt-3">
                            <thead class="table-light">
                                <tr>
                                    <th>Order</th>
                                    <th>Title</th>
                                    <th width="150">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chapters as $chapter)
                                    <tr>
                                        <td>{{ $chapter->order }}</td>
                                        <td>
                                            {{-- Link to the public detail page for the chapter --}}
                                            <a href="{{ route('chapter.detail', [$book->id, $chapter->id]) }}" class="text-decoration-none">
                                                {{ $chapter->title }}
                                            </a>
                                        </td>
                                        <td>
                                            {{-- Adjusted for better button spacing and alignment --}}
                                            <div class="d-flex gap-1"> {{-- Use d-flex and gap-1 for consistent spacing --}}
                                                <a href="{{ route('chapters.edit', [$book->id, $chapter->id]) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i> </a>
                                                <form action="{{ route('chapters.destroy', $chapter->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this chapter?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- If you paginate chapters in the controller, display links here (e.g., $chapters->links()) --}}
                    @else
                        <div class="alert alert-info text-center mt-3">
                            No chapters found for this book yet. <a href="{{ route('chapters.create', $book->id) }}">Add the first chapter</a>?
                        </div>
                    @endif
                </div>
            </div>
            <a href="{{ route('admin.chapters.books') }}" class="btn btn-outline-dark rounded-pill mt-4">Back to Books for Chapters</a>
        </div>
    </div>
</div>
@endsection

@section('script')
{{-- JavaScript for handling delete (optional if using simple form submit) --}}
@endsection
