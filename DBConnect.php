<?php
/*
Name: 
Date: 
Project: Database_Login
Folder Name: php
File Name: DBConnect.php
*/

include "Credentials.php";
$conn = mysqli_connect($server,$username,$password,$db);
// Check connection
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
	//echo "Connected Successfully!!!";
}
?>