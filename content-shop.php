<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Polyanthus
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content-shop">
		<header class="entry-header">
			<h3><?php the_title(); ?></h3>

		</header>

		<div id="container">
			<?php the_content(); ?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'polyanthus' ),
					'after'  => '</div>',
				) );
			?>
		</div>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
