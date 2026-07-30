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

<?php

include 'includes/footer.php';

?>