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
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.jfeed.pack.js"></script>
    <script>
    $(function(){
      $('.dropdown-toggle').dropdown();
      $('#myCarousel').carousel();

      <?php if (is_front_page()): ?>
          jQuery.getFeed({
              url: '<?php bloginfo('stylesheet_directory'); ?>/proxy.php?url=http://forums.xonotic.org/syndication.php?limit=10',
            success: function(feed) {

               var html = '<ul>';
                for(var i = 0; i < feed.items.length && i < 10; i++) {
                    var item = feed.items[i];
                    html += '<li><a href="' + item.link + '">' + item.title + '</a></li>';
                }
                html += '</ul>';
                jQuery('#forumrss').append(html);
            }
        });
    <?php endif; ?>
    });
    </script>
  </body>
</html>
