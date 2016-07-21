

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