
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
            <li><a href="signUpData.php.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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

<br><br><br>

<form action='' method="POST">
    Unique Username:<br>
    <input type="text" name="name">
    <br>
    Surname:<br>
    <input type="text" name="username">
    <br>
    Country:<br>
    <input type="text" name="country">
    <br>
    Password:<br>
    <input type="password" name="password">
    <br>
    <br>
    <input type="submit" name="submit">
</form>

<?php
//Azure link
$dbserver="us-cdbr-azure-west-c.cloudapp.net";
//Azure Username
$dbusername="b790e3d6643f83";
//Azure Password
$dbpassword="ad68dd37";
//Azure Database name
$dbname="1313768data";

$conn = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if ($name == "" OR $password == "") {
        echo "Password or Username is blank. Please enter.";
    } else {
        $sql = "INSERT INTO developers(developers.name, developers.username, developers.country, developers.password)
VALUES('$name','$username','$country','$password')";

        if (mysqli_query($conn, $sql)) {
            echo "Records added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>

<ul>
    <li><a href="http://bigbugfinder.azurewebsites.net/Home.php">Cancel</a></li>
</ul>
<br><br><br><br><br><br><br><br>
</body>
</html>


