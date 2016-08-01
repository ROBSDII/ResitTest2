
<!DOCTYPE html>
<html>
<head>
    <title>BigBugFinder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'navbar.php';?>

echo "<td>" . '<a href="Bug_Userprofile_Display.php?paramuser='.$buguser.'">'.$buguser.'</a>'."</td>";
<?php
include('db_connect.php');

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $country = mysqli_real_escape_string($db, $_POST['country']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if ($name == "" OR $password == "") {
        echo "Password or Username is blank. Please enter.";
    } else {
        $sqlinsert = "INSERT INTO developers(developers.username, developers.name, developers.country, developers.password)
VALUES('$username','$name','$country','$password')";

        if (mysqli_query($db, $sqlinsert)) {
            echo "Records added successfully";
        } else {
            echo "Error: " . $sqlinsert . "<br>" . $db->error;
        }
    }
}
$db->close();
?>

/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 7/27/2016
 * Time: 1:34 AM
 */
?>
</body>
</html>
