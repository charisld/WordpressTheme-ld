<?php
    // function ld_theme_scripts(){
    //     $dir=get_template_directory_uri();
    //     if(!is_admin()){
    //         wp_enqueue_style('bootstrap',$dir.'/css/bootstrap.min.css',array(),'4.1.1');
    //         wp_enqueue_style('style',$dir.'/css/style.css',array(),'1.0');
    //         wp_enqueue_script('jquery',$dir.'/js/jquery-3.3.1.slim.min.js',array(),'3.3.1');
    //         wp_enqueue_script('bootstrap',$dir.'/js/bootstrap.min.js',array(),'4.1.1');
    //     }
    // }
    // add_action('wp_enqueue_scripts', 'ld_theme_scripts');



    add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), NULL, filemtime( get_stylesheet_directory() . '/style.css' ) );
}


    
        //移除顶部多余信息 
        remove_action('wp_head', 'index_rel_link');//当前文章的索引 
        remove_action('wp_head', 'feed_links_extra', 3);// 额外的feed,例如category, tag页 
        remove_action('wp_head', 'start_post_rel_link', 10, 0);// 开始篇 
        remove_action('wp_head', 'parent_post_rel_link', 10, 0);// 父篇 
        remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // 上、下篇. 
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );//rel=pre 
        remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );//rel=shortlink 
        remove_action('wp_head', 'rel_canonical' ); 
        wp_deregister_script('l10n'); 
        remove_action('wp_head','rsd_link');//移除head中的rel="EditURI" 
        remove_action('wp_head','wlwmanifest_link');//移除head中的rel="wlwmanifest" 
        remove_action('wp_head','rsd_link');//rsd_link移除XML-RPC 
        remove_filter('the_content', 'wptexturize');//禁用半角符号自动转换为全角
        remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style')); 
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content', 'wptexturize'); 
        remove_filter('comment_text', 'wptexturize');
        
        function add_scripts(){
            $dir=get_template_directory_uri();
            if(!is_admin()){
            wp_deregister_script( 'jquery' );
            //注意版本号和参数
            wp_enqueue_style('bootstrap',$dir.'/css/bootstrap.min.css',array(),4.1,false);
            wp_enqueue_style('style',$dir.'/style.css',array());
            

            // wp_register_script( 'jquery', get_bloginfo( 'template_directory' ) . '/js/jquery-3.3.1.slim.min.js' );
            // wp_enqueue_script( 'jquery' );
            wp_enqueue_script('jquery',$dir.'/js/jquery-3.3.1.slim.min.js',array(),3.3,false);
            wp_enqueue_script('bootstrap',$dir.'/js/bootstrap.min.js',array(),4.1,false);
            wp_enqueue_script('main',$dir.'/js/main.js',array());
            }
        }
        add_action('wp_enqueue_scripts','add_scripts');
    

        /** widgets */
    if( function_exists('register_sidebar') ) {
        register_sidebar(array(
            'name' => 'First_sidebar',
            'id'  => 'sidebar-1',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));
        register_sidebar(array(
            'name' => 'Second_sidebar',
            'id'  => 'sidebar-2',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));
       
    }
    //边栏彩色标签
function colorCloud($text) {
	$text = preg_replace_callback('|<a (.+?)>|i','colorCloudCallback', $text);
	return $text;
}
function colorCloudCallback($matches) {
	$text = $matches[1];
	$color = dechex(rand(0,16777215));
	$pattern = '/style=(\'|\”)(.*)(\'|\”)/i';
	$text = preg_replace($pattern, "style=\"color:#{$color};$2;\"", $text);
	return "<a $text>";
}
add_filter('wp_tag_cloud', 'colorCloud', 1);

?>


