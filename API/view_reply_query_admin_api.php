<?php
$conn=mysqli_connect('localhost','root','','travel');
if(mysqli_connect_errno()){
    die('Connection Unsucessful');
}
$user_id=$_POST['user_id'];
$sql=mysqli_query($conn,"SELECT q_id, quires, final_date, reply FROM quiries WHERE reply IS NOT NULL AND final_date >= CURRENT_DATE AND user_id ='$user_id'");
$myarray=array();
while($data=mysqli_fetch_assoc($sql)){
    $myarray['data'][]=$data;
}
if(empty($myarray['data'])){
    $myarray['message']='No record found';
    $myarray['data']=$data;
}
echo json_encode($myarray);
?>