<?php
$conn=mysqli_connect("localhost","root","","travel");
if(mysqli_connect_errno()){
    die("Connection Unsucessful");
}
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$filename=$_FILES["photo"]["name"];
$tempname=$_FILES["photo"]["tmp_name"];
$folder="./images1/".$filename;
$image=$filename;
$uploadOk=1;
$imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION));
if($imageFileType!="jpg"&& $imageFileType!="png"&& $imageFileType!="jepg"&&$imageFileType!="gif"){
    echo "Sorry image of file type jpg,jepg,pdf and gif are allowed";
    $uploadOk=0;
}
if($uploadOk==0){
    echo "sorry";
}else{
    move_uploaded_file($tempname,$folder);
}
$sql=mysqli_query($conn,"INSERT INTO users(photo,first_name,last_name,email,phone,password) VALUES('$image','$first_name','$last_name','$email','$phone','$password')");
$data=mysqli_insert_id($conn);
$sql1=mysqli_query($conn,"INSERT INTO login(login_id,email,password) VALUES('$data','$email','$password')");
if($sql1){
    $myarray['message']='inserted sucessfully';
}else{
    $myarray['message']='error';
}
echo json_encode($myarray);


?>