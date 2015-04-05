<?php
/**
 * @package Polyanthus
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h3 class="entry-title">', '</h3>' ); ech ?>


	</header><!-- .entry-header -->
	<div class="page-content">
		<div class="row">
			<div class="entry-meta three columns">
				<?php the_post_thumbnail( $size, $attr ); ?>
				<?php polyanthus_posted_on(); ?>
			</div><!-- .entry-meta -->
			<div class="nine columns">
				<?php the_content(); ?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'polyanthus' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

		</div>
	</div>

</article><!-- #post-## -->
