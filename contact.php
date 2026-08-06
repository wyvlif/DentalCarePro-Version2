<?php

require_once 'backend/config.php';
require_once 'includes/functions.php';

$pageTitle = "Contact Us";

include 'includes/header.php';
include 'includes/navbar.php';

?>

<!-- ==========================================
Page Banner
========================================== -->

<section class="page-banner">

<div class="container">

<h1>Contact Us</h1>

<p>

Home / Contact

</p>

</div>

</section>

<!-- ==========================================
Contact Section
========================================== -->

<section class="contact-page">

<div class="container">

<div class="contact-grid">

<!-- Contact Information -->

<div class="contact-card fade-up">

<h2>Get In Touch</h2>

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

Monday - Friday<br>

08:00 AM - 05:00 PM

</p>

</div>

</div>

</div>

<!-- Contact Form -->

<div class="form-card fade-up">

<h2>Send Message</h2>

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

rows="6"

placeholder="Write your message"

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