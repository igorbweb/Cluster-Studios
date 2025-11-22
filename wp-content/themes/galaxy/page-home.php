<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

get_header(); ?>

<main>
    <section class="hero-section home">
        <div class="hero-overlay"></div>
        <video
            class="hero-video"
            autoplay
            loop
            muted
            playsinline
            preload="auto">
            <source src="<?= get_template_directory_uri(); ?>/assets/img/singularity.webm" type="video/webm">
            <source src="<?= get_template_directory_uri(); ?>/assets/img/singularity.mp4" type="video/mp4">
            <!-- fallback -->
            Your browser does not support the video tag.
        </video>

        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="texto d-flex flex-column text-center align-items-center gap-4">
                            <h1>Where Worlds<br>Come to <span>Life.</span></h1>
                            <p>We create immersive, story-driven and visually striking game experiences.<br>
                                From concept to launch, our team blends creativity and technology to build worlds players want to return to.</p>
                            <a class="cta outline" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/office.jpg" alt="" data-aos="fade-right" loading="lazy">
                </div>
                <div class="col-lg-5">
                    <div class="texto d-flex flex-column justify-content-between h-100" data-aos="fade-left">
                        <h2>Built by Players, for Players</h2>
                        <p>Our mission is simple: craft games with heart, vision, and unforgettable gameplay.
                            We’re a small, dedicated team of designers, developers, and storytellers passionate about pushing boundaries while keeping a tight focus on quality.
                            <br><br>Every pixel, every mechanic, every moment—designed with intention.
                            <br>We create immersive, story-driven and visually striking game experiences.
                            From concept to launch, our team blends creativity and technology to build worlds players want to return to.
                            <br><br>
                            Play. Discover. Explore.
                        </p>
                        <a href="/about-us" class="cta">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="games" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="texto d-flex flex-column gap-3 h-100">
                        <h2>Crafted Experiences</h2>
                        <p>Explore our catalog of original games, each built with its own identity and playstyle.
                            Whether it's fast-paced action, atmospheric adventures, or strategy that challenges your mind, our goal remains the same: deliver experiences that feel alive.</p>
                        <a class="cta" href="#">
                            Dive into our worlds
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="swiper games">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-game">
                                    <div class="thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rdr2.webp" alt="img-gal-1" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-game">
                                    <div class="thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rdr2.webp" alt="img-gal-2" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-game">
                                    <div class="thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rdr2.webp" alt="img-gal-3" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-12" data-aos="fade-up">
                    <div class="card-service">
                        <div class="thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Game-Development.webp" alt="" loading="lazy">
                        </div>
                        <div class="text">
                            <h3>Game Development</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6" data-aos="fade-up">
                    <div class="card-service">
                        <div class="thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature.webp" alt="" loading="lazy">
                        </div>
                        <div class="text">
                            <h3>Feature/System Development</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6" data-aos="fade-up">
                    <div class="card-service">
                        <div class="thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Game-Development.webp" alt="" loading="lazy">
                        </div>
                        <div class="text">
                            <h3>Consultancy</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <canvas id="starfield"></canvas>

    <section class="contact">
        <div class="container">
            <div class="section-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text">
                            <h2>Let’s Build Something Incredible</h2>
                            <p>Have a project, collaboration, or idea in mind?<br>
                                Reach out and let’s shape your next game together.<br><br>
                                <bold>We’d love to hear from you.</bold>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-container">
                            <div class="head text-center my-4">
                                <h3>Send us a Message</h3>
                            </div>
                            <form class="d-flex h-100 flex-column justify-content-between" action="" method="post">
                                <div class="input">
                                    <input class="form-control mb-3" type="text" name="name" id="name" placeholder="Name">
                                </div>

                                <div class="input">
                                    <input class="form-control mb-3" type="mail" name="email" id="email" placeholder="E-mail">
                                </div>

                                <div class="input">
                                    <input class="form-control mb-3" type="phone" name="phone" id="phone" placeholder="Phone">
                                </div>
                                <textarea class="form-control mb-3" rows="5" cols="33" name="mensagem" id="mensagem">Type your message:</textarea>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" href="" class="cta mt-2">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
    section.about {
        background-color: transparent;
    }

    section.games {
        overflow: hidden;

        .texto {
            position: relative;
            z-index: 10;

            &::after {
                content: '';
                z-index: -1;
                display: block;
                position: absolute;
                height: 100%;
                width: 205%;
                left: -100%;
                background-color: #0a0a0a;
            }
        }

        .swiper.games {
            overflow: visible;
        }
    }

    section.contact {
        background-color: transparent;

        .section-container {
            padding: 64px;
            border: 1px solid rgb(82, 82, 82);
            border-radius: 5px;
            background-color: rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(3px);
        }
    }
</style>

<?php get_footer(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector(".hero-content").classList.add("show");
            document.querySelector(".hero-overlay").style.opacity = "1";
        }, 2500);
        var swiperGames = new Swiper('.swiper.games', {
            slidesPerView: 1.8,
            spaceBetween: 32,
            loop: false,
        })
    })
</script>