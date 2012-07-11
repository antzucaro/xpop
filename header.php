<?php 
/**
 * The Header for the theme
 *
 * @package WordPress
 * @subpackage xpop
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('&ndash; ', true, 'right'); ?><?php bloginfo('name'); ?>: A Free and Open Source First Person Shooter</title>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- STYLES AND PINGBACKS
    ================================================== -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-responsive.css" rel="stylesheet">
    <!-- Font Awesome - http://fortawesome.github.com/Font-Awesome -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/font-awesome.css" rel="stylesheet">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- FAV AND TOUCH ICONS
    ================================================== -->
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-114x114.png">

    <?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
  </head>

  <body>

    <!-- NAVIGATION
    ================================================== -->
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse">
            <ul class="nav pull-left">
              <?php if (!is_front_page()): ?>
              <a class="brand" title="go back to the home page" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_nav_small.png"></a>
              <?php endif; ?>
              <li><a href="<?php bloginfo('url'); ?>/download" title="get the game"><i class="icon-download"></i> Download</a></li>
              <li><a href="<?php bloginfo('url'); ?>/features" title="view feature list"><i class="icon-list"></i> Features</a></li>
              <li><a href="<?php bloginfo('url'); ?>/media" title="view screenshots and videos"><i class="icon-picture"></i> Media</a></li>
              <li><a href="http://forums.xonotic.org/" title="browse the forums"><i class="icon-comments"></i> Forum</a></li>
              <li><a href="<?php bloginfo('url'); ?>/team/blog/" title="read the blog"><i class="icon-book"></i> Blog</a></li>
              <li><a href="http://stats.xonotic.org" title="see latest game and player statistics"><i class="icon-bar-chart"></i> Stats</a></li>
              <li><a href="http://dev.xonotic.org" title="development area"><i class="icon-cogs"></i> Develop</a></li>
            </ul>

            <ul class="nav pull-right">
              <li>
                <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" class="navbar-search">
                  <input class="search-query span2" type="text" name="s" id="s" placeholder="Search">
                  <input type="hidden" id="searchsubmit" value="Search" />
                </form>
              </li>
            </ul>

          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div><!-- end navbar -->
