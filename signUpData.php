<?php
$db = new mysqli(
//Azure link
    "us-cdbr-azure-west-c.cloudapp.net",
    //Azure Username
    "b790e3d6643f83",
    //Azure Password
    "ad68dd37",
    //Azure Database name
    "1313768data"
);
// test if connection was established, and print any errors
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}else{
    echo"Success";
}

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