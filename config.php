<?php
    $servername="localhost";
    $username="root";
    $password="";
    $databasename="mysql";
    $conn=new mysqli($servername,$username,$password,$databasename);
    if($conn->connect_error)
    {
        die("Connection Failed:".$conn->connect_error);
    }
?>