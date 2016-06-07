<?php

// Register the nav menu
register_nav_menus(array(
    'main-menu' => __('Main'),
));

//register the sidebar
register_sidebar( array(
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2>',
	'after_title'   => '</h2>' 
));

// Support for themes
add_theme_support('post-thumbnails');

// Support for excerpts
add_post_type_support('page', 'excerpt');
?>