<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="header">

    <div class="container">

        <!-- Logo -->

        <a href="<?= SITE_URL ?>/index.php" class="logo">

            <img src="<?= SITE_URL ?>/assets/images/logo.png"
                 alt="DentalCare Pro Logo">

            <div class="logo-text">

                <h2>DentalCare Pro</h2>

                <span>Dental Clinic</span>

            </div>

        </a>

        <!-- Navigation -->

        <nav class="navbar" id="navbar">

            <ul>

                <li>
                    <a href="<?= SITE_URL ?>/index.php"
                       class="<?= ($currentPage=="index.php")?'active':''; ?>">
                        Home
                    </a>
                </li>

                <li>
                    <a href="<?= SITE_URL ?>/about.php"
                       class="<?= ($currentPage=="about.php")?'active':''; ?>">
                        About
                    </a>
                </li>

                <li>
                    <a href="<?= SITE_URL ?>/services.php"
                       class="<?= ($currentPage=="services.php")?'active':''; ?>">
                        Services
                    </a>
                </li>

                <li>
                    <a href="<?= SITE_URL ?>/dentists.php"
                       class="<?= ($currentPage=="dentists.php")?'active':''; ?>">
                        Dentists
                    </a>
                </li>

                <li>
                    <a href="<?= SITE_URL ?>/gallery.php"
                       class="<?= ($currentPage=="gallery.php")?'active':''; ?>">
                        Gallery
                    </a>
                </li>

                <li>
                    <a href="<?= SITE_URL ?>/contact.php"
                       class="<?= ($currentPage=="contact.php")?'active':''; ?>">
                        Contact
                    </a>
                </li>

            </ul>

        </nav>

        <!-- Buttons -->

        <div class="nav-buttons">

            <a href="<?= SITE_URL ?>/login.php"
               class="btn-login">

                <i class="fa-solid fa-user"></i>

                Login

            </a>

            <a href="<?= SITE_URL ?>/appointment.php"
               class="btn-book">

                Book Appointment

            </a>

        </div>

        <!-- Mobile Toggle -->

        <div class="menu-toggle" id="menuToggle">

            <i class="fa-solid fa-bars"></i>

        </div>

    </div>

</header>