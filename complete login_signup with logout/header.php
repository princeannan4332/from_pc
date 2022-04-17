<?php
include('conn.php');
require_once('functions.php');
session_start();
?>
<!doctype html>
<head>
<title>Home Page</title>
<style>
body{
	background:black;
	color:white;
}
.navbar{
	width:100%;
	height:50px;
	background:white;
}
.navbar a{
	float:left;
	padding:12px;
	color:blue;
}
</style>
</head>
<body>
<div class='navbar'>
<a href='index.php'>Home</a>
<a href='#'>Games</a>
<?php 
if($_SESSION['uname']){
echo "<a href='#'>Profile</a>";
echo "<a href='logoutscript.php'>Logout</a>";
}else{
echo "<a href='signup.php'>Sign up</a>";
echo "<a href='login.php'>Login</a>";
}
?>
</div>

