<?php
include('loginscript.php');
?>

<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='stylesheet.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Cham Chat</title>
<style>
.loginpaper{
	width:100%;
	height:94%;
	background:url('log.png')center;
background-size:cover;
display:flex;
justify-content:center;
align-items:center;
}
</style>
</head>
<body>
<div class='modal'>
<div class='signupwall'>
<div class='signheader'>
<h2 style='font-family:jokerman;'>Cham</h2>
</div>
<div class='loginpaper'>

</div>
</div>


<div class='signupforms' >
<h2>Login</h2>
<form class='forms' action='' autocomplete='off' method='POST'>

<label>User Name:</label>
<br>
<input type='text' placeholder='Username' name='uname' required value='<?php echo htmlspecialchars($uname); ?>'>
<br>
<label id='serror'><?php echo $err['uname']; ?></label>
<br>
<input type='password' placeholder='Password' name='pwd' required>
<label id='show' onclick='shows()'>Show</label>
<br>
<label id='serror'><?php echo $err['pass']; ?></label>
<br><br>
<button id='signup' name='submit'>Login</button>
<br>
<p>Don't Have An Account:</p><label><a href='signup.php'style='color:orange;'>Create Account</a></label>
</form>
</div>
</div>
<script>
	var show=document.querySelector('#show');
var pwd=document.querySelector('#pwd');
function shows(){
pwd.setAttribute("type","text");
}
</script>
</body>
</html>