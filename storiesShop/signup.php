<?php
include('conn.php');
include('signupscript.php');
?>

<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='stylesheet.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>CrazyPoems</title>
</head>
<body>
<div class='modal'>
<div class='signupwall'>
<div class='signheader'>
<h2>COG</h2>
</div>
<div class='signpaper'>

</div>
</div>


<div class='signupform'>
<h2>Join Us</h2>
<form class='forms' autocomplete='off' method='POST'>
<label>Full Name:</label>
<br>
<input type='text' placeholder='Full Name' name='fname' required value='<?php echo htmlspecialchars($fname); ?>'>
<br>
<label id='serror'><?php echo $err['fname']; ?></label>
<br>
<label>User Name:</label>
<br>
<input type='text' placeholder='Username' name='uname' required value='<?php echo htmlspecialchars($uname); ?>'>
<br>
<label id='serror'><?php echo $err['uname']; ?></label>
<br>
<label>Email:</label>
<br>
<input type='text' placeholder='Email' name='email' required value='<?php echo htmlspecialchars($email); ?>'>
<br>
<label id='serror'><?php echo $err['email']; ?></label>
<br>
<label>Password:</label>
<br>
<input type='password' placeholder='Password' name='pwd' required>
<label id='show' onclick='shows()'>Show</label>

<br>
<label>Confirm Password:</label>
<br>
<input type='password' placeholder='Password'  id='pwd' name='cpwd' required>
<br>
<label id='serror'><?php echo $err['pwd']; ?></label>

<br>
<br>
<button id='signup' name='submit'>Sign Up Now</button>
<br>
<p>Already have an Account:</p><label><a href='login.php'style='color:orange;'>Login</a></label>
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