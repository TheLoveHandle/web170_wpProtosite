<aside>
    
    <?php if(get_post_meta($post->ID, 'Quote', true));?>
    
    <blockquote><p><?php echo get_post_meta($post->ID, 'Quote', true);?></p></blockquote>
    
    <?php dynamic_sidebar(1); ?> 
    
    <img id="asidePhoto" src="<?php bloginfo('template_directory') ?>/images/SidebarPhoto.jpg" alt="aside">
</aside>