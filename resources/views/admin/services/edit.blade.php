@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Psychosocial Service</h1>
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row mb-3">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $service->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $service->slug) }}">
                            <small class="text-muted">Leave empty to auto-generate from title</small>
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" value="{{ old('subtitle', $service->subtitle) }}">
                    @error('subtitle')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="why_it_matters" class="form-label">Why It Matters</label>
                    <textarea class="form-control @error('why_it_matters') is-invalid @enderror" id="why_it_matters" name="why_it_matters" rows="4">{{ old('why_it_matters', $service->why_it_matters) }}</textarea>
                    @error('why_it_matters')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="image" class="form-label">Feature Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        @if(isset($service) && $service->image)
                            <div class="mt-2">
                                 <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" style="max-width: 200px; max-height: 200px; object-fit: cover;">

                            </div>
                        @endif
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">Our Approach</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="approach_title" class="form-label">Approach Title</label>
                                    <input type="text" class="form-control" id="approach_title" name="approach_title" value="{{ old('approach_title', $service->approach_title) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="approach_subtitle" class="form-label">Approach Subtitle</label>
                                    <input type="text" class="form-control" id="approach_subtitle" name="approach_subtitle" value="{{ old('approach_subtitle', $service->approach_subtitle) }}">
                                </div>
                            </div>
                        </div>

                        <h6 class="mb-3">Approach Items</h6>
                        <div id="approach-items-container">
                            @if(is_array($service->approach_items) && count($service->approach_items) > 0)
                                @foreach($service->approach_items as $index => $item)
                                    <div class="card mb-3 approach-item">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h5 class="card-title">Approach Item #{{ $index + 1 }}</h5>
                                                <button type="button" class="btn btn-sm btn-danger remove-approach-item">Remove</button>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Icon Class</label>
                                                <input type="text" name="approach_item_icon[]" class="form-control" value="{{ $item['icon'] ?? '' }}" placeholder="fas fa-check">
                                                <small class="text-muted">Use FontAwesome icon classes (e.g., fas fa-brain)</small>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" name="approach_item_title[]" class="form-control" value="{{ $item['title'] ?? '' }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea name="approach_item_description[]" class="form-control" rows="3">{{ $item['description'] ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="card mb-3 approach-item">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h5 class="card-title">Approach Item #1</h5>
                                            <button type="button" class="btn btn-sm btn-danger remove-approach-item">Remove</button>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Icon Class</label>
                                            <input type="text" name="approach_item_icon[]" class="form-control" value="fas fa-user-circle" placeholder="fas fa-check">
                                            <small class="text-muted">Use FontAwesome icon classes (e.g., fas fa-brain)</small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" name="approach_item_title[]" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="approach_item_description[]" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <button type="button" id="add-approach-item" class="btn btn-success">
                                <i class="fas fa-plus"></i> Add Another Approach Item
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">FAQs</h5>
                    </div>
                    <div class="card-body">
                        <div id="faqs-container">
                            @if(is_array($service->faqs) && count($service->faqs) > 0)
                                @foreach($service->faqs as $index => $faq)
                                    <div class="card mb-3 faq-item">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h5 class="card-title">FAQ #{{ $index + 1 }}</h5>
                                                <button type="button" class="btn btn-sm btn-danger remove-faq">Remove</button>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Question</label>
                                                <input type="text" name="faq_question[]" class="form-control" value="{{ $faq['question'] ?? '' }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Answer</label>
                                                <textarea name="faq_answer[]" class="form-control" rows="3">{{ $faq['answer'] ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                            <div class="card mb-3 faq-item">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h5 class="card-title">FAQ #1</h5>
                                        <button type="button" class="btn btn-sm btn-danger remove-faq">Remove</button>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Question</label>
                                        <input type="text" name="faq_question[]" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Answer</label>
                                        <textarea name="faq_answer[]" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <button type="button" id="add-faq" class="btn btn-success">
                            <i class="fas fa-plus"></i> Add Another FAQ
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ old('is_active', $service->is_active) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary">Update Service</button>
            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endsection
            
            @push('scripts')
            <script src="{{ asset('user-assets/js/admin-services.js') }}"></script>
            @endpush