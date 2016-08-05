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


<?php
//starts session
session_start();

//includes database connect file
include('db_connect.php');

//gathers username that was clicked on from previous as a GET variable
$username=$_GET['username'];

//sql query that gets dev info to display for avg users
$sqlgrab = "SELECT developers.username,developers.country , bugs.bugTitle FROM developers,bugs WHERE developers.username='$username' AND developers.Dev_ID=bugs.Dev_ID";
$sqldb = mysqli_query($db, $sqlgrab) or die('Invalid query');

//this table organizes that data and provides link to bug page contributions
echo "<table>";
echo "<tr><th>Contributions</th><th>Logged in As</th><th>Country</th></tr>";
//print values to screen
while ($row = mysqli_fetch_array($sqldb, MYSQLI_ASSOC)) {
    $bug_title=$row['bugTitle'];
    echo "<tr><td>";
    echo '<a href="signUpData.php?bug_title='.$bug_title.'">'.$bug_title.'</a>';
    echo "</td><td>";
    echo $row['username'];
    echo "</td><td>";
    echo $row['country'];
    echo "</td></tr>";
}
echo "</table>";
?>


</body>
</html>
