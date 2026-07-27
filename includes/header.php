<?php
/**
 * ==========================================================
 * DentalCare Pro v2.0
 * Shared Header
 * Version 2.0
 * ==========================================================
 */

if (!isset($pageTitle)) {
    $pageTitle = "DentalCare Pro Dental Clinic";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <meta name="description"
        content="DentalCare Pro Dental Clinic Management System">

    <meta name="keywords"
        content="Dentist, Dental Clinic, Rwanda, Kigali, DentalCare Pro">

    <meta name="author"
        content="Wiclif Hirwa">

    <!-- Favicon -->

    <link rel="icon"
        href="<?= SITE_URL ?>/assets/images/favicon.png">

    <!-- Google Fonts -->

    <link rel="preconnect"
        href="https://fonts.googleapis.com">

    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- SweetAlert2 -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Main CSS -->

    <link rel="stylesheet"
        href="<?= SITE_URL ?>/assets/css/style.css">

    <!-- Responsive CSS -->

    <link rel="stylesheet"
        href="<?= SITE_URL ?>/assets/css/responsive.css">

</head>

<body>