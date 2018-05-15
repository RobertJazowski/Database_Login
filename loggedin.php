<?php
/*
Folder Name: www
File Name: loggedin.php
*/
session_start();

if(isset($_GET["destroy"])){
	session_unset();
	session_destroy();
}
if (!isset($_SESSION["uname"])){
	    header('Location: index.php');
}else{
	$uname=$_SESSION["uname"];
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>User Login Screen</title>
    <link href="styles/styles.css" rel="stylesheet" />
</head>
<body>
    <div id="DivContainer">
        <form>
            <h2>You are Logged In</h2>
            <p>
                As user: <?php echo $uname; ?>
            </p>
            <br />
            <input type="submit" name="destroy" value="destroy session" />
        </form>
    </div>
</body>
</html>