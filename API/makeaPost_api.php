<?php
$conn=mysqli_connect('localhost','root','','travel');
if(mysqli_connect_errno()){
    die('Connection Unsucessful');
}  
$user_id=$_POST['user_id'];
$filename=$_FILES["memories"]["name"];
$tempname=$_FILES["memories"]["tmp_name"];
$folder="./images1/".$filename;
$images1=$filename;
$uploadOk=1;
$imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION));
if($imageFileType!="jpg"&& $imageFileType!="png"&& $imageFileType!="jpg"&&$imageFileType!="gif"){
        echo "Sorry image of file type jpg,jepg,pdf and gif are allowed";
        $uploadOk=0;
 }
 if($uploadOk==0){
        echo "sorry";
}else{
    move_uploaded_file($tempname,$folder);
}
$title=$_POST['title'];
$description=$_POST['description'];
$sql=mysqli_query($conn,"INSERT INTO memories(user_id,memories,title,description) VALUES('$user_id','$images1','$title','$description')");
if($sql){
    $myarray['message']='sucessful';
}else{
    $myarray['message']='failed';
}
echo json_encode($myarray);
?>