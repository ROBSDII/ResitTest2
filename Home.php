
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

<div class="container">
    <h1>My First Bootstrap Page</h1>
    <p>This part is inside a .container class.</p>
    <p>The .container class provides a responsive fixed width container.</p>
</div>

<?php
echo "<td>" . '<a href="signUpData.php?paramuser='.$sql.'">'.$sql.'</a>'."</td>";
session_start();

include('db_connect.php');

$sql = "SELECT bugs.bugTitle, bugs.datePosted FROM bugs ORDER BY bugs.datePosted DESC LIMIT 5";
$sqldb = mysqli_query($db, $sql) or die('Invalid query');
//$data='bugs.bugTitle';
$_SESSION['bugTitle']=$data;

echo "<table>";
echo "<tr><th>Recent Bugs</th><th>Date Posted</th></tr>";
//print values to screen
while ($row = mysqli_fetch_array($sqldb, MYSQLI_ASSOC)) {
    echo "<tr><td>";
    echo '<a href="signUpData.php?paramuser='.$row['bugTitle'].'">'.$row['bugTitle'].'</a>';
    echo "</td><td>";
    echo $row['datePosted'];
    echo "</td></tr>";
}
echo "</table>";
// Free the resources associated with the result set
// This is done automatically at the end of the script

?>
</body>
</html>