
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

<br><br><br>

<form action='' method="POST">
    Full Name:<br>
    <input type="text" name="name">
    <br>
    Username:<br>
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
//includes database connection file
include('db_connect.php');

//starts session
session_start();

//sends data to database to be inserted into database
if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $country = mysqli_real_escape_string($db, $_POST['country']);
    $password = mysqli_real_escape_string($db, $_POST['password']);


        $query = "SELECT * FROM developers WHERE username='".$username."'";
        $result = $db->query($query);
    if(isset($result)){
        $rows = $result->fetch_array();


     if (count($rows)> 0) {
        echo "Username already taken, please choose another";
        die();
        }
    }
    if ($name == "" OR $password == "") {
        echo "Please fill all fields.";
    } else {
        $sqlinsert = "INSERT INTO developers(developers.name, developers.username, developers.country, developers.password)
VALUES('$name','$username','$country','$password')";

        if (mysqli_query($db, $sqlinsert)) {
            echo "Registered";
        } else {
            echo "Error: " . $sqlinsert . "<br>" . $db->error;
        }
    }
}
$db->close();
?>

</body>
</html>


