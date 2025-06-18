@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row my-5">
        <div class="col-md-3">
           @include('layouts.sidebar')
        </div>
        <div class="col-md-9">
                <div class="card border-0 shadow-lg" style="border-radius:30px;background:#f9f9f9;box-shadow:0 4px 40px rgba(0,0,0,0.10);overflow:hidden;">
                    <div class="card-header" style="background:linear-gradient(90deg,#3b82f6 0%,#9333ea 100%);border-bottom:1px solid #e2e2e2;height:48px;display:flex;align-items:center;justify-content:center;font-weight:600;color:#fff;font-size:1.1rem; font-family: 'San Francisco', 'SF Pro Display', 'Segoe UI', 'Roboto', 'Arial', sans-serif;">
                        My Library
                    </div>
                    <div class="card-body" style="background:#fff;border-radius:0 0 30px 30px;padding:28px 28px 24px 28px; font-family: 'San Francisco', 'SF Pro Display', 'Segoe UI', 'Roboto', 'Arial', sans-serif;">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif

                        @if($libraryBooks->isEmpty())
                            <div class="alert alert-info">
                                Your library is empty. Start adding some books!
                            </div>
                        @else
                            <div class="table-responsive" style="border-radius:12px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,0.03);">
                                <table class="table table-hover align-middle" style="font-family: 'San Francisco', 'SF Pro Display', 'Segoe UI', 'Roboto', 'Arial', sans-serif;">
                                    <thead class="table-light">
                                        <tr style="background:#f1f3f7;">
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($libraryBooks as $book)
                                            <tr>
                                                <td>
                                                    @if($book->image)
                                                        <img src="{{ asset('uploads/books/thumb/'.$book->image) }}" alt="{{ $book->title }}" style="width:70px;height:90px;object-fit:cover;border-radius:8px;box-shadow:0 1px 4px rgba(0,0,0,0.08);">
                                                    @else
                                                        <img src="https://placehold.co/70x90/EFEFEF/AAAAAA?text=No+Image" alt="No Image" style="width:70px;height:90px;object-fit:cover;border-radius:8px;box-shadow:0 1px 4px rgba(0,0,0,0.08);">
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('book.detail', $book->id) }}" style="color:#276ef1;font-weight:500;text-decoration:none;">{{ $book->title }}</a>
                                                </td>
                                                <td>{{ $book->author }}</td>
                                                <td>
                                                    {{ $book->categories->pluck('name')->join(', ') ?: 'N/A' }}
                                                </td>
                                                <td>
                                                    @if (Auth::user()->role !== 'admin')
                                                        <form action="{{ route('books.removeFromLibrary', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this book from your library?');" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" style="border-radius:6px;">Remove</button>
                                                        </form>
                                                    @else
                                                        <span class="badge bg-secondary">View Only</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center">
                                {{ $libraryBooks->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
