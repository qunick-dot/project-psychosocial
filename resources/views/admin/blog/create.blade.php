@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Create Blog Post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row mb-3">
                            <label for="title" class="col-md-2 col-form-label text-md-right">Title</label>
                            <div class="col-md-10">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="category" class="col-md-2 col-form-label text-md-right">Category</label>
                            <div class="col-md-10">
                                <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="excerpt" class="col-md-2 col-form-label text-md-right">Excerpt</label>
                            <div class="col-md-10">
                                <textarea id="excerpt" class="form-control @error('excerpt') is-invalid @enderror" name="excerpt" required>{{ old('excerpt') }}</textarea>
                                @error('excerpt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="content" class="col-md-2 col-form-label text-md-right">Content</label>
                            <div class="col-md-10">
                                <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" rows="10" required>{{ old('content') }}</textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="image" class="col-md-2 col-form-label text-md-right">Featured Image</label>
                            <div class="col-md-10">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="published" id="published" value="1" {{ old('published') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="published">
                                        Publish immediately
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Create Post
                                </button>
                                <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // You can integrate a WYSIWYG editor like TinyMCE, CKEditor, etc.
    // Here's a simple example with CKEditor
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof CKEDITOR !== 'undefined') {
            CKEDITOR.replace('content');
        }
    });
</script>
@endsection