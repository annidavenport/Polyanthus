<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Polyanthus
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php if ( is_page( 'about' ) ) {
					get_template_part( 'content', 'about' );

				} elseif ( is_archive() ) {
					get_template_part( 'content', 'shop' );

				} elseif ( is_page( 'faq-support' ) ) {

					get_template_part( 'content', 'page' );

				} elseif ( is_page( 'contact' ) ) {

					get_template_part( 'content', 'contact' );

				} else {
					get_template_part( 'content', 'page' );
				}
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
