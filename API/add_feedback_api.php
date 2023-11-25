<?php
$conn=mysqli_connect('localhost','root','','travel');
if(mysqli_connect_errno()){
    die('Connection Unsucessful');
}
$user_id=$_POST['user_id'];
$feedback=$_POST['feedback'];
$initial_date=$_POST['initial_date'];
$sql=mysqli_query($conn,"INSERT INTO feedback(feedback,user_id,initial_date) VALUES('$feedback','$user_id','$initial_date')");
if($sql){
    $myarray['message']='sucessful';
}else{
    $myarray['message']='failed';
}
echo json_encode($myarray);
?>