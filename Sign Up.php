<?php
function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}
if (empty($_POST)===false){
    $errors=array();
    $name=$_POST['name'];
    $username=$_POST['username'];
    $country=$_POST['country'];
    $password=$_POST['password'];

    if(empty($name)===true||empty($username)===true||empty($country)===true||empty($password)===true) {
        $errors[] = 'Name,Username,country of origin, and a password is required';
    }else{

    }
    debug_to_console( "Test" );
//print_r($errors);
}

?>
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
                <form action="" method="post">
                    <label for="Full Name" class="control-label">Full Name and Desired Username:</label>
                    <div class="row">
                        <div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="name" placeholder="Full Name" />
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="Username" placeholder="Username" />
                            </div>
                            <label for="country" class="control-label padding-top-10">Country of Origin</label>
                            <div class="row padding-top-10">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="country" placeholder="Country"/>
                                </div>
                            </div>
                            <label for="password" class="control-label padding-top-10">Password</label>
                            <div class="row padding-top-10">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="password" placeholder="Enter Password"/>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="password" placeholder="Re-Enter Password"/>
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
