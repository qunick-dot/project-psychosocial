@include('layouts.navbar')
@include('layouts.link')

<section class="consultation-form-section" id="consultation">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-subtitle">Get in Touch</span>
            <h2 class="section-title">Schedule Your Consultation</h2>
            <p class="section-description">Let's discuss how we can help you achieve your goals. Fill out the form below to book your session.</p>
        </div>

        {{-- Success Alert --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle me-2">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                    <polyline points="22 4 12 14.01 9 11.01"/>
                </svg>
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row align-items-center">
            <!-- Left Image -->
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('user-assets/images/others/consultation-image.jpg') }}" alt="Consultation Image" class="img-fluid rounded-lg">
            </div>

            <!-- Right Form -->
            <div class="col-md-6">
                <form method="POST" action="{{ route('consultations.store') }}" class="consultation-form" id="consultationForm">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="name">Full Name <span class="text-danger">*</span></label>
                        <div class="input-with-icon">
                            <i class="fas fa-user"></i>
                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name') }}" placeholder="John Doe" required>
                        </div>
                        @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email Address <span class="text-danger">*</span></label>
                        <div class="input-with-icon">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}" placeholder="john@example.com" required>
                        </div>
                        @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="phone">Phone Number <span class="text-danger">*</span></label>
                        <div class="input-with-icon">
                            <i class="fas fa-phone"></i>
                            <input type="tel" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                   value="{{ old('phone') }}" placeholder="+977-98--------" required>
                        </div>
                        @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="service">Service Needed <span class="text-danger">*</span></label>
                        <div class="input-with-icon">
                            <i class="fas fa-concierge-bell"></i>
                            <select id="service" name="service" class="form-control @error('service') is-invalid @enderror" required>
                                <option value="">Select a Service</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}" {{ old('service') == $service->id ? 'selected' : '' }}>
                                        {{ $service->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('service') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="consultant">Preferred Consultant <span class="text-danger">*</span></label>
                        <div class="input-with-icon">
                            <i class="fas fa-user-tie"></i>
                            <select id="consultant" name="consultant" class="form-control @error('consultant') is-invalid @enderror" required>
                                <option value="">Select a Consultant</option>
                                <option value="john_doe" {{ old('consultant') == 'john_doe' ? 'selected' : '' }}>John Doe - Senior Advisor</option>
                                <option value="sarah_smith" {{ old('consultant') == 'sarah_smith' ? 'selected' : '' }}>Sarah Smith - Business Strategist</option>
                                <option value="michael_brown" {{ old('consultant') == 'michael_brown' ? 'selected' : '' }}>Michael Brown - Financial Expert</option>
                            </select>
                        </div>
                        @error('consultant') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="preferred_date">Preferred Date <span class="text-danger">*</span></label>
                        <div class="input-with-icon">
                            <i class="fas fa-calendar-day"></i>
                            <input type="date" id="preferred_date" name="preferred_date"
                                   class="form-control @error('preferred_date') is-invalid @enderror"
                                   value="{{ old('preferred_date') }}"
                                   min="{{ date('Y-m-d', strtotime('+1 day')) }}" required>
                        </div>
                        @error('preferred_date') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="message">Your Message <span class="text-danger">*</span></label>
                        <textarea id="message" name="message" class="form-control @error('message') is-invalid @enderror"
                                  rows="5" placeholder="Tell us about your specific needs and goals..." required>{{ old('message') }}</textarea>
                        @error('message') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-footer mt-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Schedule Consultation
                        </button>
                        <p class="privacy-note mt-2 text-muted">
                            <i class="fas fa-lock"></i> Your information is secure and will never be shared with third parties.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
