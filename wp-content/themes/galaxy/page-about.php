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
    <section class="hero-intern" style="background: transparent;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="texto d-flex flex-column align-items-center text-center text-lg-start">
                        <p><a href="<?= home_url() ?>">Home</a>&nbsp;>&nbsp;About Us</p>
                        <h1>About Cluster Studio</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row gap-4 gap-lg-0 g-4">
                <div class="col-lg-6">
                    <img class="img-about" src="<?= IMG_URI ?>astroart.jpeg" alt="" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <span class="quality-badge">IMAGINATION & CRAFT</span>
                    <h2 class="mt-2">Shaped With Purpose</h2>
                    <p class="mt-4">Cluster Studio is driven by the belief that games should inspire curiosity, spark emotion, and invite players into worlds that feel alive. We craft experiences that blend artistry and technology, embracing experimentation and thoughtful design to create moments that stay with players long after they set the controller down.<br><br>Our team thrives on imagination and collaboration, building each project with the intention of surprising, challenging, and empowering the people who play our games.</p>
                </div>
                <div class="col-12">
                    <p>At the heart of our work is a commitment to creative freedom and a culture that values shared growth. Cluster Studio brings together developers from diverse backgrounds, giving them space to explore bold ideas, refine their craft, and push the boundaries of what interactive storytelling can be. Everything we do is anchored in the player’s journey—because every world we create is ultimately shaped by those who step into it.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="about-metrics">
        <div class="container">
            <div class="row text-center">

                <div class="col-12 mb-4">
                    <h2 class="metrics-title">Our Impact in Numbers</h2>
                    <p class="metrics-subtitle">Trusted by studios and teams worldwide.</p>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="metric-box">
                        <h3 class="metric-value" data-target="5" data-suffix="+">5+</h3>
                        <p>AA Games Launched</p>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="metric-box">
                        <h3 class="metric-value" data-target="10" data-suffix="+">10+</h3>
                        <p>Projects Supported</p>
                    </div>
                </div>

                <div class="col-6 col-lg-3 mt-4 mt-lg-0">
                    <div class="metric-box">
                        <h3 class="metric-value" data-target="7" data-suffix="+ yrs">7+ yrs</h3>
                        <p>Combined Experience</p>
                    </div>
                </div>

                <div class="col-6 col-lg-3 mt-4 mt-lg-0">
                    <div class="metric-box">
                        <h3 class="metric-value" data-target="100" data-suffix="%">100%</h3>
                        <p>Client Satisfaction</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about-quality">
        <div class="container">
            <div class="row align-items-center g-4">

                <div class="col-lg-6">
                    <img class="img-fluid rounded-3" src="<?= IMG_URI ?>metacritic_logo.webp" alt="Quality Assurance Art" loading="lazy">
                </div>

                <div class="col-lg-6">
                    <span class="quality-badge">QUALITY & RELIABILITY</span>
                    <h2 class="quality-title">Built With Precision</h2>
                    <p class="quality-text">
                        Quality is woven into every stage of our development process.
                        From early prototypes to final optimization, we carefully test, refine,
                        and validate systems to ensure stability, performance, and player comfort.
                        <br><br>
                        Whether we are building new gameplay features, refining progression systems,
                        or providing technical consultancy, Cluster Studio is committed to delivering
                        results that are polished, reliable, and ready for real-world production.
                    </p>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.swiper.parceiros', {
            slidesPerView: 3,
            spaceBetween: 32,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 32,
                }
            }
        });
        const counters = document.querySelectorAll(".metric-value");
        let hasAnimated = false;

        function animateCounters() {
            if (hasAnimated) return;
            const section = document.querySelector(".about-metrics");
            const rect = section.getBoundingClientRect();

            if (rect.top < window.innerHeight * 0.8) {
                hasAnimated = true;

                counters.forEach(counter => {
                    const target = +counter.getAttribute("data-target");
                    const suffix = counter.getAttribute("data-suffix") || "";
                    const duration = 1800;

                    let start = 0;
                    const stepTime = 16; // ~60fps
                    const increment = target / (duration / stepTime);

                    const timer = setInterval(() => {
                        start += increment;
                        if (start >= target) {
                            clearInterval(timer);
                            counter.textContent = target + suffix;
                        } else {
                            counter.textContent = Math.floor(start) + suffix;
                        }
                    }, stepTime);
                });
            }
        }

        window.addEventListener("scroll", animateCounters);
        animateCounters();
    })
</script>