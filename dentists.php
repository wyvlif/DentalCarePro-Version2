<?php

require_once 'backend/config.php';
require_once 'includes/functions.php';

$pageTitle = "Our Dentists";

include 'includes/header.php';
include 'includes/navbar.php';

?>

<!-- ==========================================
Page Banner
========================================== -->

<section class="page-banner">

    <div class="container">

        <h1>Our Dental Team</h1>

        <p>Home / Dentists</p>

    </div>

</section>

<!-- ==========================================
Introduction
========================================== -->

<section class="team-intro">

    <div class="container">

        <p class="section-title">

            Meet Our Team

        </p>

        <h2 class="section-heading">

            Caring Professionals Dedicated To Your Smile

        </h2>

        <p class="intro-text">

            Our dental team combines clinical expertise,
            modern technology and compassionate care to
            provide high-quality treatment for every patient.

        </p>

    </div>

</section>

<section class="lead-dentist">

<div class="container">

<div class="dentist-grid">

<div class="dentist-image fade-up">

<img src="assets/images/dentist-profile.png"
alt="Lead Dentist">

</div>

<div class="dentist-content fade-up">

<p class="section-title">

Lead Dentist

</p>

<h2>

Dr. DentalCare Pro

</h2>

<p>

Our lead dentist is committed to delivering
patient-centered dental care with professionalism,
integrity and compassion. Every treatment plan is
designed according to each patient's individual needs.

</p>

<ul class="dentist-list">

<li><i class="fa-solid fa-check"></i>General Dentistry</li>

<li><i class="fa-solid fa-check"></i>Preventive Dentistry</li>

<li><i class="fa-solid fa-check"></i>Restorative Dentistry</li>

<li><i class="fa-solid fa-check"></i>Cosmetic Dentistry</li>

<li><i class="fa-solid fa-check"></i>Emergency Dental Care</li>

</ul>

<a href="appointment.php"

class="btn btn-primary">

Book Appointment

</a>

</div>

</div>

</div>

</section>

<section class="expertise-section">

<div class="container">

<p class="section-title">

Areas of Expertise

</p>

<h2 class="section-heading">

Our Clinical Services

</h2>

<div class="feature-grid">

<div class="feature-card">

<i class="fa-solid fa-tooth"></i>

<h3>Preventive Care</h3>

<p>

Routine examinations, scaling and oral health education.

</p>

</div>

<div class="feature-card">

<i class="fa-solid fa-teeth"></i>

<h3>Restorative Care</h3>

<p>

Fillings, crowns, bridges and dentures.

</p>

</div>

<div class="feature-card">

<i class="fa-solid fa-face-smile"></i>

<h3>Cosmetic Dentistry</h3>

<p>

Teeth whitening and smile enhancement.

</p>

</div>

</div>

</div>

</section>

<section class="schedule-section">

<div class="container">

<p class="section-title">

Working Hours

</p>

<h2 class="section-heading">

Clinic Schedule

</h2>

<table class="schedule-table">

<tr>

<th>Day</th>

<th>Hours</th>

</tr>

<tr>

<td>Monday</td>

<td>08:00 – 17:00</td>

</tr>

<tr>

<td>Tuesday</td>

<td>08:00 – 17:00</td>

</tr>

<tr>

<td>Wednesday</td>

<td>08:00 – 17:00</td>

</tr>

<tr>

<td>Thursday</td>

<td>08:00 – 17:00</td>

</tr>

<tr>

<td>Friday</td>

<td>08:00 – 17:00</td>

</tr>

<tr>

<td>Saturday</td>

<td>08:00 – 13:00</td>

</tr>

<tr>

<td>Sunday</td>

<td>Closed</td>

</tr>

</table>

</div>

</section>


<!-- ==========================================
Our Specialists
========================================== -->

<section class="specialists">

<div class="container">

<p class="section-title">

Our Specialists

</p>

<h2 class="section-heading">

Dedicated Dental Professionals

</h2>

<div class="team-grid">

<div class="team-card fade-up">

<img src="assets/images/dentist1.jpg"
alt="Dentist">

<h3>Dr. DentalCare Pro</h3>

<p class="designation">

General Dentist

</p>

<p>

Experienced in preventive, restorative,
and cosmetic dentistry with a patient-
centered approach.

</p>

<div class="team-buttons">

<a href="appointment.php?dentist=1"
class="btn btn-primary">

Book Appointment

</a>

</div>

</div>

<div class="team-card fade-up">

<img src="assets/images/dentist2.jpg"
alt="Dentist">

<h3>Dr. Jane Doe</h3>

<p class="designation">

Orthodontist

</p>

<p>

Specializes in braces, clear aligners,
and bite correction for children
and adults.

</p>

<div class="team-buttons">

<a href="appointment.php?dentist=2"
class="btn btn-primary">

Book Appointment

</a>

</div>

</div>

<div class="team-card fade-up">

<img src="assets/images/dentist3.jpg"
alt="Dentist">

<h3>Dr. John Smith</h3>

<p class="designation">

Oral Surgeon

</p>

<p>

Focused on extractions, wisdom teeth,
and minor oral surgical procedures.

</p>

<div class="team-buttons">

<a href="appointment.php?dentist=3"
class="btn btn-primary">

Book Appointment

</a>

</div>

</div>

</div>

</div>

</section>

<!-- ==========================================
Qualifications
========================================== -->

<section class="qualifications">

<div class="container">

<p class="section-title">

Professional Standards

</p>

<h2 class="section-heading">

Qualifications & Certifications

</h2>

<div class="feature-grid">

<div class="feature-card">

<i class="fa-solid fa-graduation-cap"></i>

<h3>Qualified Professionals</h3>

<p>

Licensed dental practitioners committed
to continuous professional development.

</p>

</div>

<div class="feature-card">

<i class="fa-solid fa-certificate"></i>

<h3>Evidence-Based Care</h3>

<p>

Treatment decisions based on current
clinical guidelines and best practices.

</p>

</div>

<div class="feature-card">

<i class="fa-solid fa-award"></i>

<h3>Patient Safety</h3>

<p>

Strict infection prevention and quality
assurance protocols.

</p>

</div>

</div>

</div>

</section>


<!-- ==========================================
Team Testimonials
========================================== -->

<section class="testimonials">

<div class="container">

<p class="section-title">

Patient Reviews

</p>

<h2 class="section-heading">

What Patients Say About Our Team

</h2>

<div class="testimonial-grid">

<div class="testimonial-card">

<p>

"The dentist explained every step clearly and made me feel comfortable throughout my treatment."

</p>

<h4>★★★★★</h4>

<strong>Patient Review</strong>

</div>

<div class="testimonial-card">

<p>

"My appointment started on time and the staff were professional and welcoming."

</p>

<h4>★★★★★</h4>

<strong>Patient Review</strong>

</div>

<div class="testimonial-card">

<p>

"I highly recommend this clinic to anyone looking for quality dental care."

</p>

<h4>★★★★★</h4>

<strong>Patient Review</strong>

</div>

</div>

</div>

</section>

<?php include 'components/cta.php'; ?>
