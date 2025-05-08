@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <h1 class="mb-4">Blog</h1>
            
            <div class="row">
                @forelse($blogs as $blog)
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            @if($blog->featured_image)
                                <img src="{{ asset('storage/' . $blog->featured_image) }}" class="card-img-top" alt="{{ $blog->title }}">
                            @else
                                <div class="card-img-top bg-light text-center py-5">
                                    <i class="fas fa-image fa-3x text-muted"></i>
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <div class="mb-2">
                                    <span class="badge bg-primary">{{ $blog->category->name }}</span>
                                    @foreach($blog->tags as $tag)
                                        <span class="badge bg-secondary">{{ $tag->name }}</span>
                                    @endforeach
                                </div>
                                <p class="card-text text-muted small">
                                    <i class="fas fa-user"></i> Admin | 
                                    <i class="fas fa-calendar"></i> {{ $blog->published_at->format('M d, Y') }}
                                </p>
                                <a href="{{ route('blogs.show', $blog->slug) }}" class="btn btn-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">
                            No blog posts found.
                        </div>
                    </div>
                @endforelse
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $blogs->links() }}
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Categories</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach($categories as $category)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="{{ route('blogs.by-category', $category->slug) }}" class="text-decoration-none">
                                    {{ $category->name }}
                                </a>
                                <span class="badge bg-primary rounded-pill">{{ $category->blogs_count }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Tags</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-2">
                        @foreach($tags as $tag)
                            <a href="{{ route('blogs.by-tag', $tag->slug) }}" class="text-decoration-none">
                                <span class="badge bg-secondary">{{ $tag->name }} ({{ $tag->blogs_count }})</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection