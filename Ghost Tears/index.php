
<!DOCTYPE html>
<html lang='en'>
<head>
<title>Ghost Tears</title>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='style.css'>
</head>
<body>

<form method='POST' id='login'>
<p>Username:</p>
<input type='text' placeholder='Username' id='ulogin'>
<p>Password:</p>
<input type='password' placeholder='Password' id='plogin'>
<br>
<label id='loginlb'></label>
<button name='logupl' id='logins'>Login</button>
<p>Don't have an Account:<span id='sign'>Sign Up</span></p>
</form>


<form method='POST' id='signup'>
<p>Username:</p>
<input type='text' placeholder='Username' name='usign' id='usign'>
<p>Password:</p>
<input type='password' placeholder='Password' name='psign' id='psign'><br>
<label id='signlb'></label>
<button id='signbtn' name='signupl'>Sign Up</button>
<p>Have an Account:<span id='log'>Login</span></p>
</form>

<script src='jquery.js'></script>
<script src='sl.js'></script>

</body>
</html>