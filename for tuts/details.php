<?php 
include('conn.php');

if(isset($_GET['id'])){
$id=mysqli_real_escape_string($conn,$_GET['id']);
$sql="SELECT * FROM example WHERE id=$id";
$result=mysqli_query($conn,$sql);
$ans=mysqli_fetch_assoc($result);

}
if(isset($_POST['del'])){
$info=mysqli_real_escape_string($conn,$_POST['info']);
$sql="DELETE FROM example WHERE id=$info";

if(mysqli_query($conn,$sql)){
header("Location:post.php");
}

}
?>
<html>
<head>


</head>
<body>
<?php if($ans): ?>
<p><?php echo $ans['name']; ?></p>
<p><?php echo $ans['email']; ?></p>
<p><?php echo $ans['time']; ?></p>
<form action="details.php" method="POST">
<input type="hidden" name="info" value="<?php echo $_GET['id']; ?>">
<button name="del">Del</button>
</form>
<?php else: ?>
<p><?php echo "No result" ?></p>
<?php endif; ?>
</body>
</html>