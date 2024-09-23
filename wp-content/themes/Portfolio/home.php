<?php
/**
 * Template Name: Home
 * Description: A simple page template for use with the Elementor plugin.
 *
 * This template provides a minimal structure for Elementor to design the page.
 */

get_header(); // Load the header

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        // Start the loop.
        while ( have_posts() ) :
            the_post();

            // Display the content. This allows Elementor to take control.
            the_content();

        endwhile; // End the loop.
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); // Load the footer ?>