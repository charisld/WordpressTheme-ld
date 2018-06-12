<?php get_header();?>

        <div class="skills-group">
        <div class="skill1">
                    <div class="show-num">90%</div>
                    <div class="show-block"></div>
                    <div class="show-skill">HTML</div>
                </div>
                <div class="skill1">
                        <div class="show-num">90%</div>
                        <div class="show-block"></div>
                        <div class="show-skill">CSS</div>
                    
                </div>
                <div class="skill2">
                    <div class="show-num">85%</div>
                    <div class="show-block"></div>
                    <div class="show-skill">JS</div>
                </div>
                
                <div class="skill2">
                        <div class="show-num">85%</div>
                        <div class="show-block"></div>
                        <div class="show-skill">jQuery</div>
                </div>
                <div class="skill1">
                        <div class="show-num">90%</div>
                        <div class="show-block"></div>
                        <div class="show-skill">Bootstrap</div>
                </div>
                <div class="skill2">
                        <div class="show-num">85%</div>
                        <div class="show-block"></div>
                        <div class="show-skill">React.js</div>
                </div>
                <div class="skill3">
                        <div class="show-num">70%</div>
                        <div class="show-block"></div>
                        <div class="show-skill">PHP</div>
                </div>
                <div class="skill4">
                        <div class="show-num">60%</div>
                        <div class="show-block"></div>
                        <div class="show-skill">Node.js</div>
                </div>
        </div>
   
    <div class="ld-wrapper container-fluid">
        <div class="row">
            <div class="col-9">
                <div class="container">
                    <!-- 文章合集 -->
                    <div class="card-box">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="card">
                            <div class="card-header">
                                <!-- 文章标题 -->
                                <h2><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h2>
                            </div>
                            <div class="card-body">
                                <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae quasi eum aperiam labore
                                    sapiente quae deserunt iste fugit, vitae officia illum. Cumque est alias, earum enim fugit
                                    quidem debitis accusamus!</p> -->
                                <?php the_excerpt();?>
                                <hr>
                                <div class="d-inline-block"><?php the_time('Y年n月j日');?></div>
                                <div class="tag-group d-inline-block">
                                    <!-- <span class="tag">HTML</span> <span class="tag">jQuery</span> <span class="tag">wordpress</span> -->
                                    <?php the_tags('标签:','','');?>
                                </div>
                                <div class="like d-inline-block float-right"> <p class="liked">&#10084;</p></div>
                            </div>
                        </div>
                    <?php endwhile;?>
                    <?php else:?>
                        <h3><a href="#" rel="bookmark">未找到</a></h3>
                        <p>没有找到任何文章</p>
                    <?php endif;?>
                    </div>
                    <div class="next-page text-center">上一页 下一页</div>
                </div>
            </div>
            <?php get_sidebar();?>
        </div>
    </div>
  <?php get_footer();?>