<?php get_header(); ?>
<div class="flex-slider">

<div class="flexslider">
<ul class="slides">
<li><img src="<?php bloginfo('template_directory'); ?>/images/image1.jpg" width="900" height="400" alt="image 1"></li>
<li><img src="<?php bloginfo('template_directory'); ?>/images/image2.jpg" width="900" height="400" alt="image 2"></li>
<li><img src="<?php bloginfo('template_directory'); ?>/images/image3.jpg" width="900" height="400" alt="image 3"></li>
</ul>
</div>

</div>

<div class="widgets">

    <div class="widget">
        <h2>About</h2>
        <?php if ( have_posts() ) : while( have_posts() ) : the_post();?>
        <?php the_content('');?>
        <?php endwhile; endif;?>
    </div>
    <div class="widget">
        <h2>Blog</h2>
        <?php rewind_posts();?>
        <?php query_posts('showposts=5');?>
        <?php if ( have_posts() ) : while( have_posts() ) : the_post();?>
        <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
        <?php endwhile; endif;?>
    </div>
    <div class="widget">
        <h2>Contact</h2>
        <p><strong>Email : </strong>danielsalexandre141@yahoo.com</p>
        <p><strong>Better Email : </strong>adanie04@seattlecentral.edu (Please only use this for urgent info)</p>
        <p><strong>Phone # : </strong> 1(206)599-9751</p>
        <p><strong>Address : </strong>148 NW 59th St, Seattle, WA, 98107 (I can probably trust you if you found this site, but please do not miss-use this info or give it to anyone)</p>
    </div>

</div>
<p>front-page.php</p>
<?php get_footer(); ?>