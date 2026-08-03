<?php

require_once 'backend/config.php';
require_once 'includes/functions.php';

$pageTitle = "Home";

include 'includes/header.php';
include 'includes/navbar.php';

?>

<!-- Hero Section -->
<?php

$heroTitle = "Healthy Smiles Begin Here";

$heroSubtitle = "Welcome to DentalCare Pro Dental Clinic. We provide comprehensive dental care using modern technology, experienced professionals, and compassionate service for patients of all ages.";

$heroButton = "Book Appointment";

$heroButtonLink = SITE_URL . "/appointment.php";

include 'components/hero.php';

?>

<!-- Statistics -->
<section class="statistics">

<div class="container">

<h2 class="section-heading text-center">

Trusted Dental Care

</h2>

<div class="stats-grid">

<div class="stat-card fade-up">

<h3>5,000+</h3>

<p>Happy Patients</p>

</div>

<div class="stat-card fade-up">

<h3>10+</h3>

<p>Years Experience</p>

</div>

<div class="stat-card fade-up">

<h3>25+</h3>

<p>Dental Services</p>

</div>

<div class="stat-card fade-up">

<h3>98%</h3>

<p>Patient Satisfaction</p>

</div>

</div>

</div>

</section>

<!-- Why Choose Us -->
<section class="why-us">

<div class="container">

<p class="section-title">

Why Choose Us

</p>

<h2 class="section-heading">

Creating Beautiful & Healthy Smiles

</h2>

<div class="feature-grid">

<div class="feature-card">

<i class="fa-solid fa-user-doctor"></i>

<h3>Experienced Dentist</h3>

<p>Professional and patient-centered dental care.</p>

</div>

<div class="feature-card">

<i class="fa-solid fa-x-ray"></i>

<h3>Modern Equipment</h3>

<p>Digital technology for accurate diagnosis.</p>

</div>

<div class="feature-card">

<i class="fa-solid fa-heart"></i>

<h3>Friendly Care</h3>

<p>Comfortable treatment for children and adults.</p>

</div>

</div>

</div>

</section>

<!-- Services Preview -->
<section class="services-home">

<div class="container">

<p class="section-title">

Our Services

</p>

<h2 class="section-heading">

Quality Dental Care

</h2>

<div class="service-grid">

<!-- Cards will be added in Step 2 -->

<?php

$services = [

[
"icon"=>"fa-solid fa-tooth",
"title"=>"Dental Consultation",
"description"=>"Comprehensive oral examination and treatment planning."
],

[
"icon"=>"fa-solid fa-teeth",
"title"=>"Scaling & Polishing",
"description"=>"Professional cleaning for healthier teeth and gums."
],

[
"icon"=>"fa-solid fa-screwdriver-wrench",
"title"=>"Dental Fillings",
"description"=>"Modern tooth-colored restorations for cavities."
]

];

?>

<div class="service-grid">

<?php foreach($services as $service): ?>

<?php

$serviceIcon = $service['icon'];

$serviceTitle = $service['title'];

$serviceDescription = $service['description'];

include 'components/service-card.php';

?>

<?php endforeach; ?>

</div>

</div>

</div>

</section>

<!-- ==========================
     Meet the Dentist
========================== -->

<section class="dentist-section">

    <div class="container">

        <div class="dentist-grid">

            <!-- Dentist Image -->

            <div class="dentist-image fade-up">

                <img src="assets/images/dentist-profile.png"
                     alt="Dentist">

            </div>

            <!-- Dentist Information -->

            <div class="dentist-content fade-up">

                <p class="section-title">

                    Meet Your Dentist

                </p>

                <h2 class="section-heading">

                    Compassionate Care,
                    Modern Dentistry

                </h2>

                <p>

                    At DentalCare Pro Dental Clinic,
                    we believe every smile deserves
                    exceptional care.

                    Our goal is to provide modern,
                    comfortable and affordable dental
                    treatment using advanced technology
                    and evidence-based practice.

                </p>

                <p>

                    We focus on preventive,
                    restorative and cosmetic dentistry,
                    ensuring every patient receives
                    personalized treatment in a friendly
                    environment.

                </p>

                <ul class="dentist-list">

                    <li>

                        <i class="fa-solid fa-check"></i>

                        General Dentistry

                    </li>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        Cosmetic Dentistry

                    </li>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        Root Canal Treatment

                    </li>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        Teeth Whitening

                    </li>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        Braces Consultation

                    </li>

                </ul>

                <a href="about.php"
                   class="btn btn-primary">

                    Learn More

                </a>

            </div>

        </div>

    </div>

</section>

<!-- ==========================
Testimonials
========================== -->

<section class="testimonials">

<div class="container">

<p class="section-title">

Testimonials

</p>

<h2 class="section-heading">

What Our Patients Say

</h2>

<div class="testimonial-grid">

<div class="testimonial-card fade-up">

<p>

"The clinic is very clean,
the dentist explained everything
clearly and my treatment was painless."

</p>

<h4>★★★★★</h4>

<strong>Jane M.</strong>

</div>

<div class="testimonial-card fade-up">

<p>

"I booked online and was seen
on time. I highly recommend
DentalCare Pro."

</p>

<h4>★★★★★</h4>

<strong>Eric K.</strong>

</div>

<div class="testimonial-card fade-up">

<p>

"My children were very comfortable.
The staff were friendly and professional."

</p>

<h4>★★★★★</h4>

<strong>Aline U.</strong>

</div>

</div>

</div>

</section>

<?php include 'components/cta.php'; ?>

<!-- ==========================
Latest Dental Tips
========================== -->

<section class="blog-section">

<div class="container">

<p class="section-title">

Dental Tips

</p>

<h2 class="section-heading">

Latest Oral Health Articles

</h2>

<div class="service-grid">

<div class="service-card fade-up">

<img src="assets/images/blog1.jpg"
     alt="Brushing Tips"
     class="blog-image">

<h3>

How to Brush Properly

</h3>

<p>

Learn the correct brushing technique
to keep your teeth and gums healthy.

</p>

<a href="#"
class="btn btn-outline">

Read Article

</a>

</div>

<div class="service-card fade-up">

<img src="assets/images/blog2.jpg"
     alt="Healthy Diet"
     class="blog-image">

<h3>

Foods That Protect Your Teeth

</h3>

<p>

Discover foods that strengthen enamel
and reduce the risk of cavities.

</p>

<a href="#"
class="btn btn-outline">

Read Article

</a>

</div>

<div class="service-card fade-up">

<img src="assets/images/blog3.jpg"
     alt="Children Dental Care"
     class="blog-image">

<h3>

Children's Oral Health

</h3>

<p>

Simple habits to help children develop
healthy smiles from an early age.

</p>

<a href="#"
class="btn btn-outline">

Read Article

</a>

</div>

</div>

</div>

</section>




<!-- ==========================================
     Contact & Location
========================================== -->

<section class="contact-home">

    <div class="container">

        <p class="section-title">Get In Touch</p>

        <h2 class="section-heading">

            We're Here To Help

        </h2>

        <div class="contact-grid">

            <!-- Contact Information -->

            <div class="contact-card fade-up">

                <h3>Contact Information</h3>

                <div class="contact-item">

                    <i class="fa-solid fa-location-dot"></i>

                    <div>

                        <strong>Address</strong>

                        <p>Gahanga, Kigali, Rwanda</p>

                    </div>

                </div>

                <div class="contact-item">

                    <i class="fa-solid fa-phone"></i>

                    <div>

                        <strong>Phone</strong>

                        <p>+250 XXX XXX XXX</p>

                    </div>

                </div>

                <div class="contact-item">

                    <i class="fa-solid fa-envelope"></i>

                    <div>

                        <strong>Email</strong>

                        <p>info@dentalcarepro.com</p>

                    </div>

                </div>

                <div class="contact-item">

                    <i class="fa-solid fa-clock"></i>

                    <div>

                        <strong>Working Hours</strong>

                        <p>

                        Monday - Friday

                        8:00 AM - 5:00 PM

                        </p>

                    </div>

                </div>

            </div>

            <!-- Quick Contact Form -->

            <div class="form-card fade-up">

                <h3>Send Us a Message</h3>

                <form action="backend/contact.php"

                      method="POST">

                    <div class="form-group">

                        <input

                            type="text"

                            name="name"

                            placeholder="Full Name"

                            required>

                    </div>

                    <div class="form-group">

                        <input

                            type="email"

                            name="email"

                            placeholder="Email Address"

                            required>

                    </div>

                    <div class="form-group">

                        <input

                            type="text"

                            name="subject"

                            placeholder="Subject"

                            required>

                    </div>

                    <div class="form-group">

                        <textarea

                            name="message"

                            placeholder="Your Message"

                            required></textarea>

                    </div>

                    <button

                        class="btn btn-primary"

                        type="submit">

                        Send Message

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

<!-- ==========================================
Google Map
========================================== -->

<section class="map-section">

<div class="container">

<p class="section-title">

Visit Our Clinic

</p>

<h2 class="section-heading">

Find Us Easily

</h2>

<div class="map-container">

<iframe

src="https://www.google.com/maps/embed?..."

width="100%"

height="450"

style="border:0;"

allowfullscreen=""

loading="lazy">

</iframe>

</div>

</div>

</section>








<section class="emergency-banner">

<div class="container">

<h2>

Dental Emergency?

</h2>

<p>

Call us immediately and our team will
assist you as quickly as possible.

</p>

<a

href="tel:+250XXXXXXXXX"

class="btn btn-secondary">

Emergency Call

</a>

</div>

</section>

<?php

include 'includes/footer.php';

?>