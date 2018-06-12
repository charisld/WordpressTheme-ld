<?php get_header();?>
<div class="ld-wrapper container-fluid">
        <div class="row">
            <div class="col-9">
                <div class="container">
                    <?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
                        <div class="card">
                            <div class="card-header">
                                <!-- 文章标题 -->
                                <h2><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h2>
                            </div>
                            <div class="card-body">
                                <?php the_content();?>
                                <hr>
                                <div class="d-inline-block"><?php the_time('Y年n月j日');?></div>
                                <div class="tag-group d-inline-block">
                                    <?php the_tags('标签:','','');?>
                                </div>
                            </div>
                        </div>
                    <?php else:?>
                        <h3><a href="#" rel="bookmark">未找到</a></h3>
                        <p>没有找到任何文章</p>
                    <?php endif;?>
                </div>
            </div>
            <?php get_sidebar();?>
        </div>
</div>
