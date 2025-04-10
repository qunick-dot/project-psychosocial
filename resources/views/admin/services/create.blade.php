@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{ isset($service) ? 'Edit Service' : 'Add New Service' }}</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ isset($service) ? route('admin.services.update', $service->id) : route('admin.services.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($service))
                            @method('PUT')
                        @endif

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <h4>Basic Information</h4>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $service->title ?? '') }}" required>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="subtitle" class="form-label">Subtitle</label>
                                <textarea class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" rows="2">{{ old('subtitle', $service->subtitle ?? '') }}</textarea>
                                @error('subtitle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="why_it_matters" class="form-label">Why It Matters</label>
                                <textarea class="form-control @error('why_it_matters') is-invalid @enderror" id="why_it_matters" name="why_it_matters" rows="4">{{ old('why_it_matters', $service->why_it_matters ?? '') }}</textarea>
                                @error('why_it_matters')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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
                                         <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}">

                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ (old('is_active', $service->is_active ?? true) ? 'checked' : '') }}>
                                    <label class="form-check-label" for="is_active">
                                        Active
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Approach Section -->
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <h4>Our Approach</h4>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="approach_title" class="form-label">Approach Title</label>
                                <input type="text" class="form-control @error('approach_title') is-invalid @enderror" id="approach_title" name="approach_title" value="{{ old('approach_title', $service->approach_title ?? '') }}">
                                @error('approach_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="approach_subtitle" class="form-label">Approach Subtitle</label>
                                <input type="text" class="form-control @error('approach_subtitle') is-invalid @enderror" id="approach_subtitle" name="approach_subtitle" value="{{ old('approach_subtitle', $service->approach_subtitle ?? '') }}">
                                @error('approach_subtitle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Approach Items (Dynamic) -->
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label">Approach Items</label>
                                <div id="approach-items-container">
                                    @if(isset($service) && is_array($service->approach_items))
                                        @foreach($service->approach_items as $index => $item)
                                            <div class="approach-item card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-11">
                                                            <div class="mb-3">
                                                                <label class="form-label">Title</label>
                                                                <input type="text" class="form-control" name="approach_items[{{ $index }}][title]" value="{{ $item['title'] ?? '' }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Description</label>
                                                                <textarea class="form-control" name="approach_items[{{ $index }}][description]" rows="3">{{ $item['description'] ?? '' }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <button type="button" class="btn btn-danger remove-approach-item">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <button type="button" class="btn btn-secondary add-approach-item">Add Approach Item</button>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label">FAQs</label>
                                <div id="faqs-container">
                                    @if(isset($service) && is_array($service->faqs))
                                        @foreach($service->faqs as $index => $faq)
                                            <div class="faq-item card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-11">
                                                            <div class="mb-3">
                                                                <label class="form-label">Question</label>
                                                                <input type="text" class="form-control" name="faqs[{{ $index }}][question]" value="{{ $faq['question'] ?? '' }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Answer</label>
                                                                <textarea class="form-control" name="faqs[{{ $index }}][answer]" rows="3">{{ $faq['answer'] ?? '' }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <button type="button" class="btn btn-danger remove-faq">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <button type="button" class="btn btn-secondary add-faq">Add FAQ</button>
                            </div>
                        
                        </div>

                        <!-- SEO Section -->
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <h4>SEO Information</h4>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <input type="text" class="form-control @error('meta_title') is-invalid @enderror" id="meta_title" name="meta_title" value="{{ old('meta_title', $service->meta_title ?? '') }}">
                                <small class="text-muted">Leave blank to use the service title</small>
                                @error('meta_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea class="form-control @error('meta_description') is-invalid @enderror" id="meta_description" name="meta_description" rows="3">{{ old('meta_description', $service->meta_description ?? '') }}</textarea>
                                <small class="text-muted">Leave blank to use the service subtitle</small>
                                @error('meta_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                <textarea class="form-control @error('meta_keywords') is-invalid @enderror" id="meta_keywords" name="meta_keywords" rows="2">{{ old('meta_keywords', $service->meta_keywords ?? '') }}</textarea>
                                <small class="text-muted">Comma separated keywords</small>
                                @error('meta_keywords')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ isset($service) ? 'Update Service' : 'Create Service' }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
    // Initialize approach item counter
    let approachItemCounter = $('#approach-items-container .approach-item').length || 0;
    
    // Initialize FAQ counter
    let faqCounter = $('#faqs-container .faq-item').length || 0;
    
    // Add new approach item
    $(document).on('click', '.add-approach-item', function() {
        const newApproachItem = `
            <div class="approach-item card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="approach_items[${approachItemCounter}][title]" value="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="approach_items[${approachItemCounter}][description]" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-danger remove-approach-item">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        $('#approach-items-container').append(newApproachItem);
        approachItemCounter++;
    });
    
    // Remove approach item
    $(document).on('click', '.remove-approach-item', function() {
        $(this).closest('.approach-item').remove();
        // Note: We don't decrement the counter to avoid duplicate indices
    });
    
    // Add new FAQ
    $(document).on('click', '.add-faq', function() {
        const newFaq = `
            <div class="faq-item card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="mb-3">
                                <label class="form-label">Question</label>
                                <input type="text" class="form-control" name="faqs[${faqCounter}][question]" value="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Answer</label>
                                <textarea class="form-control" name="faqs[${faqCounter}][answer]" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-danger remove-faq">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        $('#faqs-container').append(newFaq);
        faqCounter++;
    });
    
    // Remove FAQ
    $(document).on('click', '.remove-faq', function() {
        $(this).closest('.faq-item').remove();
        // Note: We don't decrement the counter to avoid duplicate indices
    });
    
    // Preview image upload
    $('#image').change(function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                // Check if preview container exists, if not create it
                if ($('#image-preview').length === 0) {
                    $(document.createElement('div'))
                        .attr('id', 'image-preview')
                        .addClass('mt-2')
                        .html('<img src="" alt="Preview" style="max-width: 300px; max-height: 200px;">')
                        .insertAfter('#image');
                }
                
                // Update the preview image
                $('#image-preview img').attr('src', e.target.result);
            }
            reader.readAsDataURL(file);
        }
    });

    // Fix to reindex approach items and FAQs before form submission
    $('form').submit(function() {
        // Reindex approach items
        $('#approach-items-container .approach-item').each(function(index) {
            $(this).find('input, textarea').each(function() {
                const name = $(this).attr('name');
                if (name) {
                    const newName = name.replace(/approach_items\[\d+\]/, `approach_items[${index}]`);
                    $(this).attr('name', newName);
                }
            });
        });
        
        // Reindex FAQs
        $('#faqs-container .faq-item').each(function(index) {
            $(this).find('input, textarea').each(function() {
                const name = $(this).attr('name');
                if (name) {
                    const newName = name.replace(/faqs\[\d+\]/, `faqs[${index}]`);
                    $(this).attr('name', newName);
                }
            });
        });
        
        return true;
    });
    
    // Form validation
    $('form').on('submit', function(event) {
        let isValid = true;
        
        // Check required fields
        $('input[required], textarea[required]').each(function() {
            if ($(this).val().trim() === '') {
                $(this).addClass('is-invalid');
                isValid = false;
            } else {
                $(this).removeClass('is-invalid');
            }
        });
        
        if (!isValid) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $('.is-invalid:first').offset().top - 100
            }, 500);
        }
    });
    
    // Remove invalid class on input
    $(document).on('input', '.is-invalid', function() {
        $(this).removeClass('is-invalid');
    });

    // Make sure we have at least one item of each if there are none
    if ($('#approach-items-container .approach-item').length === 0) {
        $('.add-approach-item').trigger('click');
    }
    
    if ($('#faqs-container .faq-item').length === 0) {
        $('.add-faq').trigger('click');
    }
});
</script>
@endsection