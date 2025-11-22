<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <!-- Head Tags -->
    <!-- Meta Data -->
    <meta charset="<?php bloginfo('charset'); ?>">

    <!-- Viewport  -->
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <!-- Favicon -->
    <!-- INSERIR AQUI CONFORME CHECKLIST -->

    <meta name="theme-color" content="#ffffff">

    <!-- Meta -->
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">

    <!-- Wordpress Shit -->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>

    <!-- jQuery -->
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/jquery/jquery-1.11.1.min.js'></script>

    <!-- Bootstrap -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/bootstrap/bootstrap.min.css'>

    <!-- Fancybox -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/fancybox/fancybox.css'>

    <!-- Swiper -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/swiper/swiper-bundle.min.css'>

    <!-- Main CSS -->
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/style.css'>
    
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
    <canvas id="starfield"></canvas>

    <div class="loading">
        <p><i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw margin-bottom"></i></p>
    </div>
    <!-- RESPONSIVE MENU -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/Menu.svg" alt="">
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <div class="menu-items d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3 gap-lg-0">
                        <a class="<?= is_front_page() ? 'active' : '' ?>" href="<?= home_url(); ?>">Home</a>
                        <a class="<?= is_page('about') ? 'active' : '' ?>" href="<?= home_url('/about'); ?>">About Us</a>
                        <a class="<?= is_page('games') ? 'active' : '' ?>" href="<?= home_url('/games'); ?>">Games</a>
                        <a class="<?= is_page('services') ? 'active' : '' ?>" href="<?= home_url('/services'); ?>">Services</a>
                        <a class="<?= is_page('contact') ? 'active' : '' ?>" href="<?= home_url('/contact'); ?>">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>