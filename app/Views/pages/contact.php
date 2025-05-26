<!-- Page Banner -->
<section class="contact-banner position-relative">
    <div class="banner-overlay"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center text-white">
                <h1 class="display-4 fw-bold">Contact Us</h1>
                <p class="lead">Get in touch with us for any inquiries</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section py-5">
    <div class="container">
        <!-- Alert Messages -->
        <div class="alert alert-success alert-dismissible fade show d-none" id="successAlert" role="alert">
            <strong>Success!</strong> Your message has been sent successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-danger alert-dismissible fade show d-none" id="errorAlert" role="alert">
            <strong>Error!</strong> There was a problem sending your message.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="row g-4">
            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="contact-form-card">
                    <h2 class="mb-4">Send us a Message</h2>
                    <form id="contactForm" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback">
                                Please enter your name.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                            <div class="invalid-feedback">
                                Please enter a subject.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            <div class="invalid-feedback">
                                Please enter your message.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg submit-btn">
                            <span class="submit-text">Send Message</span>
                            <div class="spinner-border spinner-border-sm d-none" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-6">
                <div class="contact-info-card mb-4">
                    <h2 class="mb-4">Contact Information</h2>
                    <div class="contact-info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Our Location</h3>
                            <p>123 School Street, Kathmandu, Nepal</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Phone Number</h3>
                            <p>+977 98076234</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email Address</h3>
                            <p>info@schoolname.edu.np</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h3>Office Hours</h3>
                            <p>Monday - Friday: 8:00 AM - 4:00 PM</p>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2774670907464!2d85.3318661!3d27.7054229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a7c6cd4d41%3A0x5c76d0d044d145ea!2sKathmandu%2C%20Nepal!5e0!3m2!1sen!2snp!4v1647850821000!5m2!1sen!2snp"
                        width="100%" 
                        height="300" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>

                <!-- Social Media Links -->
                <div class="social-links mt-4">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Validation Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    const submitBtn = form.querySelector('.submit-btn');
    const submitText = form.querySelector('.submit-text');
    const spinner = form.querySelector('.spinner-border');
    const successAlert = document.getElementById('successAlert');
    const errorAlert = document.getElementById('errorAlert');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        event.stopPropagation();

        if (form.checkValidity()) {
            // Show loading state
            submitBtn.disabled = true;
            submitText.classList.add('d-none');
            spinner.classList.remove('d-none');

            // Simulate form submission (replace with actual API call)
            setTimeout(() => {
                // Hide loading state
                submitBtn.disabled = false;
                submitText.classList.remove('d-none');
                spinner.classList.add('d-none');

                // Show success message
                successAlert.classList.remove('d-none');
                form.reset();

                // Hide success message after 5 seconds
                setTimeout(() => {
                    successAlert.classList.add('d-none');
                }, 5000);
            }, 1500);
        }

        form.classList.add('was-validated');
    });
});
</script>