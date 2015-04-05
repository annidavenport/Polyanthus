<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Polyanthus
 */
?>

	<div class="twelve columns" style="padding-bottom:20px;">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php polyanthus_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		</article><!-- #post-## -->
	</div>
