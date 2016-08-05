

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
}
