@extends('layouts.app')

@section('main')
{{-- <pre>{{ print_r($featuredBooks, true) }}</pre> --}}
{{-- HERO SECTION --}}
<section class="hero position-relative" style="min-height: 550px; background: linear-gradient(120deg, #8dafe5 0%, #05798e 100%);">
    <img src="{{ asset('img_style/background.jpg') }}"
         class="w-100 h-100 position-absolute top-0 start-0 object-fit-cover"
         style="opacity: 0.5; object-fit: cover; z-index: 1;" alt="Books Background">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(30,41,59,0.45);z-index:2;"></div>
    <div class="container position-relative z-3 py-5 d-flex flex-column align-items-center justify-content-center" style="min-height: 550px;">
        <h1 class="display-3 fw-bold text-white mb-3" style="letter-spacing: 1px;">BookNest - Read. Discover. Connect.</h1>
        <p class="lead text-white-50 mb-4" style="font-size: 1.35rem; max-width: 700px;">
            Dive into a world of stories—read and explore thousands of books online, anytime, anywhere, with a global community.
        </p>
        @auth
            <a href="{{ route('account.book_index') }}" class="btn btn-light btn-lg fw-semibold shadow px-5 py-2 rounded-pill">Browse Library</a>
        @else
            <a href="{{ route('account.register') }}" class="btn btn-warning btn-lg fw-semibold shadow px-5 py-2 rounded-pill">Get Started Free</a>
        @endauth
    </div>
</section>

{{-- FEATURED BOOKS SECTION --}}
@if(isset($featuredBooks) && $featuredBooks->count())
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold text-primary text-center mb-5"><i class="fa-solid fa-star text-warning me-2"></i>Featured Books</h2>
        <div class="row g-4">
            @foreach($featuredBooks as $book)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0">
                    {{-- Book cover --}}
                    <img src="{{ $book->cover_url ?? asset('img_style/default_book.png') }}"
                         alt="{{ $book->title }}"
                         class="card-img-top">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="fw-semibold mb-1">{{ Str::limit($book->title, 36) }}</h5>
                        <div class="mb-1 text-muted" style="font-size: 0.97rem;">by {{ $book->author }}</div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2 text-warning">
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span class="fw-bold">{{ number_format($book->avg_rating, 2) }}</span>
                            <span class="ms-2 text-muted" style="font-size:.97rem;">
                                {{ $book->reviews_count }} {{ $book->reviews_count === 1 ? 'Review' : 'Reviews' }}
                            </span>
                        </div>
                        <a href="{{ route('book.detail', $book->id) }}" class="btn btn-outline-primary w-100 rounded-pill mt-auto fw-semibold">Read Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('account.book_index') }}" class="btn btn-primary rounded-pill px-4 shadow-sm">See All Books</a>
        </div>
    </div>
</section>
@endif

{{-- FEATURES SECTION --}}
<section class="features py-5 bg-white border-top">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-12 col-md-3">
                <div class="bg-primary bg-opacity-10 rounded-3 p-4 h-100">
                    <i class="fas fa-list-ol fa-2x mb-3 text-primary"></i>
                    <h5 class="fw-bold">Seamless Reading Flow</h5>
                    <p class="mb-0 text-secondary">Jump between chapters and always pick up right where you left off, for an uninterrupted reading journey.</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="bg-success bg-opacity-10 rounded-3 p-4 h-100">
                    <i class="fas fa-tablet-alt fa-2x mb-3 text-success"></i>
                    <h5 class="fw-bold">Read Anywhere, Anytime</h5>
                    <p class="mb-0 text-secondary">Access your entire library seamlessly on any device—no app needed, just your browser.</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="bg-warning bg-opacity-10 rounded-3 p-4 h-100">
                    <i class="fas fa-bookmark fa-2x mb-3 text-warning"></i>
                    <h5 class="fw-bold">Personal Bookmarks</h5>
                    <p class="mb-0 text-secondary">Save your progress and quickly revisit favorite books or passages.</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="bg-info bg-opacity-10 rounded-3 p-4 h-100">
                    <i class="fas fa-star fa-2x mb-3 text-info"></i>
                    <h5 class="fw-bold">Community Reviews</h5>
                    <p class="mb-0 text-secondary">Share your thoughts and discover new reads from the wisdom of fellow book lovers.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


