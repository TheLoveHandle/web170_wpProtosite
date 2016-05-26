<?php

// Register the nav menu
register_nav_menus(array(
'main-menu' => __('Main'),
));

// Support for themes
add_theme_support('post-thumbnails');

// Support for excerpts
add_post_type_support('page', 'excerpt');
?>