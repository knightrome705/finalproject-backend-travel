<?php

$conn=mysqli_connect("localhost","root","","travel");
if(mysqli_connect_errno()){
    die("Connection Unsucessful");
}
$p_id=$_POST['p_id'];
$user_id=$_POST['user_id'];
$date=$_POST['date'];
$sql=mysqli_query($conn,"INSERT INTO orders(p_id,user_id,date) VALUES('$p_id','$user_id','$date')");
if($sql){
    $myarray['message']='inserted sucessfully';
}else{
    $myarray['message']='error';
}
echo json_encode($myarray);













?>