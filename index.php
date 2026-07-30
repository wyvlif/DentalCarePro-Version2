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

</div>

</div>

</section>

<?php

include 'includes/footer.php';

?>