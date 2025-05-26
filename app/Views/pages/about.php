<!-- Page Banner -->
<section class="page-banner position-relative">
    <div class="banner-overlay"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center text-white">
                <h1 class="display-4 fw-bold">About Our School</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="mission-vision py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="mission-card h-100">
                    <h2 class="section-title">Our Mission</h2>
                    <p class="mission-text">To provide excellence in education through innovative teaching methods and a supportive learning environment that empowers students to achieve their full potential and become responsible global citizens.</p>
                    <ul class="mission-list">
                        <li><i class="fas fa-check-circle"></i> Quality Education for All</li>
                        <li><i class="fas fa-check-circle"></i> Innovative Teaching Methods</li>
                        <li><i class="fas fa-check-circle"></i> Character Development</li>
                        <li><i class="fas fa-check-circle"></i> Global Perspective</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vision-card h-100">
                    <h2 class="section-title">Our Vision</h2>
                    <p class="vision-text">To be recognized as a leading educational institution that nurtures creative thinking, promotes academic excellence, and develops well-rounded individuals prepared for the challenges of tomorrow.</p>
                    <div class="vision-image">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3" alt="School Vision" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="history-timeline py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our Journey Through Time</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-content">
                    <span class="year">1990</span>
                    <h3>Foundation</h3>
                    <p>Our school was established with a vision to provide quality education to all.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <span class="year">2000</span>
                    <h3>Campus Expansion</h3>
                    <p>Major infrastructure development with new academic buildings and sports facilities.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <span class="year">2010</span>
                    <h3>Digital Revolution</h3>
                    <p>Integration of smart classrooms and digital learning platforms.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <span class="year">2020</span>
                    <h3>Global Recognition</h3>
                    <p>Achieved international accreditation and established global partnerships.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achievements Section -->
<section class="achievements py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our Achievements</h2>
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class="achievement-card text-center">
                    <i class="fas fa-user-graduate achievement-icon"></i>
                    <div class="counter" data-target="5000">0</div>
                    <h3>Students</h3>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="achievement-card text-center">
                    <i class="fas fa-chalkboard-teacher achievement-icon"></i>
                    <div class="counter" data-target="200">0</div>
                    <h3>Teachers</h3>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="achievement-card text-center">
                    <i class="fas fa-trophy achievement-icon"></i>
                    <div class="counter" data-target="150">0</div>
                    <h3>Awards</h3>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="achievement-card text-center">
                    <i class="fas fa-globe achievement-icon"></i>
                    <div class="counter" data-target="50">0</div>
                    <h3>Programs</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location Section -->
<section class="location py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Visit Our Campus</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="contact-info">
                    <h3>Get in Touch</h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt"></i> 123 School Street, City, Country</li>
                        <li><i class="fas fa-phone"></i> +1 234 567 890</li>
                        <li><i class="fas fa-envelope"></i> info@school.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2774670907464!2d85.3318661!3d27.7054229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a7c6cd4d41%3A0x5c76d0d044d145ea!2sKathmandu%2C%20Nepal!5e0!3m2!1sen!2snp!4v1647850821000!5m2!1sen!2snp"
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counter Animation Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        let count = 0;
        const increment = target / speed;

        const updateCount = () => {
            if (count < target) {
                count += increment;
                counter.innerText = Math.ceil(count);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    };

    const observerCallback = (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, {
        threshold: 0.5
    });

    counters.forEach(counter => observer.observe(counter));
});</script>
