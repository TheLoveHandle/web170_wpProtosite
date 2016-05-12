<html>
    <?php wp_head(); ?>
<head>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
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
    
<main>
    <h1>My Weaknesses</h1>
    <ul>
        <li>Coming up with a design</li>
        <li>Databases</li>
        <li>Using other peoples code (By that I mean, things you find on the web. Odds are I can use the code of another student)</li>
    </ul>
    
    <p>My biggest weakness is visuals. I am no artist.</p>
</main>
    
<aside>
    <img id="asidePhoto" src="<?php bloginfo('template_directory') ?>/images/SidebarPhoto.jpg" alt="aside">
</aside>
    
<footer>
    <ul>
        <li>Produced by Alexandre Daniels</li>
        <li><a href="disclaimer.html">Disclaimer</a></li>
        <li>Updated: 4/11/2016</li>
    </ul>    
</footer>
    
</div><!--end wrapper-->
<?php wp_footer(); ?>
</body>
    
</html>