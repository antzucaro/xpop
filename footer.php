<?php 
/**
 * The template used to display the footer
 *
 * @package WordPress
 * @subpackage xpop
 */
?>

    <!-- FOOTER
    ================================================== -->
    <div class="container" id="footer">
      <div class="row">
        <div class="span5">
          <p><a href="http://xonotic.org/site-map">Sitemap</a> | <?php wp_loginout() ?></p>
        </div>
      </div> <!-- /row -->
    </div>

    <!-- for WP's built-in admin bar when logged in -->
    <?php wp_footer(); ?>

    <!-- JAVASCRIPT
    ================================================== -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap-transition.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap-carousel.js"></script>
    <script>
    $(function(){
      $('.dropdown-toggle').dropdown();
      $('#myCarousel').carousel();
    });
    </script>
  </body>
</html>
