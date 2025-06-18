@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row my-5">
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-9">
            @include('layouts.message')
            <div class="card border-1 shadow-sm" style=" box-shadow: 0 10px 32px #4b556310;">
                <div class="card-header text-white" style="letter-spacing:.5px;">
                    Books
                </div>
                <div class="card-body pb-0" style="background:rgba(255,255,255,0.97); border-radius: 0 0 24px 24px;">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <a href="{{route('books.create')}}" class="btn btn-primary rounded-pill px-4 shadow-sm">Add Book</a>
                        <form action="" method="get">
                            <div class="d-flex align-items-center">
                                <input type="text"
                                       class="form-control rounded-pill shadow-sm"
                                       style="background:#f1f5f9; border:1.5px solid #c7d2fe; min-width:190px; font-size:1rem;"
                                       value="{{Request::get('keyword')}}"
                                       name="keyword"
                                       placeholder="Keyword">
                                <button type="submit"
                                        class="btn btn-primary ms-2 rounded-pill px-4 border:none;">
                                    <i class="fa fa-search me-1"></i>
                                </button>
                                <a href="{{route('books.index')}}"
                                   class="btn btn-outline-secondary ms-2 rounded-pill px-4">
                                    Clear
                                </a>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle mt-3">
                            <thead class="table">
                                <tr style="font-size:1rem;">
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Rating</th>
                                    <th>Status</th>
                                    <th class="text-center" width="150">Action</th>
                                </tr>
                                <tr>
                                    <td colspan="5" style="padding:0;">
                                        <hr style="margin:0; border: none; border-top: 1.5px solid #2a2b2c;">
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($books->isNotEmpty())
                                @foreach ($books as $book)
                                @php
                                    $avgRating = ($book->reviews_count > 0)
                                        ? $book->reviews_sum_rating / $book->reviews_count
                                        : 0;
                                @endphp
                                <tr>
                                    <td style="font-weight:500; color:#374151;">{{$book->title}}</td>
                                    <td style="color:#64748b;">{{$book->author}}</td>
                                    <td>
                                        <span style="font-size:1.05rem;">
                                            {{ number_format($avgRating, 2) }}
                                            <span class="ms-1 text-muted" style="font-size:.99rem;">
                                                {{ ($book->reviews_count > 1) ? $book->reviews_count. ' Reviews' : $book->reviews_count.' Review' }}
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        @if ($book->status == 1 || $book->status == 'published')
                                            <span class="badge text-success rounded-pill px-3 py-2" style="font-size:.97rem;">Active</span>
                                        @else
                                            <span class="badge text-danger rounded-pill px-3 py-2" style="font-size:.97rem;">Blocked</span>
                                        @endif
                                    </td>
                                    <td class="text-center fs-4 align-middle" width="150">
                                        <!-- Feature (Star) Toggle Button -->
                                        <button type="button"
                                            class="btn btn-light btn-sm rounded-pill shadow-sm me-2 feature-toggle"
                                            style="border:1.8px solid #fde68a;"
                                            data-id="{{ $book->id }}"
                                            title="{{ $book->featured ? 'Unfeature' : 'Feature' }}"
                                        >
                                            @if($book->featured)
                                                <i class="fa-solid fa-star text-warning"></i>
                                            @else
                                                <i class="fa-regular fa-star text-warning"></i>
                                            @endif
                                        </button>
                                        <a href="{{route('books.edit', $book->id)}}" class="btn btn-light btn-sm rounded-pill shadow-sm me-2" style="border:1.8px solid #c7d2fe;">
                                            <i class="fa-regular fa-pen-to-square text-primary"></i>
                                        </a>
                                        <a href="javascript:void(0);" onclick="deleteBook({{$book->id}});" class="btn btn-light btn-sm rounded-pill shadow-sm" style="border:1.8px solid #fecaca;">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4" style="font-size:1.1rem;">
                                        Books not found
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    @if($books->isNotEmpty())
                    <div class="mt-2 mb-3 d-flex justify-content-end">
                        {{$books->links()}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    // Ensure CSRF token is included globally for jQuery AJAX
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function deleteBook(id) {
        if (confirm("Are you sure you want to delete?")) {
            $.ajax({
                url: '{{route("books.destroy")}}',
                type: 'delete',
                data: {
                    id: id
                },
                success: function(response) {
                    window.location.href = '{{route("books.index")}}'
                },
                error: function(xhr, status, error){
                    alert("Something went wrong: " + error);
                }
            })
        }
    }

    // Star (Feature) Toggle AJAX
    $(document).on('click', '.feature-toggle', function() {
        var btn = $(this);
        var bookId = btn.data('id');
        $.ajax({
            url: '/books/' + bookId + '/toggle-featured',
            type: 'POST',
            success: function(data) {
                if (data.success) {
                    if(data.featured) {
                        btn.html('<i class="fa-solid fa-star text-warning"></i>');
                        btn.attr('title', 'Unfeature');
                    } else {
                        btn.html('<i class="fa-regular fa-star text-warning"></i>');
                        btn.attr('title', 'Feature');
                    }
                }
            },
            error: function(xhr, status, error){
                let msg = "Could not toggle featured status.";
                if(xhr.responseJSON && xhr.responseJSON.message){
                    msg += " " + xhr.responseJSON.message;
                }
                alert(msg);
            }
        });
    });
</script>
@endsection
