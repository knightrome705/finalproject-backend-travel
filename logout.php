<?php
session_start();
unset($_SESSION['type']);
echo'<script>alert("Are you sure....");window.location.href="login.php";</script>';
?>