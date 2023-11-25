<?php
$conn=mysqli_connect('localhost','root','','travel');
if(mysqli_connect_errno()){
    die('Connection Unsucessful');
}

$sql=mysqli_query($conn,"SELECT users.first_name,users.email,users.photo,memories.post_id,memories.memories,memories.title,memories.description FROM users INNER JOIN memories ON users.user_id=memories.user_id");
$myarray=array();
while($data=mysqli_fetch_assoc($sql)){
    $myarray['data'][]=$data;
}
if(empty($myarray['data'])){
    $myarray['message']='No record found';
}
echo json_encode($myarray);
?>