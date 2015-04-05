<?php
/**
 * The home page template file.
 *
 * @package Polyanthus
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="banner">
				<div id="banner-overlay">
					<h1>Let a little life in</h1>
					<div id="banner-callto">
						<p><a href="<?php echo site_url(); ?>/blog">Check out our blog for inspiration</a></p>
					</div>
				</div>

			</section>
			<section id="home-middle">
				<div id="featured" class="three columns">
					<div class="featured-image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fotolia1/Fotolia_62534898_XS.jpg" alt="featured product">
					</div>
					<div class="hover-title">
						<h3>Plants, Tools &amp; Homewares</h3>
						<p>SHOP NOW</p>
					</div>
				</div>
				<div id="quick-browse" class="nine columns">
					<div id="browse-header">
						<h2>Featured Homewares</h2>
					</div>


					<?php get_sidebar(); ?>
					<br/><br/>



					<h2>Recent Posts</h2>
					<?php
						$args = array( 'posts_per_page' => 2, 'order'=> 'ASC', 'orderby' => 'title' );
						$postslist = get_posts( $args );
						foreach ( $postslist as $post ) :
						  setup_postdata( $post ); ?>
							<div class="row">
								<div class="two columns" >
									<?php the_post_thumbnail( array(64,64), $attr ); ?>
								</div>
								<div class="ten columns">
									<?php the_date(); ?>
									<br />
									<?php the_title(); ?>
									<?php the_excerpt(); ?>

								</div>
							</div>
						<?php
						endforeach;
						wp_reset_postdata();
					?>
				</div>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
