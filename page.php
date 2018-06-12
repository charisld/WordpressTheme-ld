<?php get_header();?>
<?php if (have_posts()) :the_post(); : update_post_caches($posts); ?>
<div>
    <h2><?php the_title();?></h2>
    <?php the_content();?>
</div>
<?php else:?>
    <div>没有找到想要的页面！</div>
<?php endif;?>
<?php get_sidebar();?>