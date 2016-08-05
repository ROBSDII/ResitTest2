<?php
session_start();
include('db_connect.php');


if(isset($_POST['searchinput']) && ($_POST['searchinput'] !="")){
//Filter search query based on user input

    if($_POST['filter1']=="developers"){
        $sqlquery="SELECT developers.username FROM developers WHERE username LIKE '%searchinput%'";
        while ($row=mysqli_fetch_array($db,$sqlquery)){
            $username=$row['username'];
            $username = stripslashes($username);
            echo '<a href="signUpData.php?username='.$username.'">'.$username.'</a>';
        }
    }
    }else if ($_POST['filter1']=="bugs"){
        $sqlquery="SELECT bugs.bugTitle FROM bugs WHERE bugTitle LIKE '%searchinput%'";
    while ($row=mysqli_fetch_array($db,$sqlquery)) {
        $bug_title = $row['bug_title'];
        $bug_title = stripslashes($bug_title);
        echo '<a href="signUpData.php?bug_title=' . $bug_title . '">' . $bug_title . '</a>';
    }
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
    <?php include 'navbar.php';?>
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


?>
</body>
</html>