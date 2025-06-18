@extends('layouts.app')

@section('main')
<div class="min-vh-100 d-flex flex-column justify-content-start align-items-center bg-gradient" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
    <div style="height: 72px;"></div> <!-- Spacer to move form up -->
    <div class="card shadow-lg border-0 rounded-5" style="width: 450px;">
        <div class="card-body p-5">
            <div class="text-center mb-4">
                <h4 class="text-center mb-1 fw-semibold" style="letter-spacing: .5px;">Create Account</h4>
                <p class="text-center text-muted mb-4" style="font-size: 1.05rem;">Register for a new account</p>
            </div>
            @include('layouts.message')
            <form action="{{ route('account.processRegister') }}" method="post" autocomplete="off">
                @csrf
                <div class="mb-3">
                    <input
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name') }}"
                        class="form-control form-control-lg rounded-pill @error('name') is-invalid @enderror"
                        placeholder="Name"
                        style="text-align: left; font-size: 1rem;"
                        autofocus
                    >
                    @error('name')
                        <div class="invalid-feedback text-start">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input
                        type="text"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        class="form-control form-control-lg rounded-pill @error('email') is-invalid @enderror"
                        placeholder="Email address"
                        style="text-align: left; font-size: 1rem;"
                    >
                    @error('email')
                        <div class="invalid-feedback text-start">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
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
                <div class="mb-3">
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        class="form-control form-control-lg rounded-pill @error('password_confirmation') is-invalid @enderror"
                        placeholder="Confirm Password"
                        style="text-align: left; font-size: 1rem;"
                    >
                    @error('password_confirmation')
                        <div class="invalid-feedback text-start">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid gap-2 mt-2">
                    <button type="submit"
                        class="btn btn-dark btn-lg rounded-pill shadow-sm fw-medium"
                        style="font-size: 1rem; letter-spacing: .5px;">
                    <i class="fa fa-user-plus me-2"></i>Register Now
                </button>
                </div>
            </form>
            <div class="text-center mt-4">
                <span class="text-muted">or</span>
            </div>
            <div class="text-center mt-3">
                <a href="{{ route('account.login') }}" class="text-secondary text-decoration-none fw-medium">
                    <i class="fa fa-arrow-right-to-bracket me-1"></i>Click here to login
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
