<?php
include('conn.php');
$sql="SELECT name,id from example";
$result=mysqli_query($conn,$sql);
$ans=mysqli_fetch_all($result,MYSQLI_ASSOC);


?>
<html>
<head>
<style>
.n{
width:100px;
height:130px;
background:yellow;
}
</style>
</head>
<body>
<?php foreach($ans as $an){ ?>
<div class="n">
<p><?php echo $an["name"]; ?></p>
<a href="details.php?id=<?php echo $an["id"]; ?>">Details</a>
</div>
<?php } ?>
</body>
</html>