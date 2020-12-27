<?php
    session_start();
    session_destroy();
    echo "<script>alert('You are logged out')</script>";
    header("location:index.php");
?>