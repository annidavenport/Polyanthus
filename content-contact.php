<?php
/**
 * The template used for displaying page content in the contact page
 *
 * @package Polyanthus
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section id="about-middle">
        <div class="about-content five columns">
            <h2>Contact Us</h2>
            <?php the_content(); ?>

        </div>
        <div class="about-image seven columns">
            <iframe width='100%' height='500px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/annidavenport.map-e23n9yya/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoiYW5uaWRhdmVucG9ydCIsImEiOiJtZDBaS04wIn0.ka9PKkghK4QC05835s-5sA'></iframe>
        </div>
    </section>

</article><!-- #post-## -->
