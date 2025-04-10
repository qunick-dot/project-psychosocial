@include('layouts.navbar')
@include('layouts.link')


<section class="consultation-form-section" id="consultation">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-subtitle">Get in Touch</span>
            <h2 class="section-title">Request a Consultation</h2>
            <p class="section-description">Fill out the form below, and we'll get back to you shortly to schedule your consultation.</p>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

        <div class="form-container">
            <!-- Image on the Left -->
            <div class="form-image">
                <img src={{asset('user-assets/images/others/consultation-image.jpg')}} alt="Consultation Image">
            </div>

            <!-- Form on the Right -->
            <form method="POST" action="{{ route('consultations.store') }}" class="consultation-form">
                @csrf

                <div class="form-group mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" 
                        value="{{ old('name') }}" placeholder="Enter your full name" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                        value="{{ old('email') }}" placeholder="Enter your email address" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group mb-3">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" 
                        value="{{ old('phone') }}" placeholder="Enter your phone number" required>
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group mb-3">
                    <label for="preferred_date">Preferred Consultation Date</label>
                    <input type="date" id="preferred_date" name="preferred_date" class="form-control @error('preferred_date') is-invalid @enderror" 
                        value="{{ old('preferred_date') }}" required>
                    @error('preferred_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="form-group mb-3">
                        <label for="preferred_time">Preferred Consultation Time</label>
                        <input type="time" id="preferred_time" name="preferred_time" class="form-control @error('preferred_time') is-invalid @enderror" 
                            value="{{ old('preferred_time') }}" required>
                        @error('preferred_time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="service">Select a Service</label>
                    <select id="service" name="service" class="form-control @error('service') is-invalid @enderror" required>
                        <option value="">Select a Service</option>
                        @foreach($services as $service)
                            <option value="{{ $service->id }}" {{ old('service') == $service->id ? 'selected' : '' }}>{{ $service->title }}</option>
                        @endforeach
                       
                    </select>
                    @error('service')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            
                <div class="form-group mb-3">
                    <label for="consultant">Choose a Consultant</label>
                    <select id="consultant" name="consultant" class="form-control @error('consultant') is-invalid @enderror" required>
                        <option value="">Select a Consultant</option>
                        <option value="john_doe" {{ old('consultant') == 'john_doe' ? 'selected' : '' }}>John Doe</option>
                        <option value="sarah_smith" {{ old('consultant') == 'sarah_smith' ? 'selected' : '' }}>Sarah Smith</option>
                        <option value="michael_brown" {{ old('consultant') == 'michael_brown' ? 'selected' : '' }}>Michael Brown</option>
                    </select>
                    @error('consultant')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group mb-3">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" class="form-control @error('message') is-invalid @enderror" 
                        rows="5" placeholder="Tell us about your needs" required>{{ old('message') }}</textarea>
                    @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </div>
            </form>
            
        </div>
    </div>
</section>
@include('layouts.footer')