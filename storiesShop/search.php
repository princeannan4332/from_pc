<?php
include('header.php');

include('homewall.php');



?>
<head>
<style>
.searchShelfs{
	width:100%;
	height:250px;
	margin-top:20px;
	display:flex;
	align-items:center;
	justify-content:center;
	flex-wrap:wrap;
}
.Slidercontainerx{
	width:200px;
	height:95%;
	border:1px solid orange;
background:white;
	margin:12px 12px;
}
.imageDisplay{
width:100%;
height:50%;
}
.imageDisplay img{
	width:100%;
	height:100%;
}
.cardsoptions{
width:100%;
height:50%;
display:flex;
align-items:center;
justify-content:center;
flex-flow:row;
}
.cardText{
	width:65%;
	height:100%;
	display:flex;
align-items:center;
justify-content:center;
flex-flow:column;
text-align:center;
}
.cardbutton{
	width:35%;
	height:100%;
	display:flex;
align-items:center;
justify-content:center;

}
#view{
width:90%;
color:white;
background:-webkit-linear-gradient(#ff3670,purple);
border-radius:5px 5px;
border:none;
box-shadow:2.4px 0px 2.4px 0px rgba(0,0,0,0.4);
cursor:pointer;
outline:none;
}
</style>
</head>
<h2>Search Result</h2>
<div class='searchShelfs'>
<?php if(isset($_GET['keys'])){
	$keys=$_GET['keys'];
	$ssql="SELECT * FROM postspj WHERE uname='$keys' or title='$keys'";
	$quea=mysqli_query($conn,$ssql);
$numofsearchres=mysqli_num_rows($quea);
if($numofsearchres<=0){
	echo "<p>COG Not Found</p>";
}else{
while($rexv=mysqli_fetch_array($quea)){
	
?>

<div class='Slidercontainerx'>
<div class='imageDisplay'>
<img src='uplimg/<?php echo $rexv["image"];?>'>
</div>
<div class='cardsoptions'>
<div class='cardText'>
<p><?php echo $rexv['title'];?></p>
<p style='color:grey;'>by <?php echo $rexv['uname'];?></p>
</div>
<div class='cardbutton'>
<a href='display.php?id=<?php echo $rexv['id']; ?>'><button id='view' style='width:55px;height:55px;'>View</button></a>

</div>
</div>
</div>

<?php
}
}

 }?>




</div>

<?php include('footer.php'); ?>