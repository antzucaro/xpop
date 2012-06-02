<?php
/**
 * k9 functions and definitions
 *
 * @package WordPress
 * @subpackage k9_Theme
 */

automatic_feed_links();

$content_width = 500;

add_theme_support('post-thumbnails');
	
/**
 * custom header
 */
define('HEADER_TEXTCOLOR', 'ffffff');
define('HEADER_IMAGE', '');
define('HEADER_IMAGE_WIDTH', 960);
define('HEADER_IMAGE_HEIGHT', 160);

add_custom_image_header('header_style', 'admin_header_style');
function header_style() {
	if ( get_header_image() || (HEADER_TEXTCOLOR != get_header_textcolor()) ) {
?>
<style type="text/css">
<?php if ( get_header_image() ) { ?>
div#header { background: url(<?php esc_url(header_image()); ?>) no-repeat; }
<?php } ?>
<?php if ( 'blank' == get_header_textcolor() ) { ?>
div#header h1, div#header .description { display: none; }
<?php } elseif ( HEADER_TEXTCOLOR != get_header_textcolor() ) { ?>
div#header h1 a, div#header .description { color: #<?php header_textcolor(); ?>; }
<?php } ?>
</style>
<?php	}
}

function admin_header_style() {
?>
<style type="text/css">
#headimg { background: #3371a3; height: <?php echo HEADER_IMAGE_HEIGHT; ?>px; width: <?php echo HEADER_IMAGE_WIDTH; ?>px; }
#headimg h1 { font-size: 24px; line-height: 1.0; padding: 55px 40px 10px; margin-bottom: 0; }
#headimg h1 a { color: #<?php header_textcolor(); ?>; text-decoration: none; }
#headimg h1 a:hover { text-decoration: underline; }
#headimg #desc { color: #<?php header_textcolor(); ?>; font-size: 14px; padding-left: 40px; }

<?php if ( 'blank' == get_header_textcolor() ) { ?>
#headimg h1, #headimg #desc { display: none; }
#headimg h1 a, #headimg #desc { color: #<?php echo HEADER_TEXTCOLOR; ?>; }
<?php } ?>
</style>
<?php
}
	
/**
 * custom wp_list_comments()
 */
function custom_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>

<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">

	<div class="comment-author vcard">
		<?php echo get_avatar($comment , 32); ?>
		<cite class="fn"><?php comment_author_link(); ?></cite>
	</div>

	<div class="comment-meta">    
		<a href="<?php echo esc_url(get_comment_link(get_comment_ID())); ?>" rel="bookmark" title="Permanent Link to this <?php comment_type(); ?>">
		<span class="updated">
			<span class="value-title" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"> </span>
			<?php comment_date(); ?>, <?php comment_time(); ?>
		</span>
		</a>	

		<?php edit_comment_link('Edit this','&mdash; <span class="edit-comment">','</span>'); ?>
	</div> <!-- END .comment-meta -->

	<div id="comment-entry-<?php comment_ID(); ?>" class="comment-entry">
		<?php if ( wp_get_comment_status(get_comment_ID()) == 'unapproved' ) : ?>
			<p class="unapproved"><em>Your comment is awaiting moderation.</em></p>
		<?php endif; ?>

		<?php comment_text(); ?>

		<?php comment_reply_link(array_merge($args, array('reply_text' => 'Reply', 'depth' => $depth, 'add_below' => 'comment-entry', 'max_depth' => $args['max_depth'], 'before' => '<p class="reply">', 'after' => '</p>'))); ?>       
	</div> <!-- END .comment-entry -->
    
<?php
}

/**
 * widgets
 */
 
if ( function_exists('register_sidebar') ) {
   register_sidebar(array("before_widget"=>"", "after_widget"=>"", "before_title"=>"", "after_title"=>"", "id" => "header_widget", "name" =>"Header Widget"));
   register_sidebar(array("id" => "gallery_sidebar", "name" =>"Gallery View Sidebar"));
   register_sidebar(array("id" => "imagebrowser_sidebar", "name" =>"Image Browser View Sidebar"));
   register_sidebar(array("id" => "blog_sidebar", "name" =>"Blog Sidebar"));
   register_sidebar(array("id" => "links_sidebar", "name" =>"Links Sidebar"));
   register_sidebar(array("id" => "everypage_sidebar", "name" =>"Every Page Sidebar"));
   register_sidebar(array("id" => "misc_sidebar", "name" =>"Misc Sidebar"));
}

	add_action('widgets_init', 'load_widgets');
		function load_widgets() {
				register_widget('WP_Widget_Page_Subpages');	
		}

			/**
			* Page Subpages widget
			*/ 
			class WP_Widget_Page_Subpages extends WP_Widget {
				function WP_Widget_Page_Subpages() {
					$widget_ops = array('description' => 'List all subpage of the current ancestor Page');
					$this->WP_Widget('page_subpages', 'Page Subpages', $widget_ops);
				}

				function widget($args) {
					global $post;
					extract($args);

					$ancestor = array_pop(get_post_ancestors($post->ID)); 
					$postID = isset($post->ID) ? $post->ID : 0;
					$ancestor = isset($ancestor) ? $ancestor : $postID;
					$title = get_the_title($ancestor);   
					$children = wp_list_pages('echo=0&child_of='.$ancestor);

					if ( is_page() && !empty($children) ) :    
						echo $before_widget;
						echo '<h2>'.$title.' Subpages</h2><ul>';
							wp_list_pages('title_li=&child_of='.$ancestor); 
						echo "</ul>";  
						echo $after_widget;
					endif;
				}
			}

/**
 * Removes WordPress [gallery] embedded CSS
 */
add_filter('gallery_style', 
	create_function(
		'$css', 
		'return preg_replace("#<style type=\'text/css\'>(.*?)</style>#s", "", $css);'
		)
	);

/**
 * Force 3 columns WordPress [gallery] 
 */
add_filter('the_content', 'gallery_columns');
	function gallery_columns($content) {	
		$columns = 3;
		$pattern = array(
			'#(\[gallery(.*?)columns="([0-9])"(.*?)\])#ie',
			'#(\[gallery\])#ie', 
			'#(\[gallery(.*?)\])#ie'
		);	 	
		$replace = 'stripslashes(strstr("\1", "columns=\"$columns\"") ? "\1" : "[gallery \2 \4 columns=\"$columns\"]")';

		return preg_replace($pattern, $replace, $content);
	}
  
/**
 * Better Post or Page password form
 */
add_filter('the_password_form', 'custom_password_form'); 
	function custom_password_form($form) {
		$subs = array(
			'#<form(.*?)>#' => '<form$1 class="passwordform">',
			'#<input(.*?)type="password"(.*?) />#' => '<input$1type="password"$2 class="text" />',
			'#<input(.*?)type="submit"(.*?) />#' => '<input$1type="submit"$2 class="button" />'
		);

		echo preg_replace(array_keys($subs), array_values($subs), $form);
	}         
?>
