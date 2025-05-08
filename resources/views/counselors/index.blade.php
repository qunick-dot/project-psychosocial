@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 mb-4">
            <h1 class="text-center">Our Professional Counselors</h1>
            <p class="text-center lead">Meet our team of specialized mental health professionals ready to support you.</p>
        </div>
    </div>

    <div class="row">
        @forelse($counselors as $counselor)
            <div class="col-lg-6 mb-4">
                <div class="counselor-card">
                    <div class="counselor-image">
                        @if($counselor->image)
                            <img src="{{ asset('storage/' . $counselor->image) }}" alt="{{ $counselor->name }}">
                        @else
                            <img src="https://psychoresearch.com/user-assets/images/counsellor/counseller1.jpg" alt="{{ $counselor->name }}">
                        @endif
                    </div>
                    <div class="counselor-info">
                        <h3 class="counselor-name">{{ $counselor->name }}</h3>
                        <p class="counselor-title">{{ $counselor->title }}</p>
                        <p class="counselor-specialty">{{ $counselor->specialty }}</p>
                        <p class="counselor-description">{{ Str::limit($counselor->description, 150) }}</p>
                        <a href="{{ route('counselors.show', $counselor->slug) }}" class="btn-profile">View Profile</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>No counselors are available at the moment.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
