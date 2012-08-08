<?php
  automatic_feed_links();

  function load_widgets() {
    if ( function_exists('register_sidebar') ) {
       register_sidebar(array("before_widget"=>"", "after_widget"=>"", "before_title"=>"", "after_title"=>"", "id" => "header_widget", "name" =>"Header Widget"));
       register_sidebar(array("id" => "gallery_sidebar", "name" =>"Gallery View Sidebar"));
       register_sidebar(array("id" => "imagebrowser_sidebar", "name" =>"Image Browser View Sidebar"));
       register_sidebar(array("id" => "blog_sidebar", "name" =>"Blog Sidebar"));
       register_sidebar(array("id" => "links_sidebar", "name" =>"Links Sidebar"));
       register_sidebar(array("id" => "everypage_sidebar", "name" =>"Every Page Sidebar"));
       register_sidebar(array("id" => "misc_sidebar", "name" =>"Misc Sidebar"));
       register_sidebar(array("id" => "homepage_sidebar", "name" =>"Home Page Sidebar", 'before_widget' => '<div id="%1$s">', 'after_widget' => '</div>'));
    }
  }

  add_action('widgets_init', 'load_widgets');
?>
