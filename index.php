<?php
/*
Folder Name: www
File Name: index.php
*/
session_start();
$message="";
if (isset($_SESSION["uname"])){
	    header('Location: loggedin.php');
}else if (isset($_POST["login"])){
	include "../php/selects.php";
	$uname=GetUser($_POST["user"], $_POST["password"] , $conn);
	if ($uname==null){
		$message="Not valid credentials.";
	}else{
		$_SESSION["uname"]=$uname;
		header('Location: loggedin.php');
	}
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>User Login Screen</title>
    <link href="styles/styles.css" rel="stylesheet" />
</head>
<body>
    <div id="DivLogin" class="centered">
        <form method="post">
            <br />
            <h2>Login</h2>
            User:
            <input id="TBUser" name="user" type="text" required />
            <br />
            <br />
            Password:
            <input id="TBPassword" name="password" type="password" required/>
            <br />
            <br />
            <br />
            <input id="BtnLogin" type="submit" name="login" value="login" />
            <input id="BtnReset" type="reset" value="clear" />
            <div id="DivMessage" class="error"><?php echo $message; ?></div>
        </form>
    </div>
</body>
</html>