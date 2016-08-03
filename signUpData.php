
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
session_start();

//echo "<td>" . '<a href="Bug_Userprofile_Display.php?paramuser='.$buguser.'">'.$buguser.'</a>'."</td>";
include('db_connect.php');

$bug_title=$_GET["bug_title"];
//echo $bug_title;
$sqlgrab = "SELECT bugs.bugTitle,bugs.bugDescription , bugs.datePosted FROM bugs WHERE bugs.bugTitle='$bug_title'";
$sqldb = mysqli_query($db, $sqlgrab) or die('Invalid query');

echo "<table>";
echo "<tr><th>Recent Bugs</th><th>Bug Description</th><th>Date Posted</th></tr>";
//print values to screen
while ($row2 = mysqli_fetch_array($sqldb, MYSQLI_ASSOC)) {
    echo "<tr><td>";
    echo $row2['bugTitle'];
    echo "</td><td>";
    echo $row2['bugDescription'];
    echo "</td><td>";
    echo $row2['datePosted'];
    echo "</td></tr>";
}
echo "</table>";
?>

</body>
</html>
