<?php
$conn=mysqli_connect('localhost','root','','travel');
if(mysqli_connect_errno()){
    die('Connection Unsucessful');
}
$id=$_POST['id'];
$sql=mysqli_query($conn,"SELECT * FROM users WHERE user_id='$id'");
$row=mysqli_fetch_assoc($sql);
if($sql){
    $myarray['data']=$row;
}else{
    $myarray['message']='error';
}
echo json_encode($myarray);