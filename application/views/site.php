<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Berita</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/resources/styles.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/resources/https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="#home" id="navbar__logo">Berita Hari Ini</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span> <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="#home" class="navbar__links" id="home-page">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="#about" class="navbar__links" id="about-page">Berita Terkini</a>
                </li>
                <li class="navbar__item">
                    <a href="#services" class="navbar__links" id="services-page">Berita Lainnya</a>
                </li>
                <li class="navbar__btn">
                    <a href="<?= base_url('auth/registration'); ?>" class="button" id="signup">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php $this->load->view($view_page); ?>

    <!-- Footer Section -->
    <div class="footer__container">
        <div class="footer__links">
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>About Us</h2>
                    <a href="/sign__up">How it works</a> <a href="/">Testimonials</a>
                    <a href="/">Careers</a> <a href="/">Terms of Service</a>
                </div>
                <div class="footer__link--items">
                    <h2>Contact Us</h2>
                    <a href="/">Contact</a> <a href="/">Support</a>
                    <a href="/">Destinations</a>
                </div>
            </div>
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>Videos</h2>
                    <a href="/">Submit Video</a> <a href="/">Ambassadors</a>
                    <a href="/">Agency</a>
                </div>
                <div class="footer__link--items">
                    <h2>Social Media</h2>
                    <a href="/">Instagram</a> <a href="/">Facebook</a>
                    <a href="/">Youtube</a> <a href="/">Twitter</a>
                </div>
            </div>
        </div>
        <section class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="/" id="footer__logo">BERITA</a>
                </div>
                <p class="website__rights">© BERITA 2020. All rights reserved</p>
                <div class="social__icons">
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="/" class="social__icon--link"><i class="fab fa-instagram"></i></a>
                    <a href="/" class="social__icon--link"><i class="fab fa-youtube"></i></a>
                    <a href="/" class="social__icon--link"><i class="fab fa-linkedin"></i></a>
                    <a href="/" class="social__icon--link"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </section>
    </div>

    <script src="<?php echo base_url(); ?>/resources/app.js"></script>
</body>

</html>