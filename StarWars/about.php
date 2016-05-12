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
    <h1>About Page</h1>
    <p>If you have come to this page, odds are you expect me to tell you some things about my life. Well, I was 22 when I last updated this site. If you don't know when that was, look at the bottom of the page. I love video games, laser tag, food, sleep, and girls. I do currently need some more friends to come play laser tag with me. If you are interested, take a look at virtualsports.net. My groups name is _______(can't remember right now, will update) and we play on Saturdays. Things I do not like, a lot of vegetables, all seafood, mornings, losing at anything, and break ups.</p>

    <p>That's all you really need to know about me. Feel free to email me with questions, or if you want to just chat.</p>
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