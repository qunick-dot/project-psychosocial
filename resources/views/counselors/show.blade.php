@extends('layouts.app')


@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <a href="{{ route('counselors.index') }}" class="btn btn-outline-secondary mb-3">
                <i class="fas fa-arrow-left"></i> Back to All Counselors
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="counselor-image-large">
                @if($counselor->image)
                    <img src="{{ asset('storage/' . $counselor->image) }}" alt="{{ $counselor->name }}" class="img-fluid rounded">
                @else
                    <img src="https://psychoresearch.com/user-assets/images/counsellor/counseller1.jpg" alt="{{ $counselor->name }}" class="img-fluid rounded">
                @endif
            </div>
        </div>
        <div class="col-lg-8">
            <h1 class="counselor-name-large">{{ $counselor->name }}</h1>
            <p class="counselor-title-large">{{ $counselor->title }}</p>
            <div class="counselor-specialty-large mb-3">
                <span class="badge badge-primary p-2">{{ $counselor->specialty }}</span>
            </div>
            
            <h3>About</h3>
            <div class="counselor-description-large">
                <p>{{ $counselor->description }}</p>
            </div>

            <!-- Additional counselor details can be added here -->
            
            <div class="mt-4">
                <a href="#" class="btn btn-primary btn-lg">Book an Appointment</a>
            </div>
        </div>
    </div>
</div>
@endsection
