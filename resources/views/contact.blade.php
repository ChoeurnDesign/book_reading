@extends('layouts.app')

@section('main')
<section class="py-5 " style="background: #dbdede;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                {{-- Success Alert --}}
                @if(session('success'))
                    <div class="alert alert-success text-center rounded-pill shadow-sm mb-4 px-4 py-2 small">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-5">
                        <h3 class="text-center mb-2" >Contact Us</h3>
                        <p class="text-muted text-center mb-4 small">We'd love to hear from you!</p>
                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="name"
                                    class="form-control rounded-pill @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" placeholder="Your Name" required autofocus>
                                @error('name')
                                    <div class="invalid-feedback text-start small">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email"
                                    class="form-control rounded-pill @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" placeholder="Your Email" required>
                                @error('email')
                                    <div class="invalid-feedback text-start small">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <textarea name="message"
                                    class="form-control rounded-4 @error('message') is-invalid @enderror"
                                    rows="8" placeholder="Type your message…" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback text-start small">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100 rounded-pill py-2" >Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
