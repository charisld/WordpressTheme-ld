<div class="col-3">
                <!-- 侧边工具栏 -->
                <div class="sidebar">
                    <!-- 个人信息栏 -->
                    <div class="my-info">
                        <h4>个人简介</h4>
                        <!-- 头像 -->
                        <img src="<?php bloginfo('template_url'); ?>/images/test.jpg" class="rounded-circle ld-photo">
                         <!-- 一句话介绍 -->
                        <p><span>做开发不如养条狗</span></p> 
                    </div>
                    <!-- 搜索栏 -->
                    <div class="search ">
                            <form class="clearfix" method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                    <input type="text" class="search-text text" id="s" name="s"/>>
                                    <input type="submit" class="search-submit" value="搜索" id="searchsubmit"/ >
                            </form>
                    </div>
                    <!-- 文章目录 -->
                    <div class="dynamic-sidebar">
                        <?php if(!function_exists('dynamic_sidebar')||!dynamic_sidebar('Second_sidebar')):?>
                        <h4>最新文章</h4>
                        <ul>
                            <?php 
                                $posts=get_posts('numberposts=6&orderby=post_date');
                                foreach($posts as $post){
                                    setup_postdata($post);
                                    echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
                                }
                                $post=$posts[0];
                            ?>
                            <!-- <li><a href="#">文章一的标题</a></li>
                            <li><a href="#">文章二的标题</a></li>
                            <li><a href="#">文章三的标题</a></li> -->
                        </ul>
                        <?php endif;?>
                    </div>
                    <!-- 标签云 -->
                    <div class="tag-cloud">
                        <?php if ( !function_exists('dynamic_sidebar') 
							|| !dynamic_sidebar('Second_sidebar') ) :?>
                        <h4>标签云</h4>
                        <p>
                            <!-- <span class="tag">HTML</span>
                            <span class="tag">CSS</span>
                            <span class="tag">JavaScript</span>
                            <span class="tag">jQuery</span>
                            <span class="tag">Bootstrap</span> -->
                            <?php wp_tag_cloud('smallest=8&largest=22');?>
                        </p>
                        <?php endif;?>
                    </div>
                </div>
</div>