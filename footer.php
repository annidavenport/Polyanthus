<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Polyanthus
 */
?>

    <footer>
        <!-- Left footer section: Contact information -->
        <div id="footer-contact" class="four columns">
            <h3>Contact us</h3>
            <p>For more information, check out our <a href="<?php echo site_url(); ?>/faq-support">FAQ &amp; Support</a> page, or drop us a line:<br/><br/></p>
            <address>1 Imaginary Drive</address>
            <address>Melbourne, Victoria</address>
            <address>1800 123 456</address>
            <address>Send us an <a href="mailto:hello@littletinrocket.com">e-mail</a></address>
        </div>
        <!-- Middle footer section: Sitemap navigation links -->
        <div id="footer-sitemap" class="two columns">
            <h3>Sitemap</h3>
            <ul>
                <li><a href="<?php echo site_url(); ?>/" >Home</a></li>
                <li><a href="<?php echo site_url(); ?>/about">About</a></li>
                <li><a href="<?php echo site_url(); ?>/shop">Shop</a></li>
                <li><a href="<?php echo site_url(); ?>/blog">Blog</a></li>
                <li><a href="<?php echo site_url(); ?>/faq-support">FAQ &amp; Support</a></li>
                <li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
            </ul>
        </div>
        <!-- Right footer section: Logo and copyright information -->
        <div id="footer-copy" class="six columns">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footlogo.png" alt="Polyanthus">
            <p><small>&copy; Copyright Anni Davenport 2015. All Rights Reserved.</small></p>
        </div>
    </footer>

</div>

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='<?php echo get_stylesheet_directory_uri(); ?>/assets/js/libs/jquery-1.11.0.min.js'>\x3C/script>")</script>

<!-- this is where we put our custom functions -->
<!-- don't forget to concatenate and minify if needed -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
     Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.

<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
<?php wp_footer(); ?>
<script>
        var nav = responsiveNav(".nav-collapse");
</script>
</body>
</html>
