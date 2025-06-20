@extends('layouts.app')

@section('main')
<div style="background: linear-gradient(120deg, #667eea 0%, #fbc2eb 100%); min-height: 100vh; font-family: 'Inter', Arial, sans-serif;">

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">

                <!-- Hero Section -->
                <section class="my-4 d-flex align-items-center justify-content-center" style="min-height: 250px;">
                    <div style="backdrop-filter: blur(18px); background: rgba(255,255,255,0.13); box-shadow:0 8px 32px rgba(31,38,135,0.14); border-radius: 22px; padding: 1.5rem; max-width: 100%; width: 100%; box-sizing: border-box;">
                        <h1 style="font-size: 2rem; color:#3730a3; font-weight: 400; text-align:center;">Glassy Book Explorer</h1>
                        <p style="text-align:center; color:#4338ca; opacity:0.97; margin-bottom:1.5rem;">Find genres through a frosted glass interface.</p>

                        <form action="{{ route('books.search') }}" method="GET" style="display:flex; flex-wrap: wrap; gap:0.7rem; justify-content:center;">
                            <input type="text" name="query" placeholder="Search..." value="{{ request('query') }}"
                                style="flex: 1 1 140px; padding:0.6rem 1rem; border-radius: 18px; border:none; background:rgba(255,255,255,0.6); color:#3730a3; font-weight:400; min-width: 120px;">
                            <select name="category_id"
                                style="flex: 1 1 140px; padding:0.6rem 1rem; border-radius:18px; border:none; background:rgba(255,255,255,0.6); color:#3730a3; font-weight:400; min-width: 120px;">
                                <option value="">Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                            <button type="submit"
                                style="padding:0.6rem 1.3rem; border:none; border-radius:18px; background:#6366f1; color:#fff; font-weight:400;">Search</button>
                        </form>
                    </div>
                </section>

                <!-- Categories Grid -->
                <section class="mb-5">
                    <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap:1.2rem; padding: 0 0.5rem;">
                        @forelse($categories as $category)
                        <a href="{{ route('books.category', $category->slug) }}"
                            style="backdrop-filter: blur(8px); background: rgba(255,255,255,0.23); border-radius: 18px; box-shadow:0 4px 20px rgba(31,38,135,0.09); text-decoration: none; color: #3730a3; padding: 1.5rem 1rem; display: flex; flex-direction:column; align-items:center; transition:box-shadow 0.18s; font-weight:400;">
                            <div style="font-size: 2rem; margin-bottom:0.5rem;">📚</div>
                            <div style="font-size:1.1rem;">{{ $category->name }}</div>
                            <div style="color:#6366f1; margin-top:0.4rem;">{{ $category->books_count ?? 0 }} Books</div>
                        </a>
                        @empty
                        <div style="color:#fff; grid-column:1/-1;">No categories yet.</div>
                        @endforelse
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection
