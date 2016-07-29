
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
                <form action="" method="POST" name="developers">
                    <label for="Full Name" class="control-label">Full Name and Desired Username:</label>
                    <div class="row">
                        <div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="name" value="" placeholder="Full Name" />
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="username" value="" placeholder="Username" />
                            </div>
                            <label for="country" class="control-label padding-top-10">Country of Origin</label>
                            <div class="row padding-top-10">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="country" value="" placeholder="Country"/>
                                </div>
                            </div>
                            <label for="password" class="control-label padding-top-10">Password</label>
                            <div class="row padding-top-10">
                                <div class="col-md-5">
                                    <input type="password" class="form-control" id="password" value="" placeholder="Enter Password"/>
                                </div>
                            </div>
                                <input type="submit" value="Submit"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include('db_connect.php');
echo "Please fill ";

?>