<?php
//session_start();

include('session.inc.php'); //includo  librerie

$usrname = $_POST['usrname'];
$md5password = $_POST['md5password'];

//REGEX
$USER_REGEX = "/^([a-zA-Z0-9]){3,30}$/";
$MD5_REGEX = "/^([a-zA-Z0-9]){32}$/";

if(preg_match($USER_REGEX,$usrname) && preg_match($MD5_REGEX,$md5password)){
	if(testLogin($usrname,$md5password)){
		header("Location: index.php");
	}
	else{
		header("Location: login.html?state=false1"); //returns to autentication form
		exit(); 
	} 
}
else{
	header("Location: login.html?state=false2"); //returns to autentication form
	exit(); 
}
?>
