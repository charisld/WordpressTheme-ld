<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIDAN的博客-分享我的生活</title>
    <?php wp_head();?> 
</head>
   
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark navbar-expand-sm fixed-top">
            <a href="<?php echo get_option('home'); ?>" class="navbar-brand ld-logo-margin">LIDAN</a>
            <ul class="navbar-nav ld-ul-margin">
                <li class="nav-item ld-li-margin ">
                    <a href="<?php echo get_option('home');?>" class="nav-link">首页</a>
                </li>
                <li class="nav-item ld-li-margin">
                    <a href="ld" class="nav-link">关于我</a>
                </li>
                <li class="nav-item ld-li-margin">
                    <a href="https://github.com/charisld?tab=repositories" class="nav-link">GitHub</a>
                </li>
                <li class="nav-item ld-li-margin">
                    <a href="message" class="nav-link">留言</a>
                </li>
                <li class="nav-item ld-li-margin">
                    <a href="#" class="nav-link">分享</a>
                </li>
            </ul>
        </nav>  
    </header>