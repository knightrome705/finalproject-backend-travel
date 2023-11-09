<?php
include "connection.php";
$id=$_GET['id'];
$sql=mysqli_query($conn,"DELETE FROM packages WHERE p_id='$id'");

    if($sql)
    {
        echo '<script> alert(" Package Removed Sucessfully");window.location.href="view_packages.php";</script>';
    }
    else{
        echo '<script> alert("something went wrong");</script>';

    }

?>