@extends('layouts.app')

@section('main')
<div class="container mt-5" >
    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-lg-5 col-md-7 col-12">
            <div class="card shadow-sm border-2 rounded-4 p-4 px-md-5 py-md-5">
                <div class="text-center mb-4 p-4">
                    <div class="mb-2">
                        <i class="fa-solid fa-unlock-keyhole fa-3x text-primary"></i>
                    </div>
                    <h3 class="fw-bold mb-3" style="letter-spacing: .5px;">Forgot Your Password?</h3>
                    <p class="text-muted mb-0" style="font-size: 1.05rem;">
                        Enter your email below and we’ll send you a link to reset your password.
                    </p>
                </div>
                @include('layouts.message')
                <form method="POST" action="{{ route('password.email') }}" autocomplete="off">
                    @csrf
                    <div class="mb-3 p-2">
                        <label for="email" class="form-label mb-3">Email address</label>
                        <input type="email"
                            name="email"
                            id="email"
                            class="form-control form-control rounded-pill p-2 @error('email') is-invalid @enderror"
                            placeholder="example@email.com"
                            value="{{ old('email') }}"
                            required
                            autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-grid gap-2 mt-4 justify-content-center d-flex">
                        <button type="submit" class="btn col-lg-4 btn-outline-dark rounded-pill btn-sm p-2">
                            <i class="fa-solid fa-paper-plane me-1"></i>
                            Send Reset Link
                        </button>
                    </div>
                </form>
                <div class="mt-4 text-center">
                    <a href="{{ route('account.login') }}" class="text-decoration-none text-primary">
                        <i class="fa fa-arrow-left me-1"></i> Back to Login
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
