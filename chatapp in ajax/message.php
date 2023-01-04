<?php 
include('conn.php');
session_start();
if(isset($_SESSION['uname'])){

	
	
}else{
	header('location:index.php');
}






?>


<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='stylesheet.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Cham Chat</title>

</head>
<body style='background:white;'>

<div class='profheader' style='text-align:center;'>
<h2 style='font-family:jokerman;'>Cham</h2>
</div>
<div class='friendsContainer'>




</div>


<div class='empty'>

</div>

<div class='optionswrap'>

<div class='options'>
<div class='iconwrap'>
<a href='message.php' style='text-decoration:none;'>
<div class='icon'>

</div>
</a>
<a href='message.php' style='text-decoration:none;'>
<div class='iconalt'>
<p>Messages</p>
</div>
</a>

</div>



<div class='iconwrap'>

<a href='searchFriends.php' style='text-decoration:none;'>
<div class='icon'>

</div>
</a>

<a href='searchFriends.php' style='text-decoration:none;'>
<div class='iconalt'>
<p>Search</p>
</div>
</a>

</div>


<div class='iconwrap'>
<a href='profile.php' style='text-decoration:none;'>
<div class='icon'>


</div>
</a>
<a href='profile.php' style='text-decoration:none;'>
<div class='iconalt' >
<p>Profile</p>
</div>
</a>

</div>


<div class='iconwrap'>
<a href='logoutscript.php' style='text-decoration:none;'>
<div class='icon'>

</div>
</a>
<a href='logoutscript.php' style='text-decoration:none;'>
<div class='iconalt'>
<p>Logout</p>
</div>
</a>

</div>




</div>

</div>













<script src='jquery.js'></script>
<script>

$(document).ready(function(){
setInterval(function(){
	$('.friendsContainer').load('fetchFriends.php');
},100);
});



</script>
</body>
</html>