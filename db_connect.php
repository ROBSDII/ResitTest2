

<?php

//Azure link
   $db_host="us-cdbr-azure-west-c.cloudapp.net";
    //Azure Username
    $db_username="b790e3d6643f83";
    //Azure Password
    $db_password="ad68dd37";
    //Azure Database name
    $db_name="1313768data";
$db =mysqli_connect($db_host,$db_username,$db_password,$db_name);
// test if connection was established, and print any errors
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}else{
    echo"Success";
}
?>