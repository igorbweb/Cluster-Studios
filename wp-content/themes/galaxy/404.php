<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

get_header(); ?>

<meta property='og:image' content='<?php echo get_template_directory_uri(); ?>/assets/img/meta/thumbnail.jpg' />

<div id="content">
    <!-- ARTICLE -->
    <section id="page" class="page page-404 bg-transparent">
        <main class="page-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <div class="the-title">
                                <h1>404</h1>
                            </div>
                        </div>
                        <div class="the-content">
                            <p>Oops! This page could not be found!</p>
                        </div>
                        <a href="<?php echo esc_url(home_url('/')); ?>">Back to Home</a>
                    </div>
                </div>
            </div>
        </main>
    </section>
</div>

<?php get_footer(); ?>