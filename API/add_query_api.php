<?php
$conn=mysqli_connect('localhost','root','','travel');
if(mysqli_connect_errno()){
    die('Connection Unsucessful');
}
$query=$_POST['query'];
$user_id=$_POST['user_id'];
$date=$_POST['date'];
$sql=mysqli_query($conn,"INSERT INTO quiries(user_id,quires,initial_date) VALUES('$user_id','$query','$date')");
if($sql){
    $myarray['message']='sucessful';
}else{
    $myarray['message']='failed';
}
echo json_encode($myarray);
?>