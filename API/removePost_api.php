<?php
$conn=mysqli_connect("localhost","root","","travel");
if(mysqli_connect_errno()){
    die("Connection Unsucessful");
}
$post_id=$_POST['post_id'];
$user_id=$_POST['user_id'];
$sql=mysqli_query($conn,"DELETE FROM memories WHERE post_id='$post_id' AND user_id='$user_id'");
if($sql){
    $myarray['message']='sucessful';
}else{
    $myarray['message']='failed';
}
echo json_encode($myarray);
?>