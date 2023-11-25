<?php
$conn=mysqli_connect("localhost","root","","travel");
if(mysqli_connect_errno()){
    die("Connection Unsucessful");
}
$email=$_POST['email'];
$password=$_POST['password'];
$sql=mysqli_query($conn,"SELECT user_id FROM users WHERE email='$email' AND password='$password';");
$row=mysqli_fetch_assoc($sql);
if($sql){
    $myarray['data']=$row;
}else{
    $myarray['message']='error';
}
echo json_encode($myarray);