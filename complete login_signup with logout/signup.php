<?php
include('header.php');
include('conn.php');
include('signupscript.php');

?>

<form method='POST' action=''>
<input type='text' placeholder='Full name' name='name' value='<?php echo htmlspecialchars($name);?>'>
<label><?php echo $err['name']; ?></label>
<br>
<input type='text' placeholder='Email' name='email' value='<?php echo htmlspecialchars($email);?>'>
<label><?php echo $err['email']; ?></label>
<br>
<input type='text' placeholder='Username' name='uname' value='<?php echo htmlspecialchars($uname);?>'> 
<label><?php echo $err['uname']; ?></label> 
<br>
<input type='password' placeholder='Password' name='pwd'>
<label><?php echo $err['pass']; ?></label>
<br>
<input type='password' placeholder='Confirm password' name='cmfpwd'>
<label><?php echo $err['passcmf']; ?></label>
<br>
<button name='submit'>Sign Up</button>

</form>

<?php
include('footer.php');

?>