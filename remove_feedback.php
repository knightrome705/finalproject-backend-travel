<?php
include "connection.php";
$id=$_GET['id'];
$sql=mysqli_query($conn,"DELETE FROM feedback WHERE f_id='$id'");

    if($sql)
    {
        echo '<script> alert("No comments");window.location.href="feedback.php";</script>';
    }
    else{
        echo '<script> alert("something went wrong");</script>';

    }

?>