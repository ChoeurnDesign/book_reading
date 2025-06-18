@extends('layouts.app')

@section('main')
<div class="container mt-3 pb-5">
    <div class="row justify-content-center d-flex mt-5">
        <div class="col-md-12">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="mb-0">Books</h2>
                <div class="mt-2">
                    <a href="{{ route('account.book_index') }}" class="text-dark text-decoration-none fw-bold">Clear Search</a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="" method="GET" style="width: 100%; max-width: 920px;">
                    <div class="input-group" style="border-radius: 20px; overflow: hidden; box-shadow: 0 0 0 1px #ccc;">
                        <span class="input-group-text bg-white border-0" style="padding-left: 24px;">
                            <!-- You can leave this span empty to remove the icon on the left -->
                        </span>
                        <input type="text"
                               class="form-control border-0"
                               name="keyword"
                               placeholder="Search by title"
                               value="{{ request('keyword') }}"
                               style="background: #fafbfc; font-size: 1.15rem; box-shadow: none;">
                        <button class="btn" type="submit">
                            <i class="fa fa-search me-2"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="row mt-4">
                @if ($books->isNotEmpty())
                    @foreach ($books as $book)
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card border-0 shadow-lg">
                            <a href="{{ route('book.detail', $book->id) }}">
                                @if ($book->image != '')
                                    <img src="{{ asset('uploads/books/thumb/'.$book->image) }}" alt="{{ $book->title }}" class="card-img-top rounded-top">
                                @else
                                    <img src="https://placehold.co/990x1400?text=No Image" alt="No Image Available" class="card-img-top rounded-top">
                                @endif
                            </a>
                            <div class="card-body">
                                <h3 class="h4 heading"><a href="{{ route('book.detail', $book->id) }}" class="text-decoration-none text-dark">{{ $book->title }}</a></h3>
                                <p class="text-muted">{{ $book->author }}</p>
                                @php
                                    if($book->reviews_count > 0){
                                        $avgRating = $book->reviews_sum_rating / $book->reviews_count;
                                    }else {
                                        $avgRating = 0;
                                    }
                                    $avgRatingPer = ($avgRating*100) /5;
                                @endphp

                                <div class="star-rating d-inline-flex align-items-center">
                                    <span class="rating-text theme-font theme-yellow me-1">{{ number_format($avgRating, 1) }}</span>
                                    <div class="star-rating d-inline-flex mx-1">
                                        <div class="back-stars position-relative" style="color: #e5e7eb;">
                                            @for($i=0;$i<5;$i++)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            @endfor
                                            <div class="front-stars position-absolute top-0 start-0 overflow-hidden" style="width: {{ $avgRatingPer }}%; color: #f9cf49;">
                                                @for($i=0;$i<5;$i++)
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                    <span class="theme-font text-muted ms-1">({{ ($book->reviews_count > 1) ? $book->reviews_count.' Reviews' : $book->reviews_count.' Review' }})</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <p class="text-center">No books found matching your search.</p>
                    </div>
                @endif

                <div class="col-12">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

