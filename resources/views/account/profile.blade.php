@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row my-5">
        <div class="col-md-3">
           @include('layouts.sidebar')
        </div>

        <div class="col-md-9">
            <div class="col-md-9" >
                <div style="width:100%; max-width: 520px; margin:0 auto;">
                    <div class="card border-2 shadow-sm rounded-5" style="position:relative; background:#f3f4f6; padding: 1.5rem 2.5rem 2.3rem 2.5rem; min-height:600px;">
                        <h2 style="font-weight:500; color:#374151; text-align:center; font-size:2rem; margin:8px 0 24px 0; letter-spacing:0.04em;">
                            <span style="display:inline-flex; align-items:center;">Profile</span>
                        </h2>
                        <form action="{{ route('account.updateProfile') }}" method="post" enctype="multipart/form-data" style="margin-top:12px;">
                            @csrf
                            <div style="display:flex; flex-direction:column; align-items:center; margin-bottom: 6.5rem;">
                                <div style="position:relative;">
                                    <img src="{{ Auth::user()->image ? asset('uploads/profile/thumb/'.Auth::user()->image) : 'https://ui-avatars.com/api/?name='.urlencode($user->name).'&size=128&background=9ca3af&color=fff' }}"
                                        alt="profile"
                                        style="width:120px; height:120px; border-radius:50%;  object-fit:cover; background:#e5e7eb;">
                                    <label for="image" style="position:absolute; right:-9px; bottom:-6px; background:#6b7280; color:#fff; border-radius:50%; width:40px; height:40px; display:flex; align-items:center; justify-content:center; cursor:pointer; border:2.5px solid #fff; box-shadow:0 3px 14px #6b728055;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24"><path fill="currentColor" d="M12 7.75a4.25 4.25 0 1 0 0 8.5 4.25 4.25 0 0 0 0-8.5Zm0 7a2.75 2.75 0 1 1 0-5.5 2.75 2.75 0 0 1 0 5.5Z"/><path fill="currentColor" d="M20.75 6.75h-2.19l-1.08-2.16A3.25 3.25 0 0 0 14.04 3.25h-4.08c-1.24 0-2.39.7-2.94 1.84l-1.08 2.16H3.25A1.75 1.75 0 0 0 1.5 8.5v10.75a1.75 1.75 0 0 0 1.75 1.75h17.5a1.75 1.75 0 0 0 1.75-1.75V8.5a1.75 1.75 0 0 0-1.75-1.75Zm-14.63-1.3A1.75 1.75 0 0 1 9.96 4.75h4.08c.7 0 1.34.39 1.64 1.03l1.14 2.29H4.98l1.14-2.29ZM21.25 19.25a.75.75 0 0 1-.75.75H3.5a.75.75 0 0 1-.75-.75V8.5c0-.41.34-.75.75-.75h17.5c.41 0 .75.34.75.75v10.75Z"/></svg>
                                        <input type="file" name="image" id="image" style="display:none;">
                                    </label>
                                </div>
                                @error('image')
                                <p class="invalid-feedback d-block" style="color:#ef4444; margin-top:0.6rem; font-size:0.98rem;">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label" style="color:#6b7280; font-weight:500;">Name</label>
                                <input type="text" value="{{ old('name', $user->name) }}" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Name" name="name" id="name" style="border-radius:10px; font-weight:400; background:#f8fafe; border:1.5px solid #9ca3af;">
                                @error('name')
                                <p class="invalid-feedback d-block" style="color:#ef4444; margin-top:0.3rem; font-size:0.98rem;">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label" style="color:#6b7280; font-weight:500;">Email</label>
                                <input type="text" value="{{ old('email', $user->email) }}" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Email" name="email" id="email" style="border-radius:10px; font-weight:400; background:#f8fafe; border:1.5px solid #9ca3af;">
                                @error('email')
                                <p class="invalid-feedback d-block" style="color:#ef4444; margin-top:0.3rem; font-size:0.98rem;">{{$message}}</p>
                                @enderror
                            </div>
                            <button class="btn rounded-pill btn-outline-dark ">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
