<?php
/**
 * The template for displaying search results pages.
 *
 * @package Polyanthus
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>

			<header class="entry-header">
				<h3 class="page-title"><?php printf( __( 'Search Results for: %s', 'polyanthus' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
			</header><!-- .page-header -->

			<div class="entry-content row">

				<div class="page-content">

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'content', 'search' );
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				</div>
			</div>


		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
