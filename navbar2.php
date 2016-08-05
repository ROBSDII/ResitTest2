<?php//This navbar ensures that logged in users stay logged in and can see the pages a logged in user should be seeing?>
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
            <a class="navbar-brand" href="Welcome.php">BigBugFinder</a>
        </div>
        <ul class="nav navbar-nav navbar-center">
            <li class="active"><a href="Welcome.php">Profile</a></li>
            <li><a href="devsearch2.php">Search</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="Home.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
        </ul>
    </div>

</nav>
</body>
</html>


