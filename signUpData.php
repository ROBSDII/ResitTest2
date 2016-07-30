
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
            <li><a href="signUpData.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
<div class="container padding-top-40">
    <div class="panel panel-default col-md-5">
        <div class="panel-heading">
            Registration
        </div>
        <div class="panel-body">
            <form action="" method="POST" >
                <label for="Full Name" class="control-label">Full Name and Desired Username:</label>
                <div class="row">
                    <div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="name"  placeholder="Full Name" />
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="username"  placeholder="Username" />
                        </div>
                        <label for="country" class="control-label padding-top-10">Country of Origin</label>
                        <div class="row padding-top-10">
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="country"  placeholder="Country"/>
                            </div>
                        </div>
                        <label for="password" class="control-label padding-top-10">Password</label>
                        <div class="row padding-top-10">
                            <div class="col-md-5">
                                <input type="password" class="form-control" name="password"  placeholder="Enter Password"/>
                            </div>
                        </div>
                        <input type="submit" value="submit"/>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

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
}else{
    echo"PLease work";
}
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
