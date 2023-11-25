<?php
$conn=mysqli_connect("localhost","root","","travel");
if(mysqli_connect_errno()){
    die("Connection Unsucessful");
}
$o_id=$_POST['o_id'];
$sql=mysqli_query($conn,"DELETE FROM orders WHERE o_id='$o_id'");
if($sql){
    $myarray['message']='sucessful';
}else{
    $myarray['message']='failed';
}
echo json_encode($myarray);
?>