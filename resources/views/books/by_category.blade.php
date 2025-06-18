@extends('layouts.app')

@section('main')
<div class="w-100 py-5 bg-light">
    <div class="container text-center" style="max-width:1400px;">
        <div class="row align-items-center mb-2 text-start">
            <div class="col-2 text-start">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                    &larr; Back
                </a>
            </div>
            <div class="col-8 text-center">
                <h1 class="display-5 fw-bold mb-4 m-0">
                    Books in Category: <span class="text-primary">{{ $category->name ?? 'N/A' }}</span>
                </h1>
            </div>
            <div class="col-2"></div>
        </div>


        @if ($books->isNotEmpty())
        <div class="row mb-4 justify-content-center">
            @foreach ($books as $book)
            @php
                $avgRating = $book->reviews->avg('rating');
                $avgRating = round($avgRating * 2) / 2;
                $reviewCount = $book->reviews->count();
            @endphp
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex">
                <div class="card border-0 shadow-sm w-100">
                    <a href="{{ route('book.detail', $book->id) }}">
                        <img src="{{ $book->image ? asset('uploads/books/thumb/'.$book->image) : 'https://placehold.co/300x300/EFEFEF/AAAAAA?text=No+Image' }}"
                             alt="{{ $book->title }}"
                             class="img-fluid"
                             style="width:100%;height:300px;object-fit:cover;display:block;"
                             onerror="this.onerror=null;this.src='https://placehold.co/300x300/EFEFEF/AAAAAA?text=No+Image';">
                    </a>
                    <div class="p-3 pt-4 text-start" style="background:#fff;">
                        <div class="fw-semibold fs-5 mb-1 text-dark text-truncate" title="{{ $book->title }}">{{ $book->title }}</div>
                        <div class="mb-2 text-muted" style="font-size:1rem;">{{ $book->author }}</div>
                        <div class="d-flex align-items-center gap-2 mb-0" style="font-size:1rem;">
                            <span class="text-primary" style="font-size:1.1rem;">{{ number_format($avgRating, 1) }}</span>
                            <span class="text-warning">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $avgRating)
                                        <i class="fa fa-star"></i>
                                    @elseif($i - 0.5 <= $avgRating)
                                        <i class="fa fa-star-half-o"></i>
                                    @else
                                        <i class="fa fa-star-o"></i>
                                    @endif
                                @endfor
                            </span>
                        </div>
                        <div class="text-start mt-1" style="font-size:0.95rem;">
                            <span class="text-muted">
                                ({{ $reviewCount }} {{ \Illuminate\Support\Str::plural('Review', $reviewCount) }})
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center py-2">
            {{ $books->links() }}
        </div>
        @else
        <p class="fs-5 text-muted">No books found in this category.</p>
        @endif
    </div>
</div>
@endsection
