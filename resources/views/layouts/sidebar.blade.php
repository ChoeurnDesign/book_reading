<!-- Modern Glassmorphism Sidebar -->
<div class="card border-1 shadow-lg pb-4yy" style="background:rgba(255,255,255,0.85); backdrop-filter:blur(12px); border-radius:28px; box-shadow:0 8px 32px #4b556318;">
    <div style="background:linear-gradient(135deg,#a7bfe8 0%,#f3e7e9 100%); border-radius:22px; box-shadow:0 2px 8px #4b556320; padding:26px 0 16px 0; margin-bottom:20px; text-align:center;">
        @if(Auth::user()->image)
            <img src="{{asset('uploads/profile/thumb/'.Auth::user()->image)}}" alt="User Profile Image"
                 style="width:70px; height:70px; object-fit:cover; border-radius:50%; box-shadow:0 2px 12px #6b72801c; border:3px solid #fff;">
        @else
            <div style="width:70px; height:70px; border-radius:50%; background:#d1d5db; display:flex; align-items:center; justify-content:center; font-size:2rem; color:#374151; margin:0 auto; font-weight:600;">
                {{ strtoupper(substr(Auth::user()->name,0,1)) }}
            </div>
        @endif
        <div style="margin-top:10px; font-size:1.12rem; font-weight:600; color:#374151;">
            {{ Auth::user()->name }}
        </div>
        <div style="font-size:0.93rem; color:#6b7280; margin-top:2px;">
            {{ (Auth::user()->reviews->count() > 1) ? Auth::user()->reviews->count().' Reviews' : Auth::user()->reviews->count().' Review' }}
        </div>
    </div>
    <nav style="display:flex; flex-direction:column; gap:9px;">
        @if (Auth::user()->role == 'admin')
            <a href="{{route('books.index')}}" style="display:flex; align-items:center; gap:13px; padding:11px 18px; border-radius:11px; color:#2e3a4b; font-weight:500; text-decoration:none; transition:background .13s, color .13s;">
                <i class="fas fa-book fa-fw" style="font-size:1.07rem; color:#6886c5;"></i>
                <span>Books</span>
            </a>
            <a href="{{route('account.reviews')}}" style="display:flex; align-items:center; gap:13px; padding:11px 18px; border-radius:11px; color:#2e3a4b; font-weight:500; text-decoration:none;">
                <i class="fas fa-star fa-fw" style="font-size:1.07rem; color:#e1b382;"></i>
                <span>Reviews</span>
            </a>
            <a href="{{ route('admin.chapters.books') }}" style="display:flex; align-items:center; gap:13px; padding:11px 18px; border-radius:11px; color:#2e3a4b; font-weight:500; text-decoration:none;">
                <i class="fas fa-book-open fa-fw" style="font-size:1.07rem; color:#7b8fa1;"></i>
                <span>Chapters Management</span>
            </a>
        @else
            <a href="{{ route('account.library') }}" style="display:flex; align-items:center; gap:13px; padding:11px 18px; border-radius:11px; color:#2e3a4b; font-weight:500; text-decoration:none;">
                <i class="fas fa-folder-open fa-fw" style="font-size:1.07rem; color:#6886c5;"></i>
                <span>My Library</span>
            </a>
            <a href="{{ route('account.favorites') }}" style="display:flex; align-items:center; gap:13px; padding:11px 18px; border-radius:11px; color:#2e3a4b; font-weight:500; text-decoration:none;">
                <i class="fas fa-heart fa-fw" style="font-size:1.07rem; color:#e26a6a;"></i>
                <span>My Favorites</span>
            </a>
        @endif
        <a href="{{ route('account.profile') }}" style="display:flex; align-items:center; gap:13px; padding:11px 18px; border-radius:11px; color:#2e3a4b; font-weight:500; text-decoration:none;">
            <i class="fas fa-user fa-fw" style="font-size:1.07rem; color:#7b8fa1;"></i>
            <span>Profile</span>
        </a>
        <a href="{{ route('account.myReviews') }}" style="display:flex; align-items:center; gap:13px; padding:11px 18px; border-radius:11px; color:#2e3a4b; font-weight:500; text-decoration:none;">
            <i class="fas fa-comments fa-fw" style="font-size:1.07rem; color:#e1b382;"></i>
            <span>My Reviews</span>
        </a>
        <a href="{{ route('account.changePassword') }}" style="display:flex; align-items:center; gap:13px; padding:11px 18px; border-radius:11px; color:#2e3a4b; font-weight:500; text-decoration:none;">
            <i class="fas fa-key fa-fw" style="font-size:1.07rem; color:#6886c5;"></i>
            <span>Change Password</span>
        </a>
        <a href="{{route('account.logout')}}" style="display:flex; align-items:center; gap:13px; padding:11px 18px; border-radius:11px; color:#d7263d; font-weight:500; text-decoration:none;">
            <i class="fas fa-sign-out-alt fa-fw" style="font-size:1.07rem; color:#d7263d;"></i>
            <span>Logout</span>
        </a>
    </nav>
</div>
