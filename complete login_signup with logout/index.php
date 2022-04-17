<?php
include('conn.php');
include('header.php');

?>
<?php
if(isset($_SESSION['uname'])){
	echo 'Hello there '.$_SESSION['uname'];
}
?>
<h2>This is the home page</h2>

<?php
include('footer.php');

?>