<!DOCTYPE html>
<html>
<head>
    <title>BigBugFinder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <?php include 'navbar2.php';?>
</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input name="searchinput" type="text" size="50" maxlength="50" placeholder="Search">
    <input name ="searchbtn" type="submit">
    <select name="filter1">
        <option value="developers">developers</option>
        <option value="keywords">keywords</option>
    </select>
</form>
<?php
session_start();
include('db_connect.php');



if(isset($_POST['searchinput']) && ($_POST['searchinput'] !="")){
//Filter search query based on user input

    if($_POST['filter1']=="developers"){

        $sqlquery=mysqli_query($db,"SELECT *  FROM developers WHERE developers.username LIKE '%searchinput%'");


    }else if ($_POST['filter1']=="keywords") {

        $sqlquery2="SELECT bugs.bugTitle FROM bugs WHERE bugTitle LIKE '%searchinput%'";
    }

}
?>
</body>
</html></html>