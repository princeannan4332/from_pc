<?php
include('conn.php');

if(isset($_GET['id'])){
	
$id=mysqli_real_escape_string($conn,$_GET['id']);
	
$sql="SELECT * FROM lancer WHERE id=$id";

$result=mysqli_query($conn,$sql);

$ans=mysqli_fetch_assoc($result);


mysqli_free_result($result);
mysqli_close($conn);	
}



?>
<!DOCTYPE html>
<style>
.data{
	min-width:200px;
	max-width:400px;
	background:blue;
	text-align:center;
	font-family:trebuchet ms;
min-height:170px;
max-height:300px;
display:table;
color:white;
padding:10px;
box-shadow:4px 0px 4px 0px rgba(0,0,0,0.3);
margin:0px auto;
margin-top:50px;
border-radius:5px 5px;
}

</style>
<html>
<?php include('header.php') ?>

<div class="data">
<?php if($ans): ?>
<p>Name:<?php echo $ans['name']; ?><p>
<p>Email:<?php echo $ans['email']; ?><p>
<p>Age:<?php echo $ans['age']; ?><p>
<p>Contact:<?php echo "0".$ans['contact']; ?><p>
<p>Job:<?php echo $ans['job']; ?><p>
<p>Created:<?php echo $ans['date']; ?><p>
<?php else: ?>
<p>No record found</p>
<?php endif; ?>
</div>



<?php include('footer.php') ?>
</html>