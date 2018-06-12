<?php 
/*
    Template Name:Search Page
*/
?>
<?php get_header();?>
<div class="ld-wrapper container-fluid">
    <div class="container">
        <div class="search-box">
             <?php if(have_posts()):?>
            <?php while(have_posts()):the_post();?>
                <div class="search-post">
                    <a href="<?php echo get_permalink($post->ID);?>">
                        <?php the_title();?>  >>>
                    </a>
                    <div class="search-time"><?php the_time('Y年n月j日');?></div>
                </div>
            <?php endwhile;?>
        <?php else:?>
            <article>
                <header class="entry-header">
                    <h1 class="text-center">
                        <?php _e('没有找到该文章','leizi');?>
                    </h1>
                </header>
                    <div class="search-form search">
                            <form class="clearfix" method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                    <input type="text" class="search-text text" id="s" name="s"/>>
                                    <input type="submit" class="search-submit" value="搜索" id="searchsubmit"/ >
                            </form>
                    </div>


            </article>
        <?php endif;?>
        </div>
       
           
    </div>
</div>
        