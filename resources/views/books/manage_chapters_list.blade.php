@extends('layouts.app')

@section('main')
<div class="container my-5">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-9">
            @include('layouts.message')

            <div class="card border-1 shadow-sm">
                <div class="card-header bg-primary text-white">
                    Manage Chapters by Book
                </div>
                <div class="card-body pb-0">
                    {{-- Search form for books --}}
                    <form action="{{ route('admin.chapters.books') }}" method="get" class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="keyword" placeholder="Search books by title" value="{{ Request::get('keyword') }}">
                            <button class="btn btn-primary" type="submit">Search</button>
                            @if(Request::has('keyword'))
                                <a href="{{ route('admin.chapters.books') }}" class="btn btn-outline-secondary">Clear</a>
                            @endif
                        </div>
                    </form>

                    @if ($books->isNotEmpty())
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th width="130">Chapters</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                            <td>{{ $book->title }}</td>
                                            <td>{{ $book->author }}</td>
                                            <td class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('chapters.index', $book->id) }}" class="btn btn-outline-primary btn-sm">
                                                    <i class="fa-solid fa-list"></i> Manage
                                                </a>
                                                <span class="badge bg-secondary ms-1">
                                                    {{ $book->chapters_count ?? $book->chapters->count() ?? 0 }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3 mb-2">
                            {{ $books->links() }}
                        </div>
                    @else
                        <div class="alert alert-info text-center mt-3">
                            No books found to manage chapters for.
                        </div>
                    @endif
                </div>
            </div>
            <a href="{{ route('books.index') }}" class="btn rounded-pill btn-outline-dark mt-4">Back to Books List</a>
        </div>
    </div>
</div>
@endsection
