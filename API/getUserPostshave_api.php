<?php
$conn=mysqli_connect('localhost','root','','travel');
if(mysqli_connect_errno()){
    die('Connection Unsucessful');
}
$id=$_POST['id'];
$sql=mysqli_query($conn,"SELECT first_name,email FROM users WHERE ");
$row=mysqli_fetch_assoc($sql);
if($sql){
    $myarray['data']=$row;
}else{
    $myarray['message']='error';
}
echo json_encode($myarray);