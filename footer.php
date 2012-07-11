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
    <div class="container xonborder" id="footer">
      <div class="row">
        <div class="span2">
          <h4>Home</h4>
          <ul>
            <li><a href="<?php bloginfo('url'); ?>/download" title="get the game">Download</a></li>
            <li><a href="<?php bloginfo('url'); ?>/features" title="view feature list">Features</a></li>
            <li><a href="<?php bloginfo('url'); ?>/team/blog/" title="read the blog">Blog</a></li>
            <li><a href="http://stats.xonotic.org" title="see latest game and player statistics">Stats</a></li>
            <li><a href="<?php bloginfo('url'); ?>/team/" title="meet team xonotic">Team Xonotic</a></li>
            <li><a href="<?php bloginfo('url'); ?>/the-game/faq/" title="read the faq">FAQ</a></li>
          <ul>
        </div>

        <div class="span2">
          <h4>Media</h4>
          <ul>
            <li><a href="<?php bloginfo('url'); ?>/media/" title="view screenshots">Screenshots</a></li>
            <li><a href="<?php bloginfo('url'); ?>/media/" title="view videos">Videos</a></li>
            <li><a href="<?php bloginfo('url'); ?>/community/content-submission" title="submit content">Submit your content</a></li>
          <ul>
        </div>

        <div class="span2">
          <h4>Development</h4>
          <ul>
            <li><a href="http://git.xonotic.org" title="source code">Source code (git)</a></li>
            <li><a href="http://dev.xonotic.org" title="development tracker">Development Tracker</a></li>
            <li><a href="http://dev.xonotic.org/projects/xonotic/wiki" title="Redmine">Redmine</a></li>
            <li><a href="http://dev.xonotic.org/projects/xonotic/issues/new" title="report a bug">Report a bug</a></li>
          <ul>
        </div>

        <div class="span2">
          <h4>Forums</h4>
          <ul>
            <li><a href="http://forums.xonotic.org/member.php?action=register" title="register for the forums">Register</a></li>
            <li><a href="http://forums.xonotic.org/memberlist.php" title="view the forum member list">Member list</a></li>
            <li><a href="http://forums.xonotic.org/misc.php?action=help" title="help">Help</a></li>
            <li><a href="http://forums.xonotic.org/search.php" title="search the forums">Search</a></li>
          <ul>
        </div>

        <div class="span2">
          <h4>Meta</h4>
          <ul>
            <li><a href="<?php bloginfo('url'); ?>/team/contact/" title="contact us">Contact</a></li>
            <li><a href="<?php bloginfo('url'); ?>/wp-admin" title="log in">Login</a></li>
            <li><a href="<?php bloginfo('url'); ?>/site-map" title="go to the site map">Site map</a></li>
          <ul>
        </div>

        <div class="span2">
          <h4>Social</h4>
          <a href="http://www.facebook.com/pages/Xonotic/106450756044750" title="Facebook"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/social_networking/facebook_32.png"></a>
          <a href="http://twitter.com/xonotic" title="Twitter"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/social_networking/twitter_32.png"></a>
          <a href="http://www.youtube.com/xonotic" title="YouTube"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/social_networking/youtube_32.png"></a>
          <a href="http://feeds.feedburner.com/Xonotic" title="RSS"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/social_networking/rss_32.png"></a>
          <br />
          <p></p>
          <h4>Sponsors</h4>
          <ul>
            <li><a href="http://www.netground.nl/" title="Netground">Netground</a></li>
            <li><a href="http://www.bitmissile.com/" title="bitmissile">Bitmissile</a></li>
            <li><a href="http://www.freegamealliance.com/" title="Free Game Alliance">Free Game Alliance</a></li>
          </ul>

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
    });
    </script>
  </body>
</html>
