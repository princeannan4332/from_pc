<?php
include('connection.php');

$sql="SELECT name,number FROM tester";

$result=mysqli_query($conn,$sql);

$pizzas=mysqli_fetch_all($result,MYSQLI_ASSOC);
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
.main{
width:100%;
height:100px;	
margin-top:40px;
}
.cont{
width:20%;
height:100%;
background:grey;
float:left;
margin:0px 12px;	
}
</style>
</head>
<?php include('header.php') ?>
<div class="main">
<?php foreach($pizzas as $pizza){ ?>
<div class="cont">
<h2><?php echo $pizza['name']?></h2>
<h2><?php echo '0'.$pizza['number']?></h2>

</div>
<?php }?>
</div>

</body>
</html>