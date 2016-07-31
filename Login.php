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
            <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
<div id="content">
    <div id="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_1"]);?>">
          <label>Username: </label><input type="text" name="username"/><br><br/>
            <label>Password: </label><input type="password" name="password"/><br><br/>
            <input type="submit" value="Login"/><br/>
        </form>
    </div>
</div>
</body>
<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 7/21/2016
 * Time: 2:13 PM
 */
include('db_connect.php');

session_start(); // Starting Session
//echo "<p> starting session</p>";
$error=''; // Variable To Store Error Message

if (isset($_POST['username']) && isset($_POST['password'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "username or password is invalid";
        echo "<br>";
        echo "<a href='Home.php'>" . "Click here to try again" . "</a>";
    }


// Define $username and $password
    $username = $_POST['username'];
    $password = $_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);

// SQL query to fetch information of registerd users and finds user match.
    $query = "SELECT * FROM developers WHERE password='".$password."' AND username='".$username."'";
    $result = $db->query($query);
    if(isset($result)){
        $rows = $result->fetch_array();

        //  while () {
        if (count($rows)> 0) {

            $_SESSION['login_user'] = $username; // Initializing Session
            header("location: Home.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";

        }
        $result->close();
    }
    else{
        echo "no results";
    }

    // }
}


echo $error;


?>
</html>
