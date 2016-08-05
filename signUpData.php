
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

<form action = "signUpData.php" method = "POST" enctype = "multipart/form-data">
    <input type = "file" name = "image" />
    <input type = "submit"/>

    <ul>
        <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
        <li>File size: <?php echo $_FILES['image']['size'];  ?>
        <li>File type: <?php echo $_FILES['image']['type'] ?>
    </ul>



<?php
//starts session
session_start();

//includes database connection file
include('db_connect.php');

//gathers bug title as a GET variable from previous page
$bug_title=$_GET["bug_title"];

//sql queries that gathers info about bug from database
$sqlgrab = "SELECT bugs.bugTitle,bugs.bugDescription , bugs.datePosted FROM bugs WHERE bugs.bugTitle='$bug_title'";
$sqldb = mysqli_query($db, $sqlgrab) or die('Invalid query');


echo "<table>";
echo "<tr><th>Bug Title</th><th>Bug Description</th><th>Date Posted</th></tr>";
//print values to screen
while ($row2 = mysqli_fetch_array($sqldb, MYSQLI_ASSOC)) {
    echo "<tr><td>";
    echo $row2['bugTitle'];
    echo "</td><td>";
    echo $row2['bugDescription'];
    echo "</td><td>";
    echo $row2['datePosted'];
    echo "</td></tr>";
}
echo "</table>";

//code that doesn't seem to working properly below
/*
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = addslashes($_FILES['image']['name']);
    $file_size = $_FILES['image']['size'];
    $file_tmp =addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $file_type = $_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152) {
        $errors[]='File size must be excately 2 MB';
    }

    if(empty($errors)==true) {
        move_uploaded_file($file_tmp,"images/".$file_name);
        echo "Success";
    }else{
        print_r($errors);
    }
}
$sqlinsert = "INSERT INTO uploads VALUES('',$file_name','image')";

if (mysqli_query($db, $sqlinsert)) {
   echo "Registered";
} else {
   echo "Error: " . $sqlinsert . "<br>" . $db->error;
}
*/
?>

</body>
</html>
