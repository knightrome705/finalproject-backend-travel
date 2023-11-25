<?php
$conn=mysqli_connect('localhost','root','','travel');
if(mysqli_connect_errno()){
    die('Connection Unsucessful');
}
$id=$_POST['user_id'];
$sql=mysqli_query($conn,"SELECT orders.o_id,orders.date,packages.p_name,packages.p_image FROM orders INNER JOIN packages INNER JOIN users ON orders.p_id=packages.p_id WHERE users.user_id='$id';");
$myarray=array();
while($data=mysqli_fetch_assoc($sql)){
    $myarray['data'][]=$data;
}
if(empty($myarray['data'])){
    $myarray['message']='null';
}
echo json_encode($myarray);
?>