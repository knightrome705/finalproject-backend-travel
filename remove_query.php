<?php
include "connection.php";
$id=$_GET['id'];
$sql=mysqli_query($conn,"DELETE FROM quiries WHERE q_id='$id'");

    if($sql)
    {
        echo '<script> alert("No comments");window.location.href="quires.php";</script>';
    }
    else{
        echo '<script> alert("something went wrong");</script>';

    }

?>