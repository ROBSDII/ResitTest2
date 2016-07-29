<?php
include('db_connect.php');

$name=$_REQUEST['name'];
$country=$_REQUEST['country'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$query=mysqli_query($db,"INSERT INTO developers(name,country,username,password) VALUES 
('$name','$country','$username','$password')") or die(mysqli_error($db));
mysqli_close($db);
header("location:Home.php?note=success");
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 7/27/2016
 * Time: 1:34 AM
 */
?>