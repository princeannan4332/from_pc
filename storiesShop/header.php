<?php
include('conn.php');
session_start();
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='stylesheet.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>CrazyPen</title>
</head>
<body>

<div class='header'>
<label style='font-family:jokerman;'>COG</label>
<div class='headerLinks'>
<a href='index.php'>Home</a>
<a href='#announce'>Announcment</a>
<a href='#'>About us</a>
<?php
if(isset($_SESSION['uname'])){
echo "<a href='profile.php'>Profile</a>";
echo "<a href='logoutscript.php'>Logout</a>";
}else{
echo "<a href='login.php'>Login</a>";
echo "<a href='signup.php'>Signup</a>";
}

?>
</div>
<button id='menubtn'>Menu<i class="fa-thin fa-bars"></i></button>
</div>


<div class='menucontent' style='position:fixed;right:0px;z-index:30;top:42px;'>
<a href='#'>Home</a>
<a href='#announce'>Announcment</a>
<a href='#'>About us</a>
<?php
if(isset($_SESSION['uname'])){
echo "<a href='profile.php'>Profile</a>";
echo "<a href='logoutscript.php'>Logout</a>";
}else{
echo "<a href='login.php'>Login</a>";
echo "<a href='signup.php'>Signup</a>";
}

?>

<button id='cancels'>Cancel</button>
</div>

















