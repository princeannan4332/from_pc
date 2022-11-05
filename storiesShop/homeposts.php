<?php 
if(isset($_GET['pages'])){
	$pages=$_GET['pages'];
	
}else{
	$pages=1;
}
$numofpagesitmes=9;
$pageStart=($pages-1)*9;
$sq="SELECT * from postspj limit $pageStart,$numofpagesitmes";
$qu=mysqli_query($conn,$sq);
$vv=mysqli_fetch_all($qu,MYSQLI_ASSOC);

?>
<head>
<style>
*{
	margin:0;
	font-family:trebuchet ms;
}
#exptxt{
text-align:center;
color:black;
margin-top:5px;
	font-size:38px;
}
.postboard{
	width:100%;
	height:200px;
	
	z-index:50;

	
}
.mainPostBoard{
width:100%;
height:200px;
	margin-top:5px;
	display:flex;
	align-items:center;
	justify-content:space-around;
	flex-wrap:wrap;

}
#ptit{
	color:black;
}
#paut{
	color:grey;
}
.postbox{
	width:30%;
	height:150px;
	box-shadow:0px 0px 1px 1px rgba(0,0,00,0.4);
	border:0.6px solid black;
	overflow:hidden;
	margin-top:20px;

}
.postwallp{
	width:40%;
	height:100%;
	overflow:hidden;
float:left;
}
.posttxt{
	width:60%;
	height:100%;
	float:left;
}
.ta{
	width:100%;
	height:50%;
	float:none;
}
.vpbtn{
	width:100%;
	height:50%;
	float:none;
	
}
.ta p{
	margin:4px 5px;
}
#vpbtn{
width:80px;
height:40px;
padding:10px;
color:white;
background:-webkit-linear-gradient(red,orange);
border:none;
float:right;
cursor:pointer;
box-shadow:1px 0px 1px 0px rgba(0,0,0,0.3);
outline:none;
float:right;
margin:18px 29px;
border-radius:3px 3px;
}




.mainPostBoard{

opacity:1;
transition:2.5s;
}

.nxtprevbtn{
	width:100%;
	height:20px;
	display:flex;
	justify-content:center;
	align-items:center;
	color:white;
	margin-top:16px;
}
#indx{
	background:orangered;
	color:white;
	border:none;
	padding:9px;
	border-radius:5px 5px;
	box-shadow:1px 0px 1px 0px rgba(0,0,0,0.3);
	margin:5px auto;
	cursor:pointer;
}
#nxt{
	background:orange;
	color:white;
	border:none;
	padding:9px;
	border-radius:5px 5px;
	box-shadow:1px 0px 1px 0px rgba(0,0,0,0.3);
	margin:5px auto;
	cursor:pointer;
}
.mm{
width:100%;
height:20px;
background:green;	
}
@media screen and (max-width:900px){

	.postbox{
		width:90%;
	}
}
</style>
</head>

<h2 id='exptxt'>Explore</h2>
<div class='postboard'>
<div class='mainPostBoard'>


<?php foreach($vv as $v){  ?>
<div class='postbox'>
<div class='postwallp'>
<img src='uplimg/<?php echo $v["image"];  ?>' style='width:100%;height:100%;'>
</div>
<div class='posttxt'>
<div class='ta'>
<p id='ptit'>Title:<?php echo $v["title"];  ?></p>
<p id='paut'>Author:<?php echo $v["uname"];  ?></p>
</div>
<div class='vpbtn'>
<a href='display.php?id=<?php echo $v["id"]; ?>'><button id='vpbtn'>View</button></a>
</div>
</div>
</div>
<?php } ?>



<div class='nxtprevbtn'>
	<?php 
$sqln="SELECT * FROM postspj";
$quen=mysqli_query($conn,$sqln);
$totalnumofrows=mysqli_num_rows($quen);
$totalnumberofpages=ceil($totalnumofrows/$numofpagesitmes);
echo $totalnumofrows;

if($pages>1){
		echo "<a href='index.php?pages=".($pages-1)."'><button id='nxt'>Prev</button></a>";
}
for($i=1;$i<$totalnumberofpages;$i++){
		echo "<a href='index.php?pages=".$i."'><button id='indx'>".$i."</button></a>";
	}
if($i>$pages){
		echo "<a href='index.php?pages=".($pages+1)."'><button id='nxt'>Next</button></a>";
}
	?>
</div> 

</div>

</div>







