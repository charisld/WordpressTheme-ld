<?php 
/*
    Template Name:Message Page
*/
?>

<?php global $wpdb;?>
<?php get_header();?>

<div class="ld-wrapper container-fluid">
        <div class="row">
            <div class="col-9">
                <div class="container">
                    <div class="message">
                        <h3 class="text-center message-title">欢迎留言吐槽(*^▽^*)</h3>
                        <hr>
                        <div class="messages-floor">
                            <?php
                                $a = $wpdb->get_results("SELECT comment_post_ID,comment_author, comment_date ,comment_content FROM $wpdb->comments");
                                $i=0;
                                foreach ($a as $b) {
                                    $i++;
                                    ?>
                                    <div class="floor">
                                        <h5><?php echo $i;?>L</h5>
                                        <div>
                                            <div class="username"><?php echo $b->comment_author;?></div>
                                            <p><?php echo $b->comment_content;?></p>
                                            <div  class="floor-time">
                                                <span><?php echo $b->comment_date;?></span>
                                            </div>
                                        </div>    
                                    </div>
                            <?php } ?>
                        </div>
                        <hr>
                    </div>
                    <!-- <form method="post" action="http://localhost/wordpress/message/message_handle/" class="text-light message-form">  -->
                        <!-- <form id="commentform" name="commentform" action="/wp-comments-post.php" method="post" class="text-light message-form"> -->
                        <form class="text-light message-form" method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
                        <div>
                            <label for="name">用户昵称:</label>
                            <input type="text" name="c_name" id="c_name" class="message-text"/>
                        </div>
                          
                        <div >
                            <label for="email">电子邮件:</label>
                            <input type="text" name="email" id="email" class="message-text"/>
                        </div>
                           
                        <div >
                            <label for="message ">评论内容:</label>
                            <textarea id="content" class="message-area" name="content" tabindex="4" rows="5" cols="40"></textarea>
                        </div>   
                        <input type="hidden" value="send" name="new_comment" />
                        <input type="submit" value="提交" class="message-btn" >   
                    </form>
                    
                </div>
            </div>
            <?php get_sidebar();?>
        </div>
</div>

<?php get_footer();?>

<?php 

if( isset($_POST['new_comment']) && $_POST['new_comment'] == 'send') {
    $name=$_POST['c_name'];
    $email=$_POST['email'];
    $content=$_POST['content'];
    $data=date('Y-m-d H:i:s');

    $newcom = array(
        'comment_author' => $name, 
        'comment_author_email' => $email,
        'comment_content' => $content,
        'comment_date'=>$data,
        'comment_status' => 'publish'
    );

    // 将文章插入数据库
    $comment= wp_insert_comment( $newcom );
    if($comment!=0){
        echo "<script>alert('评论发表成功');window.location.href='message';</script>";
    }
}

?>


