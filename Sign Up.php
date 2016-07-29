
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
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
                                <input type="submit" value="Submit"/>
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
echo "Hello";
if(isset($_POST['submit'])){
   echo $name=mysqli_real_escape_string($db,$_POST['name']);
   echo $country=mysqli_real_escape_string($db,$_POST['country']);
    echo $username=mysqli_real_escape_string($db,$_POST['username']);
    echo $password=mysqli_real_escape_string($db,$_POST['password']);
    echo "Please fill username";
    if($username=="" OR $name=="" OR $country=="" OR $password==""){
        echo "Please fill username";
        //exit();
    }
}
?>
</body>

</html>
