
<?php/*ending session if one has been active*/ session_destroy()?>
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
<?php/*including navbar for avg users*/  include 'navbar.php';?>

<div class="container">
    <h1>Welcome to BigBugFinder</h1>
</div>

<?php
//starting session
session_start();

//including php file that connects to database
include('db_connect.php');

//sql queries that get stored as variables to be used in the table below
$sql = "SELECT bugs.bugTitle, bugs.datePosted,developers.username FROM bugs,developers WHERE developers.Dev_ID=bugs.Dev_ID ORDER BY bugs.datePosted DESC LIMIT 5";
$sqldb = mysqli_query($db, $sql) or die('Invalid query');

//this is the table that organizes info of the last five bugs most recently added
echo "<table>";
echo "<tr><th>Recent Bugs</th><th>Date Posted</th><th>Developer</th></tr>";
//print values to screen
while ($row = mysqli_fetch_array($sqldb, MYSQLI_ASSOC)) {

    //the two variables below create get variables to be used on other pages
    $bug_title=$row['bugTitle'];
    $username=$row['username'];
    echo "<tr><td>";

    //sends the bug title to the page which displays more of the bugs info
    echo '<a href="signUpData.php?bug_title='.$bug_title.'">'.$bug_title.'</a>';
    echo "</td><td>";

    echo $row['datePosted'];
    echo "</td><td>";

    //sends the username to the page which displays more of the dev's info
    echo '<a href="devpageforplebs.php?username='.$username.'">'.$username.'</a>';
    echo "</td></tr>";
}
echo "</table>";


?>
</body>
</html>
