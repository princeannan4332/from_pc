<html>
<head>

</head>
<body>
<form action='' method='POST'>
<input type='text' placeholder='search' name='info'>
<button name='search'>Search</button>
</form>
<?php
include('connection.php');

if(isset($_POST['search'])){
$info=$_POST['info'];
$sql="SELECT * FROM sqldb WHERE name='$info'";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query) ){
?>

<form method='POST'>
<input type='text'  value='<?php echo $row['name']; ?>'>
<input type='text'  value='<?php echo $row['email'] ;?>'>
</form>

<?php
}
}

?>
</body>
</html>