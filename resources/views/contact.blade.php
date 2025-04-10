@include('layouts.navbar')
@include('layouts.link')

<section class="contact-section">
    <div class="container">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="contact-form">
                    <h3>Send us a message</h3>
                    <form method="POST" action="{{ route('contact.store') }}" id="contactForm">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone Number" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="3" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-6">
                <div class="contact-info">
                    <h3>Contact us</h3>
                    <p>We're open for any suggestion or just to have a chat. Reach out to us and we'll get back to you as soon as possible.</p>
                    
                    <div class="d-flex align-items-center mb-4">
                        <i class="fas fa-map-marker-alt icon"></i>
                        <div>
                            <p><span>Address:</span> <a href="https://www.google.com/maps/place/Psychosocial+Counselling+Service/@27.7328056,85.2896111,19z/data=!4m12!1m5!3m4!2zMjfCsDQzJzU4LjEiTiA4NcKwMTcnMjIuNiJF!8m2!3d27.7328056!4d85.2896111!3m5!1s0x39eb1974fa3594d3:0x5907959ea12de403!8m2!3d27.7330121!4d85.289874!16s%2Fg%2F11ty14fr5r" target="_blank">Kathmandu-16, Nepal</a></p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4">
                        <i class="fas fa-phone-alt icon"></i>
                        <div>
                            <p><span>Phone:</span> <a href="tel:+9779810371178">+977 9810371178</a></p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4">
                        <i class="fas fa-envelope icon"></i>
                        <div>
                            <p><span>Email:</span> <a href="mailto:psychosocialservicenp@gmail.com">psychosocialservicenp@gmail.com</a></p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center">
                        <i class="fas fa-clock icon"></i>
                        <div>
                            <p><span>Hours:</span> Mon-Fri: 9AM - 6PM<br>
                            <span style="visibility: hidden;">Hours:</span> Sat: 10AM - 3PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section py-0">
    <div class="container-fluid px-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.456173579579!2d85.2896111!3d27.7328056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1974fa3594d3%3A0x5907959ea12de403!2sPsychosocial%20Counselling%20Service!5e0!3m2!1sen!2snp!4v1620000000000!5m2!1sen!2snp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

@include('layouts.footer')
<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        // Add your form submission logic here
        alert('Form submitted successfully!');
    });