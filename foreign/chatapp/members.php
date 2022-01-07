<?php 
include('connection.php');

$sql="SELECT name FROM chat";

$result=mysqli_query($conn,$sql);
$ans=mysqli_fetch_all($result,MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>VimChat Members</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
@media screen and (max-width:900px){
	.header{
		width:100%;
		height:40px;
	}
	.header h2{
		background:linear-gradient(#ff3670,purple);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
-webkit-text-stroke:1px  white;
text-align:center;
font-family:trebuchet ms;
	}
	li{
				background:linear-gradient(aquamarine,blue);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
-webkit-text-stroke:1px  white;
font-family:trebuchet ms;
font-size:23px;
	}
}

</style>
</head>
<body>
<div class="header">
<h2>VimChat|Members</h2>
</div>
<ul>
<?php foreach($ans as $an){ ?>

<li id="li"><?php echo $an['name'];?></li>

<?php } ?>
</ul>
</body>
</html>