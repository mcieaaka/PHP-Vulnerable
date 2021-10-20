<?php
$con = mysqli_connect("localhost:3308","root","","isaa");
if($con->connect_error){
    die("Failed:".$con->connect_error);
}
?>