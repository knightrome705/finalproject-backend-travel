<?php
$conn=mysqli_connect('localhost','root','','travel');
if(mysqli_connect_errno()){
    die('Connection Unsucessful');
}
// $feedback=$_POST['feedback'];
// $sql=mysqli_query($conn,"INSERT INTO query(feedback) VALUES('$feedback')");
// if($sql){
//     $myarray['message']='sucessful';
// }else{
//     $myarray['message']='failed';
// }
// echo json_encode($myarray);
// ?>