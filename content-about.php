<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Polyanthus
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section id="about-middle" class="row" >
        <div class="about-content eight columns">
            <h2>About Us</h2>
            <?php the_content(); ?>

        </div>
        <div class="about-image four columns">
            <?php echo get_the_post_thumbnail( ); ?>
        </div>
    </section>

</article><!-- #post-## -->
