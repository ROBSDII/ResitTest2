

<?php

//Azure link
    $dbserver="us-cdbr-azure-west-c.cloudapp.net";
    //Azure Username
    $dbusername="b790e3d6643f83";
    //Azure Password
    $dbpassword="ad68dd37";
    //Azure Database name
    $dbname="1313768data";
$db = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);
// test if connection was established, and print any errors
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}else{
    echo"PLease work";
}
if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($db,$_POST['name']);
    $country=mysqli_real_escape_string($db,$_POST['country']);
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $password=mysqli_real_escape_string($db,$_POST['password']);

    if($username=="" OR $name=="" OR $country=="" OR $password==""){
        echo "<script>alert('Please fill username')</script>";
        //exit();
    }
}
?>