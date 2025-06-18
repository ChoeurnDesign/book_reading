@extends('layouts.app')

@section('main')
<div class="shadow-sm min-vh-100 d-flex flex-column justify-content-start align-items-center" >
    <div style="height: 82px;"></div> <!-- Spacer to move form up -->
    <div class="card shadow-lg border-0 rounded-5" style="width: 450px;">
        <div class="card-body p-5">
            <div class="text-center mb-4">
                <h4 class="text-center mb-1 fw-semibold" style="letter-spacing: .5px;">Welcome Back</h4>
                <p class="text-center text-muted mb-4" style="font-size: 1.05rem;">Sign in to your account</p>
            </div>
            @include('layouts.message')
            <form action="{{ route('account.authenticate') }}" method="post" autocomplete="off">
                @csrf
                <div class="mb-3">
                    <input
                        type="text"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        class="form-control form-control-lg rounded-pill @error('email') is-invalid @enderror"
                        placeholder="Email address"
                        autofocus
                        style="text-align: left; font-size: 1rem;"
                        autocomplete="email"
                    >
                    @error('email')
                        <div class="invalid-feedback text-start">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control form-control-lg rounded-pill @error('password') is-invalid @enderror"
                        placeholder="Password"
                        style="text-align: left; font-size: 1rem;"
                    >
                    @error('password')
                        <div class="invalid-feedback text-start">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-end mb-3">
                    <a href="{{ route('password.request') }}" class="text-decoration-none small">Forgot password?</a>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit"
                            class="btn btn-dark btn-lg rounded-pill shadow-sm fw-medium"
                            style="font-size: 1rem; letter-spacing: .5px;">
                        <i class="fa fa-arrow-right-to-bracket me-2"></i>Log In
                    </button>
                </div>
            </form>
            <div class="text-center mt-4">
                <span class="text-muted">or</span>
            </div>
            <div class="text-center mt-3">
                <a href="{{ route('account.register') }}" class="text-secondary text-decoration-none fw-medium">
                    <i class="fa fa-user-plus me-1"></i>Create new account
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
