<?php 
/*
    Template Name:MessageHandle Page
*/
?>
<?php 
global $wpdb;
$_POST['name']='ld';
$_POST['email']='1073246';
$_POST['content']='nihaoaaaa';
$date=date('Y-m-d H:i:s');
print_r($_POST);
$name=$_POST['name'];
$email=$_POST['email'];
$content=$_POST['content'];
// $data=date('Y-m-d H:i:s');
$a=$wpdb->insert($wpdb->comments, array("comment_author", "comment_author_email" , "comment_content", "comment_date"), array("$name", "$email", "$content","$date"));
if($a){
    echo "发布成功";
}
else{
    echo $a;
}
echo $name;
// if(empty($a))
// {echo "<script>alert('评论发布成功！');</script>";}
?>
