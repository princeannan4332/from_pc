<?php
include('conn.php');
session_start();
if(isset($_SESSION['uname'])){

}else{
	header('location:login.php');
}

require_once('profilefuncs.php');
require_once('profiledbconn.php');
?>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='stylesheet.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>CrazyPoems</title>
</head>
<body>
<div class='profileWrapper'>
<div class='profileheader'>
<label>CoG</label>
<button id='addcog'>Add COG</button>
<a href='logoutscript.php'>Logout</a>
<a href='index.php'>Home</a>

</div>
<div class='mainprofile'>

<div class='profilebox'>

<div class='profilemenus'>
<div class='profilemenubtn'>
<button id='prf'>Profile</button>
<button id='mes'>Message</button>
<button id='com'>Comments</button>
<button id='allcog'>All COG </button>
</div>


</div>
<div class='profiledisplay'>

<!--update story-->
<div class='div6' style='display:flex;'>
<form method="POST" enctype='multipart/form-data'>
<div class='title'>
<label>Title:</label><input type='text' id='titinpz' placeholder='Story Title' name='uptitle'>
<p style='text-align:right;position:relative;right:50px;' id='titleftz'>0 of 20</p>
</div>
<div class='story'>
<p>Story:</p>
<textarea id='txtinpz' name='uptxtinp'></textarea>
<p style='text-align:right;position:relative;right:50px;' id='txtleftz'>0 of 10000</p>
</div>
<div class='imageupl'>
<p>Upload Cover Image:</p>
<input type='file' name='upimage'>
</div>
<button id='postbtns' name='upPost'>Save Changes</button>
</form>
</div>













</div>

</div>

</div>

</div>

	
	
	
	
	
	


<?php
include('footer.php');
?>