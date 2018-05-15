<?php
/*
Folder Name: php
File Name: selects.php
*/
include "DBConnect.php";

function GetUser($login, $password, $conn){
	$uname=null;
	$sql = "SELECT * FROM fp_users WHERE login='".$login."' AND pword='".$password."'";
	$result = $conn -> query($sql);
	if ($result -> num_rows > 0){
		$row = $result -> fetch_assoc();
		$uname = $row["login"];	
	}
	return $uname;	
}

?>