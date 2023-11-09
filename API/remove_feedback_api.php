<?php
$conn=mysqli_connect("localhost","root","","travel");
if(mysqli_connect_errno()){
    die("Connection Unsucessful");
}
$id=$_POST['id'];
$sql=mysqli_query($conn,"DELETE FROM feedback WHERE f_id='$id'");
if($sql){
    $myarray['message']="record deleted";

}else{
    $myarray['message']='unsucessful';
}
echo json_encode($myarray);
?>