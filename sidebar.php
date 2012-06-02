<?php
/**
 * The Sidebar
 *
 * @package WordPress
 * @subpackage xpop
 */

global $is_imagebrowser;
$gallery_child = ($post->post_parent==3) ? 1 : 0;
?>
<div id="sidebar">
  <ul>
    <?php if ( ( is_front_page() || $gallery_child) && !$is_imagebrowser ) { ?>
      <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar("gallery_sidebar") ) { } ?>
    <?php } elseif ( $is_imagebrowser ) { ?>
      <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar("imagebrowser_sidebar") ) { } ?>
    <?php } elseif (is_home() || is_single() ) { ?>
      <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar("blog_sidebar") ) { } ?>
        <li><h3>RSS Feeds</h3>
          <ul>
            <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php echo esc_attr(bloginfo('name')); ?> Posts RSS feed" rel="alternate" type="application/rss+xml">All posts</a></li>
            <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php echo esc_attr(bloginfo('name')); ?> Comments RSS feed" rel="alternate" type="application/rss+xml">All comments</a></li>
          </ul>
        </li>
    <?php } else { ?>
      <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar("misc_sidebar") ) { } ?>
    <?php } ?>
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar("everypage_sidebar") ) { } ?>
    <?php if (current_user_can('manage_options')) { ?>
    <li><h3>Meta</h3>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
      </ul>
    </li>
    <?php } ?>
  </ul>
  </div>
