<html>
    <?php wp_head(); ?>
<head>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
        
    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
            $('.flexslider').flexslider();
        });
    </script>
        
</head>
    
<body <?php body_class(); ?>>
    
<div id="wrapper">
<div><img id="banner" src="<?php bloginfo('template_directory') ?>/images/banner.jpg" alt="banner"></div>

<!--
<nav>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About Me</a></li>
        <li><a href="skills.html">My Skills</a></li>
        <li><a href="weaknesses.html">My Weaknesses</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav>
-->
    
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>