<?php 
include('header.php');
include('conn.php');
include('loginscript.php');
?>
<form method='POST' action=''>
<input type='text' placeholder='Username' name='unamelogin' value='<?php echo htmlspecialchars($uname);?>'> 
<label><?php echo $errz['unamelogin']; ?></label> 
<br>
<input type='password' placeholder='Password' name='pwdlogin'>
<label><?php echo $errz['passlogin']; ?></label>
<br>
<button name='submit'>Login</button>
</form>
<?php
include('footer.php');
?>