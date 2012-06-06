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
        <div class="span2 br">
          <h4>Home</h4>
          <ul>
            <li><a href="<?php bloginfo('url'); ?>/team/" title="meet team xonotic">Team Xonotic</a></li>
            <li><a href="<?php bloginfo('url'); ?>/the-game/faq/" title="read the faq">FAQ</a></li>
            <li><a href="<?php bloginfo('url'); ?>/team/blog/" title="read the blog">Blog</a></li>
            <li><a href="<?php bloginfo('url'); ?>/team/contact/" title="contact us">Contact</a></li>
            <li><a href="<?php bloginfo('url'); ?>/links" title="links and sitemap">Links and Site Map</a></li>
          <ul>
        </div>

        <div class="span2 br">
          <h4>Media</h4>
          <ul>
            <li><a href="<?php bloginfo('url'); ?>/media/" title="view screenshots">Screenshots</a></li>
            <li><a href="<?php bloginfo('url'); ?>/media/" title="view videos">Videos</a></li>
            <li><a href="<?php bloginfo('url'); ?>/community/content-submission" title="submit content">Submit your content</a></li>
          <ul>
        </div>

        <div class="span2 br">
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
