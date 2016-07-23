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
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="Home.php">BigBugFinder</a>
        </div>
        <ul class="nav navbar-nav navbar-center">
            <li class="active"><a href="Home.php">Home</a></li>
            <li><a href="#">Search</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="Sign Up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </ul>
    </div>

</nav>

<div class="container">
    <h1>My First Bootstrap Page</h1>
    <p>This part is inside a .container class.</p>
    <p>The .container class provides a responsive fixed width container.</p>
</div>



<?php
include('db_connect.php');
$query = mysqli_query('SELECT bugs.title, bugs.username, bugs.datePosted 
                         FROM TABLE bugs 
                     ORDER BY bugs.datePosted DESC 
                        LIMIT 5') or die('Invalid query: ' . mysqli_error());

echo "<table>";
echo "<tr><th>Recent Bugs</th><th>Developer</th><th>Date Posted</th></tr>";
//print values to screen
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr><td>";
    echo $row['title'];
    echo "</td><td>";
    echo $row['username'];
    echo "</td><td>";
    echo $row['datePosted'];
}
echo "</table>";
// Free the resources associated with the result set
// This is done automatically at the end of the script
mysqli_free_result($query);
?>
</body>
</html>