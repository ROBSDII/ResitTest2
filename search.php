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
        <option value="developers"></option>
        <option value="keywords"></option>
    </select>
</form>
<?php include('db_connect.php');


?>
</body>
</html>