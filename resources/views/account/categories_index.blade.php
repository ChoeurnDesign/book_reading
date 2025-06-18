@extends('layouts.app')

@section('main')
<div style="background: linear-gradient(120deg, #667eea 0%, #fbc2eb 100%); min-height: 100vh; font-family: 'Inter', Arial, sans-serif;">
    <section style="min-height: 250px; display:flex; align-items:center; justify-content:center;">
        <div style="backdrop-filter: blur(18px); background: rgba(255,255,255,0.13); box-shadow:0 8px 32px rgba(31,38,135,0.14); border-radius: 22px; padding: 2rem 2.5rem; max-width: 530px; margin: 2rem auto;">
            <h1 style="font-size: 2.4rem; color:#3730a3; font-weight: 400; text-align:center;">Glassy Book Explorer</h1>
            <p style="text-align:center; color:#4338ca; opacity:0.97; margin-bottom:1.5rem;">Find genres through a frosted glass interface.</p>
            <form action="{{ route('books.search') }}" method="GET" style="display:flex; gap:1rem; justify-content:center;">
                <input type="text" name="query" placeholder="Search..." value="{{ request('query') }}"
                    style="padding:0.7rem 1rem; border-radius: 18px; border:none; width: 160px; background:rgba(255,255,255,0.6); color:#3730a3; font-weight:400;">
                <select name="category_id" style="padding:0.7rem 1rem; border-radius:18px; border:none; background:rgba(255,255,255,0.6); color:#3730a3; font-weight:400;">
                    <option value="">Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
                <button type="submit" style="padding:0.7rem 1.5rem; border:none; border-radius:18px; background:#6366f1; color:#fff; font-weight:400;">Search</button>
            </form>
        </div>
    </section>
    <section style="max-width: 950px; margin:0 auto; padding: 2rem 0 3rem 0;">
        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(230px,1fr)); gap:2rem;">
        @forelse($categories as $category)
            <a href="{{ route('books.category', $category->slug) }}"
               style="backdrop-filter: blur(8px); background: rgba(255,255,255,0.23); border-radius: 18px; box-shadow:0 4px 20px rgba(31,38,135,0.09); text-decoration: none; color: #3730a3; padding: 2rem 1.3rem 1.2rem; display: flex; flex-direction:column; align-items:center; transition:box-shadow 0.18s; font-weight:400;">
                <div style="font-size: 2.2rem; margin-bottom:0.7rem;">📚</div>
                <div style="font-size:1.15rem; font-weight:400;">{{ $category->name }}</div>
                <div style="color:#6366f1; margin-top:0.5rem; font-weight:400;">{{ $category->books_count ?? 0 }} Books</div>
            </a>
        @empty
            <div style="color:#fff; grid-column:1/-1;">No categories yet.</div>
        @endforelse
        </div>
    </section>
</div>
@endsection
