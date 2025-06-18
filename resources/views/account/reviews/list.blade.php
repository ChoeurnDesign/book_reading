@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row my-5">
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-9">
            @include('layouts.message')

            <div class="card border-0 shadow" style="border-radius: 24px; box-shadow: 0 10px 32px #4b556310;">
                <div class="card-header text-white">
                    Reviews
                </div>
                <div class="card-body pb-0" style="background:rgba(255,255,255,0.97); border-radius: 0 0 24px 24px;">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div></div>
                        <form action="" method="get">
                            <div class="d-flex align-items-center">
                                <input type="text"
                                       class="form-control rounded-pill shadow-sm"
                                       style="background:#f1f5f9; border:1.5px solid #c7d2fe; min-width:190px; font-size:1rem;"
                                       value="{{ Request::get('keyword') }}"
                                       name="keyword"
                                       placeholder="Keyword">
                                <button type="submit"
                                        class="btn btn-primary ms-2 rounded-pill px-4 border:none;">
                                    <i class="fa fa-search me-1"></i>
                                </button>
                                <a href="{{ route('account.reviews') }}"
                                   class="btn btn-outline-secondary ms-2 rounded-pill px-4">
                                    Clear
                                </a>
                            </div>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle mt-3">
                            <thead>
                                <tr style="font-size:1rem;">
                                    <th>Review</th>
                                    <th>Book</th>
                                    <th>Rating</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th width="100">Action</th>
                                </tr>
                                <tr>
                                    <td colspan="6" style="padding:0;">
                                        <hr style="margin:0; border: none; border-top: 1.5px solid #2a2b2c;">
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($reviews->isNotEmpty())
                                    @foreach ($reviews as $review)
                                        <tr>
                                            <td style="max-width: 230px; color:#64748b;">
                                                <span style="display: inline-block; white-space:pre-line; word-break:break-word; font-size:1rem;">
                                                    {{ $review->review }}
                                                </span>
                                                <br>
                                                <span class= text-primary">{{ $review->user->name }}</span>
                                            </td>
                                            <td style="font-weight:500; color:#374151;">
                                                {{ $review->book->title }}
                                            </td>
                                            <td>
                                                <span style="font-weight:600; font-size:1.1rem; color:#f59e42;">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <i class="fa{{ $i <= $review->rating ? 's' : 'r' }} fa-star" style="font-size:1.05rem;"></i>
                                                    @endfor
                                                </span>
                                                <span class="ms-1 text-muted" style="font-size:.99rem;">({{ $review->rating }})</span>
                                            </td>
                                            <td class="text-muted" style="font-size:.98rem;">
                                                {{ \Carbon\Carbon::parse($review->created_at)->format('d M, Y') }}
                                            </td>
                                            <td>
                                                @if ($review->status == 1)
                                                    <span class="badge bg-success rounded-pill px-3 py-2" style="font-size:.97rem;">Active</span>
                                                @else
                                                    <span class="badge bg-danger rounded-pill px-3 py-2" style="font-size:.97rem;">Blocked</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('account.reviews.edit', $review->id) }}"
                                                   class="btn btn-light btn-sm rounded-pill shadow-sm me-2"
                                                   style="border:1.5px solid #c7d2fe;">
                                                    <i class="fa-regular fa-pen-to-square text-primary"></i>
                                                </a>
                                                <a href="javascript:void(0);"
                                                   onclick="deleteReview({{ $review->id }})"
                                                   class="btn btn-light btn-sm rounded-pill shadow-sm"
                                                   style="border:1.5px solid #fecaca;">
                                                    <i class="fa-solid fa-trash text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center text-muted py-4" style="font-size:1.1rem;">No reviews found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2 mb-3 d-flex justify-content-end">
                        {{ $reviews->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    function deleteReview(id) {
        if (confirm("Are you sure you want to delete?")) {
            $.ajax({
                url: '{{ route("account.reviews.deleteReview") }}',
                method: 'POST',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    window.location.href = '{{ route("account.reviews") }}';
                },
                error: function(xhr) {
                    alert("Failed to delete. Please try again.");
                }
            });
        }
    }
</script>
@endsection
