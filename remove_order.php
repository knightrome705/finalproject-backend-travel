<?php
include "connection.php";
$id=$_GET['id'];
$sql=mysqli_query($conn,"DELETE FROM orders WHERE o_id='$id'");

    if($sql)
    {
        echo '<script> alert("Order removed");window.location.href="orders.php";</script>';
    }
    else{
        echo '<script> alert("something went wrong");</script>';

    }

?>