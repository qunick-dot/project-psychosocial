@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Blog</h1>
        <div>
            <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Blogs
            </a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">{{ $blog->title }}</h6>
                <span class="badge badge-{{ $blog->status === 'published' ? 'success' : 'warning' }}">
                    {{ ucfirst($blog->status) }}
                </span>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-8">
                    <p><strong>Category:</strong> {{ $blog->category->name }}</p>
                    <p><strong>Author:</strong> {{ $blog->user->name }}</p>
                    <p><strong>Created At:</strong> {{ $blog->created_at->format('M d, Y H:i') }}</p>
                    @if($blog->published_at)
                        <p><strong>Published At:</strong> {{ $blog->published_at->format('M d, Y H:i') }}</p>
                    @endif
                    <p>
                        <strong>Tags:</strong>
                        @forelse($blog->tags as $tag)
                            <span class="badge badge-info mr-1">{{ $tag->name }}</span>
                        @empty
                            <span class="text-muted">No tags</span>
                        @endforelse
                    </p>
                </div>
                <div class="col-md-4">
                    @if($blog->featured_image)
                        <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}" class="img-fluid rounded">
                    @else
                        <div class="text-center p-5 bg-light rounded">
                            <i class="fas fa-image fa-3x text-muted"></i>
                            <p class="mt-2 text-muted">No featured image</p>
                        </div>
                    @endif
                </div>
            </div>
            
            <hr>
            
            <div class="blog-content">
                {!! $blog->content !!}
            </div>
        </div>
    </div>
</div>
@endsection