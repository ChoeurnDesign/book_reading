@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row my-5">
        <div class="col-md-3">
           @include('layouts.sidebar')
        </div>
        <div class="col-md-9">
            @include('layouts.message')

            <div class="card border-1 shadow-sm rounded-4 col-lg-10 mx-auto">
                <div class="card-header text-center text-white letter-spacing: 1.2px">
                    Change Password
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('account.processChangePassword') }}" method="POST" autocomplete="off">
                        @csrf

                        {{-- Old Password --}}
                        <div class="mb-4">
                            <label for="old_password" class="form-label fw-medium" style="color:#374151;">Old Password</label>
                            <input type="password" name="old_password" id="old_password"
                                class="form-control form-control-lg rounded-pill shadow-sm @error('old_password') is-invalid @enderror"
                                placeholder="Old Password"
                                style="background:#f1f5f9; border:1.5px solid #c7d2fe; color:#374151; font-size:1rem;"
                            />
                            @error('old_password')
                                <div class="invalid-feedback text-start" style="font-size:.97rem;">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- New Password --}}
                        <div class="mb-4">
                            <label for="new_password" class="form-label fw-medium" style="color:#374151;">New Password</label>
                            <input type="password" name="new_password" id="new_password"
                                class="form-control form-control-lg rounded-pill shadow-sm @error('new_password') is-invalid @enderror"
                                placeholder="New Password"
                                style="background:#f1f5f9; border:1.5px solid #c7d2fe; color:#374151; font-size:1rem;"
                            />
                            @error('new_password')
                                <div class="invalid-feedback text-start" style="font-size:.97rem;">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Confirm Password --}}
                        <div class="mb-4">
                            <label for="new_password_confirmation" class="form-label fw-medium" style="color:#374151;">Confirm Password</label>
                            <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                                class="form-control form-control-lg rounded-pill shadow-sm @error('new_password_confirmation') is-invalid @enderror"
                                placeholder="Confirm Password"
                                style="background:#f1f5f9; border:1.5px solid #c7d2fe; color:#374151; font-size:1rem;"
                            />
                            @error('new_password_confirmation')
                                <div class="invalid-feedback text-start" style="font-size:.97rem;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-outline-dark rounded-pill shadow-sm">
                                <i class="fas fa-key me-2"></i>Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
