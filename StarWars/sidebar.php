<aside>
    
    <?php if(get_post_meta($post->ID, 'Quote', true));?>
    
    <blockquote><p><?php echo get_post_meta($post->ID, 'Quote', true);?></p></blockquote>
    
    <img id="asidePhoto" src="<?php bloginfo('template_directory') ?>/images/SidebarPhoto.jpg" alt="aside">
</aside>