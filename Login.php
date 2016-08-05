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
<div id="content">
    <div id="container">
        <form method="post" action="">
          <label>Username: </label><input type="text" name="username"/><br><br/>
            <label>Password: </label><input type="password" name="password"/><br><br/>
            <input type="submit" value="Login"/><br/>
        </form>
    </div>
</div>
</body>
<?php


session_start(); // Starting Session

$error=''; // Variable To Store Error Message

if (isset($_POST['username']) && isset($_POST['password'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "username or password is invalid";
        echo "<br>";
        echo "<a href='Login.php'>" . "Click here to try again" . "</a>";
    }


// Define $username and $password
    $username = $_POST['username'];
    $password = $_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);

// SQL query to fetch information of registered users and finds user match.
    $query = "SELECT * FROM developers WHERE password='".$password."' AND username='".$username."'";
    $result = $db->query($query);
    if(isset($result)){
        $rows = $result->fetch_array();


        if (count($rows)> 0) {

            $_SESSION['login_user'] = $username; // Initializing Session
            header("location: Welcome.php"); // Redirecting To Other Page
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
