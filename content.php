<?php
/**
 * @package Polyanthus
 * This page displays the blog roll on the blog page.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content row">
		<div class="blog-image four columns">
			<?php the_post_thumbnail( $size, $attr ); ?>
		</div>
		<div class="blog-content eight columns" >
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php polyanthus_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'polyanthus' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'polyanthus' ),
					'after'  => '</div>',
				) );
			?>

		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->