@extends('layouts.app')

@section('meta')
    <title>{{ $service->meta_title ?? $service->title }}</title>
    <meta name="description" content="{{ $service->meta_description ?? Str::limit(strip_tags($service->subtitle ?? ''), 160) }}">
    @if($service->meta_keywords)
        <meta name="keywords" content="{{ $service->meta_keywords }}">
    @endif
    <!-- Open Graph / Social Media Tags -->
    <meta property="og:title" content="{{ $service->meta_title ?? $service->title }}">
    <meta property="og:description" content="{{ $service->meta_description ?? Str::limit(strip_tags($service->subtitle ?? ''), 160) }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    @if($service->image)
        <meta property="og:image" content="{{ asset('storage/' . $service->image) }}">
    @endif
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url('/services/' . $service->slug) }}">
@endsection

@section('content')
<div class="service-page">
    <!-- Hero Section -->
    <section class="service-hero py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3">{{ $service->title }}</h1>
                    @if($service->subtitle)
                        <p class="lead mb-4">{{ $service->subtitle }}</p>
                    @endif
                    <a href="#contact" class="btn btn-primary btn-lg">Get Started</a>
                </div>
                <div class="col-lg-6">
                    @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="img-fluid rounded shadow">
                    @else
                        <div class="bg-light rounded shadow p-5 text-center">
                            <i class="fa fa-image fa-4x text-muted"></i>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Why It Matters Section -->
    @if($service->why_it_matters)
    <section class="why-matters py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-4">Why It Matters</h2>
                    <div class="card shadow border-0">
                        <div class="card-body p-4">
                            <div class="why-matters-content">
                                {!! nl2br(e($service->why_it_matters)) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Our Approach Section -->
    @if($service->approach_items && count($service->approach_items) > 0)
    <section class="our-approach py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2>{{ $service->approach_title ?? 'Our Approach' }}</h2>
                    @if($service->approach_subtitle)
                        <p class="lead">{{ $service->approach_subtitle }}</p>
                    @endif
                </div>
            </div>
            
            <div class="row">
                @foreach($service->approach_items as $index => $item)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body">
                            <div class="approach-item-number mb-3">
                                <span class="badge bg-primary rounded-circle p-3">{{ $index + 1 }}</span>
                            </div>
                            <h3 class="card-title h5">{{ $item['title'] ?? '' }}</h3>
                            <p class="card-text">{{ $item['description'] ?? '' }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- FAQs Section -->
    @if($service->faqs && count($service->faqs) > 0)
    <section class="faqs py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2>Frequently Asked Questions</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        @foreach($service->faqs as $index => $faq)
                        <div class="accordion-item mb-3 shadow-sm border-0">
                            <h2 class="accordion-header" id="heading{{ $index }}">
                                <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                    {{ $faq['question'] ?? '' }}
                                </button>
                            </h2>
                            <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {{ $faq['answer'] ?? '' }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Contact Section -->
    <section id="contact" class="contact-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-4">Get Started Today</h2>
                    <p class="lead mb-5">Ready to learn more about our {{ $service->title }} service? Contact us today for a consultation.</p>
                    
                    <div class="card shadow border-0">
                        <div class="card-body p-4">
                            <form action="/contact" method="POST">
                                @csrf
                                <input type="hidden" name="service" value="{{ $service->title }}">
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                </div>
                                
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>