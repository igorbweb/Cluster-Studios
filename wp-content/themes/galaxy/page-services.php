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
                        <h1>Our Services</h1>
                        <p>At Cluster Studio, we design, develop, and refine interactive experiences with precision and creativity.<br>Explore how we can support your project from concept to completion.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-section">
        <div class="container services-grid">

            <div class="service-card" data-aos="fade-up">
                <img class="service-image" src="<?= IMG_URI ?>Game-Development.webp" loading="lazy"></img>
                <div class="service-content">
                    <h2>Game Development</h2>
                    <p>We develop full-scale games and guide projects from concept to release. Our focus is delivering engaging experiences through gameplay, design, art integration, and technical excellence.</p>

                    <ul>
                        <li>Full-cycle game development</li>
                        <li>Gameplay programming</li>
                        <li>Level design & world building</li>
                        <li>Art integration</li>
                        <li>Optimization & polishing</li>
                    </ul>
                </div>
            </div>

            <div class="service-card" data-aos="fade-up">
                <img class="service-image" src="<?= IMG_URI ?>feature.webp" loading="lazy"></img>
                <div class="service-content">
                    <h2>Feature / System Development</h2>
                    <p>We build robust, scalable systems tailored to your game. From combat modules to UI frameworks, we deliver technical solutions that elevate your project.</p>

                    <ul>
                        <li>Combat systems</li>
                        <li>Inventory & progression systems</li>
                        <li>AI behaviors & navigation</li>
                        <li>UI/UX mechanics</li>
                        <li>Developer tools & pipelines</li>
                    </ul>
                </div>
            </div>

            <div class="service-card" data-aos="fade-up">
                <img class="service-image" src="<?= IMG_URI ?>Game-Development.webp" loading="lazy"></img>
                <div class="service-content">
                    <h2>Consultancy</h2>
                    <p>We provide technical, creative, and strategic guidance to help teams improve workflows, optimize their codebase, and make stronger product decisions.</p>

                    <ul>
                        <li>Technical audits</li>
                        <li>Code review & architecture improvements</li>
                        <li>Performance optimization</li>
                        <li>Workflow & pipeline refinement</li>
                        <li>Technology recommendations</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section class="services-tech">
        <div class="container">
            <h2 class="tech-title">Technologies We Work With</h2>
            <p class="tech-subtitle">
                We use industry-proven engines, languages, and platforms to deliver
                scalable, high-performance game experiences.
            </p>

            <div class="tech-grid" data-aos="fade-up">

                <div class="tech-card">
                    <div class="tech-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M19.14 12.94c.04-.31.06-.63.06-.94s-.02-.63-.06-.94l2.03-1.58a.5.5 0 0 0 .11-.63l-1.92-3.32a.5.5 0 0 0-.6-.22l-2.39.96a7.03 7.03 0 0 0-1.63-.94L14.5 2.5a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 0-.5.5l-.38 2.47c-.59.23-1.13.54-1.63.94l-2.39-.96a.5.5 0 0 0-.6.22L2.98 8.85a.5.5 0 0 0 .11.63l2.03 1.58c-.04.31-.06.63-.06.94s.02.63.06.94l-2.03 1.58a.5.5 0 0 0-.11.63l1.92 3.32c.13.23.4.32.63.22l2.39-.96c.5.4 1.04.71 1.63.94l.38 2.47c.04.26.26.45.5.45h4c.24 0 .46-.19.5-.45l.38-2.47c.59-.23 1.13-.54 1.63-.94l2.39.96c.23.1.5.01.63-.22l1.92-3.32a.5.5 0 0 0-.11-.63l-2.03-1.58ZM12 15.5A3.5 3.5 0 1 1 12 8.5a3.5 3.5 0 0 1 0 7Z"></path>
                        </svg>
                    </div>

                    <h3>Engines & Frameworks</h3>
                    <ul>
                        <li>Unity</li>
                        <li>Unreal Engine</li>
                        <li>Godot</li>
                        <li>MonoGame</li>
                        <li>Photon Fusion</li>
                        <li>Mirror Networking</li>
                    </ul>
                </div>

                <div class="tech-card">
                    <div class="tech-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M8.7 3.3a1 1 0 0 1 0 1.4L3.4 10l5.3 5.3a1 1 0 1 1-1.4 1.4L.6 10l6.7-6.7a1 1 0 0 1 1.4 0Zm6.6 0a1 1 0 0 0 0 1.4L20.6 10l-5.3 5.3a1 1 0 1 0 1.4 1.4L23.4 10l-6.7-6.7a1 1 0 0 0-1.4 0Z" />
                        </svg>
                    </div>

                    <h3>Programming Languages</h3>
                    <ul>
                        <li>C#</li>
                        <li>C++</li>
                        <li>Python</li>
                        <li>JavaScript / TypeScript</li>
                        <li>HLSL / Shader Graph</li>
                        <li>GLSL</li>
                    </ul>
                </div>

                <div class="tech-card">
                    <div class="tech-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 5h18v10H3V5Zm0 12h7v2H3v-2Zm10 0h8v2h-8v-2Z" />
                        </svg>
                    </div>

                    <h3>Platforms</h3>
                    <ul>
                        <li>PC (Windows / macOS / Linux)</li>
                        <li>Mobile (iOS / Android)</li>
                        <li>WebGL</li>
                        <li>PlayStation</li>
                        <li>Xbox</li>
                        <li>Nintendo Switch*</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>


    <section class="services-cta">
        <div class="container">
            <h2>Let’s Build Something Great Together</h2>
            <p>Ready to start your next project? Contact us and tell us what you’re working on.</p>
            <a href="/contact" class="cta">Contact Us</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>