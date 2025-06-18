@extends('layouts.app')

@section('main')
<div class="container mt-5">
    {{-- Back to books link --}}
    <a href="{{ route('account.book_index') }}" class="text-decoration-none text-dark">
        <i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp; <strong>Back to books</strong>
    </a>

    <div class="row pt-5">
        {{-- Book Image Section --}}
        <div class="col-md-4">
            @if($book->image != "")
            <img src="{{ asset('uploads/books/thumb/'.$book->image) }}" alt="{{ $book->title }}" class="card-img-top">
            @else
            {{-- Provide a local fallback image if 'no-image.png' exists in public/images --}}
            <img src="{{ asset('images/no-image.png') }}" alt="No Image" class="card-img-top">
            {{-- Or use the external placeholder if you prefer: --}}
            {{-- <img src="https://placehold.co/990x1400?text=No Image" alt="No Image" class="card-img-top"> --}}
            @endif

            {{-- Library and Favorites Buttons --}}
            @if (Auth::check() && Auth::user()->role !== 'admin')
            <div class="d-grid gap-2 mt-4">
                @if(isset($inLibrary) && $inLibrary)
                <form action="{{ route('books.removeFromLibrary', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning w-100"><i class="fas fa-bookmark me-2"></i>Remove from
                        Library</button>
                </form>
                @else
                <form action="{{ route('books.addToLibrary', $book->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary w-100"><i class="fas fa-bookmark me-2"></i>Add to
                        Library</button>
                </form>
                @endif

                @if(isset($isFavorite) && $isFavorite)
                <form action="{{ route('books.removeFromFavorites', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger w-100"><i class="fas fa-heart me-2"></i>Remove from
                        Favorites</button>
                </form>
                @else
                <form action="{{ route('books.addToFavorites', $book->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-info w-100"><i class="fas fa-heart me-2"></i>Add to
                        Favorites</button>
                </form>
                @endif
            </div>
            @elseif(Auth::check() && Auth::user()->role === 'admin')
            <div class="mt-4 alert alert-info text-center">
                Admins cannot modify personal library/favorites from here.
            </div>
            @endif
        </div>

        {{-- Book Details, Chapters, and Reviews Section --}}
        <div class="col-md-8">
            @include('layouts.message') {{-- Display success/error messages --}}

            <h1 class="h3">{{ $book->title }}</h1>
            <p class="text-muted">{{ $book->author }}</p>

            {{-- Star Rating Display for the Book --}}
            <div class="text-warning">
                @php
                // Calculate average rating directly from the eager-loaded reviews collection
                $avgRating = $book->reviews->avg('rating');
                $avgRating = round($avgRating * 2) / 2; // Round to nearest 0.5
                @endphp
                @for($i = 1; $i <= 5; $i++) @if($i <=$avgRating) <i class="fa fa-star"></i>
                    @elseif($i - 0.5 <= $avgRating) <i class="fa fa-star-half-o"></i>
                        @else
                        <i class="fa fa-star-o"></i>
                        @endif
                        @endfor
                        ({{ $book->reviews->count() }} {{ Str::plural('Review', $book->reviews->count()) }})
            </div>

            <p class="mt-3">{{ $book->description }}</p>

            {{-- Chapters List Section --}}
            <h2 class="mt-4">Chapters</h2>
            @if ($book->chapters->isNotEmpty())
            <ul class="list-group">
                @php
                $chunks = $book->chapters->chunk(ceil($book->chapters->count() / 3)); // 3 columns, adjust as needed
                @endphp
                <div class="row">
                    @foreach ($chunks as $chunk)
                    <div class="col-md-4">
                        <ul class="list-group mb-3">
                            @foreach ($chunk as $chapter)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="btn btn-outline-primary rounded-pill btn-sm">
                                    <a href="{{ route('chapter.detail', [$book->id, $chapter->id]) }}"
                                        class="text-decoration-none">
                                        {{ $chapter->title }}
                                    </a>
                                </span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </ul>
            @else
            <p>No chapters found for this book.</p>
            @endif

            {{-- "Readers also enjoyed" section --}}
            @if (isset($relatedBooks) && $relatedBooks->isNotEmpty())
            <div class="col-md-12 pt-2 mt-4">
                <hr>
                <h2 class="h3 mb-4">Readers also enjoyed</h2>
                <div class="row">
                    @foreach ($relatedBooks as $relatedBook)
                    <div class="col-md-4 col-lg-4 mb-4">
                        <div class="card border-0 shadow-lg">
                            <a href="{{ route("book.detail", $relatedBook->id) }}">
                                @if ($relatedBook->image != '')
                                <img src="{{ asset('uploads/books/thumb/'.$relatedBook->image) }}"
                                    alt="{{ $relatedBook->title }}" class="card-img-top">
                                @else
                                <img src="{{ asset('images/no-image.png') }}" alt="No Image" class="card-img-top">
                                @endif
                            </a>
                            <div class="card-body">
                                <h3 class="h4 heading"><a
                                        href="{{ route("book.detail", $relatedBook->id) }}">{{ $relatedBook->title }}</a>
                                </h3>
                                <p>{{ $relatedBook->author }}</p>
                                <div class="text-warning">
                                    @php
                                    $relatedAvgRating = $relatedBook->reviews->avg('rating');
                                    $relatedAvgRating = round($relatedAvgRating * 2) / 2; // Round to nearest 0.5
                                    @endphp
                                    @for($i = 1; $i <= 5; $i++) @if($i <=$relatedAvgRating) <i class="fa fa-star"></i>
                                        @elseif($i - 0.5 <= $relatedAvgRating) <i class="fa fa-star-half-o"></i>
                                            @else
                                            <i class="fa fa-star-o"></i>
                                            @endif
                                            @endfor
                                            ({{ $relatedBook->reviews->count() }}
                                            {{ Str::plural('Review', $relatedBook->reviews->count()) }})
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            {{-- Reviews Section --}}
            <div class="col-md-12 pt-2 mt-4">
                <hr>
                <div class="d-flex justify-content-between">
                    <h3>Reviews</h3>
                    <div>
                        @if (Auth::check())
                        @php
                        // Check if the current user has already reviewed this book
                        $userReview = \App\Models\Review::where('user_id', Auth::id())
                        ->where('book_id', $book->id)
                        ->first();
                        @endphp
                        @if (!$userReview)
                        {{-- CORRECTED: data-bs-target now points to #reviewModal --}}
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#reviewModal">
                            Add Review
                        </button>
                        @else
                        <p class="text-muted">You have already submitted a review for this book.
                            @if (Route::has('account.myReviews.editReview'))
                            <a href="{{ route('account.myReviews.editReview', $userReview->id) }}">Edit your review</a>
                            @endif
                        </p>
                        @endif
                        @else
                        <a href="{{ route('account.login') }}" class="btn btn-primary">Add Review</a>
                        @endif
                    </div>
                </div>

                @if ($book->reviews->isNotEmpty())
                @foreach ($book->reviews as $review)
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-3">{{ $review->user->name }}</h5>
                            <span class="text-muted">
                                {{ \Carbon\Carbon::parse($review->created_at)->format('d M, Y') }}
                            </span>
                        </div>
                        <div class="text-warning">
                            @for($i = 1; $i <= 5; $i++) @if($i <=$review->rating)
                                <i class="fa fa-star"></i>
                                @else
                                <i class="fa fa-star-o"></i>
                                @endif
                                @endfor
                        </div>
                        <div class="content mt-2">
                            <p>{{ $review->review }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="mt-4">
                    Reviews not found. Be the first to add a review!
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="reviewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="reviewModalLabel">Add Review for <strong>{{ $book->title }}</strong>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="bookReviewForm" name="bookReviewForm">
                @csrf
                <input type="hidden" name="book_id" value="{{ $book->id }}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="review" class="form-label">Review</label>
                        <textarea name="review" id="review" class="form-control" rows="5"
                            placeholder="Your review"></textarea>
                        <p class="invalid-feedback" id="review-error"></p>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <select class="form-control" id="rating" name="rating">
                            <option value="">Select Rating</option>
                            <option value="1">1 Star</option>
                            <option value="2">2 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="5">5 Stars</option>
                        </select>
                        <p class="invalid-feedback" id="rating-error"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $("#bookReviewForm").submit(function(e) {
        e.preventDefault();
        $("#review").removeClass('is-invalid');
        $("#review-error").html('');
        $("#rating").removeClass('is-invalid');
        $("#rating-error").html('');
        $(this).find('button[type=\"submit\"]').prop('disabled', true);
        $.ajax({
            url: '{{ route("review.save") }}',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: $(this).serialize(),
            success: function(response) {
                $('#bookReviewForm').find('button[type=\"submit\"]').prop('disabled', false);
                if (response.status === false) {
                    var errors = response.errors;
                    if (errors.review) {
                        $("#review").addClass('is-invalid');
                        $("#review-error").html(errors.review[0]);
                    }
                    if (errors.rating) {
                        $("#rating").addClass('is-invalid');
                        $("#rating-error").html(errors.rating[0]);
                    }
                    if (errors.general) {
                        // alert(errors.general[0]); // Remove alert
                    }
                } else if (response.status === true && response.message) {
                    // Remove alert(response.message);
                    $("#bookReviewForm")[0].reset();
                    $('#reviewModal').modal('hide');
                    window.location.reload();
                } else {
                    // Remove alert('Review submitted!');
                    $("#bookReviewForm")[0].reset();
                    $('#reviewModal').modal('hide');
                    window.location.reload();
                }
            },
            error: function(xhr, status, error) {
                $('#bookReviewForm').find('button[type=\"submit\"]').prop('disabled', false);
                if (xhr.status === 422 || xhr.status === 409) {
                    var errors = xhr.responseJSON.errors;
                    $("#review").removeClass('is-invalid');
                    $("#review-error").html('');
                    $("#rating").removeClass('is-invalid');
                    $("#rating-error").html('');
                    if (errors.review) {
                        $("#review").addClass('is-invalid');
                        $("#review-error").html(errors.review[0]);
                    }
                    if (errors.rating) {
                        $("#rating").addClass('is-invalid');
                        $("#rating-error").html(errors.rating[0]);
                    }
                    if (errors.general) {
                        // alert(errors.general[0]); // Remove alert
                    }
                } else {
                    // alert("An unexpected error occurred. Please try again later. (Error: " + xhr.status + ")");
                }
            }
        });
    });
</script>
@endsection
