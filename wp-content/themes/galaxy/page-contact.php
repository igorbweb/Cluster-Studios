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
                        <h1>Let’s Bring <span>Your Vision</span> to Life</h1>
                        <p> Whether you're developing a new game, expanding your production pipeline, or exploring a creative partnership —<br>we’re here to collaborate and make something unforgettable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="section-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-text">
                            <h2 class="mb-3">How to Reach Us</h2>
                            <p>
                                Prefer talking directly? Feel free to get in touch via email or schedule a call.
                            </p>

                            <ul class="info-list">
                                <li><strong>Email:</strong> contact@clusterstudios.com</li>
                                <li><strong>Business Hours:</strong> Mon–Fri, 10:00–18:00</li>
                                <li><strong>Location:</strong> Remote-first, global collaboration</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-container">
                            <div class="head text-center my-4">
                                <h3>Send us a Message</h3>
                            </div>

                            <!-- ORIGINAL FORM -->
                            <form class="d-flex h-100 flex-column justify-content-between" action="" method="post">

                                <div class="input">
                                    <input class="form-control mb-3" type="text" name="name" id="name" placeholder="Name">
                                    <!-- your svg icon remains -->
                                </div>

                                <div class="input">
                                    <input class="form-control mb-3" type="mail" name="email" id="email" placeholder="E-mail">
                                </div>

                                <div class="input">
                                    <input class="form-control mb-3" type="phone" name="phone" id="phone" placeholder="Phone">
                                </div>

                                <textarea class="form-control mb-3" rows="5" cols="33" name="mensagem" id="mensagem">Digite aqui sua mensagem:</textarea>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="cta mt-2">Enviar Cadastro</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-values">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 value-box">
                    <h3>Industry-Focused</h3>
                    <p>
                        We understand the unique challenges of game studios — from rapid prototyping to polished final delivery.
                        Our workflow is built to support every stage.
                    </p>
                </div>

                <div class="col-lg-4 value-box">
                    <h3>Clear Communication</h3>
                    <p>
                        Every project starts with clarity. You’ll always know the timeline, deliverables, and progress as we move forward together.
                    </p>
                </div>

                <div class="col-lg-4 value-box">
                    <h3>Flexible Collaboration</h3>
                    <p>
                        Need ongoing support or a one-off project?
                        Our structure adapts to your production needs — large or small.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>