<?php 
include('conn.php');
if(isset($_GET['id'])){
	$id=mysqli_real_escape_string($conn,$_GET['id']);
	$sqls="SELECT message FROM messages WHERE userid='$id'";
$querys=mysqli_query($conn,$sqls);
$result=mysqli_fetch_all($querys,MYSQLI_ASSOC);
}


$sqlz="SELECT id,clientName,title,clientNumber FROM 2bconcept";
$queryz=mysqli_query($conn,$sqlz);
$resultz=mysqli_fetch_all($queryz,MYSQLI_ASSOC);

if(isset($_POST['del'])){
	$delprof=$_POST['delinp'];
	if(empty($_POST['delinp'])){
		echo "<script>alert('Insert a name');</script>";
	}
$delsql="DELETE FROM 2bconcept WHERE clientName='$delprof'";
if(mysqli_query($conn,$delsql)){
	header('Location:index.php');
}
}




?>

<!DOCTYPE html>
<html lang='en'>
<head>
<title>Copy Print</title>
<meta charset='utf-8'>
<meta name='viewport'content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='stylesheet.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
	position:relative;
}

table td{
font-family:trebuchet ms;
font-size:18px;
}
#inp{
	width:30%;
	height:40px;
	outline:none;
	border-radius:2px 2px ;
	box-shadow:0px 0px 2px 2px rgba(0,0,0,0.3);
	border:none;
	transition:0.5s;
}
#inp:hover{
	box-shadow:0px 0px 2px 2px rgba(133,134,566,366);
}
#btn{
	color:white;
	background:rgba(133,134,566,366);
	height:40px;
	width:100px;
	border:none;
	font-family:trebuchet ms;
	cursor:pointer;
	margin-left:12px;
	box-shadow:0px 0px 1px 1px rgba(0,0,0,0.3);
	border-radius:5px 5px;
	transition:0.5s;
}
#btn:hover{
	background:#ff3670;
}
.boxchat{
	min-width:20%;
	min-height:40px;
	display:flex;
	align-items:center;
	justify-content:center;
	background:rgba(133,134,566,366);
	margin:5px 10px;
border-radius:5px 5px;
box-shadow:0px 0px 1px 1px rgba(0,0,0,0.3);
color:white;
font-family:trebuchet ms;
text-align:center;
}

.profbox{
	min-width:20%;
	min-height:40px;
	display:flex;
	align-items:center;
	justify-content:center;
	margin:5px 10px;

font-family:trebuchet ms;
text-align:center;
}
#delbox{
	min-width:20%;
	min-height:40px;
	display:flex;
	align-items:center;
	justify-content:center;
	margin:5px 10px;
font-family:trebuchet ms;
text-align:center;
}
@media screen and (max-width:900px){
	#inp{
		width:70%;
	}
}
</style>
</head>
<body>
<div class='searchPageHeaders'>
<h2 style='position:absolute;top:-12px;'>Copy<span>Print</span></h2>
<a href='index.php'><button>Home</button></a>
</div>

<div class='contmessage'>
<h2 style='font-family:trebuchet ms; text-align:center;'>COMMENTS</h2>
<?php foreach($result as $res){?>
<div class='boxchat'>
<?php echo $res['message']; ?>
</div>
<?php }?>
</div>


<div class='contmessage'>
<h2 style='font-family:trebuchet ms;text-align:center;'>ALL PROFILES</h2>
<?php foreach($resultz as $resz){?>
<div class='profbox'>
<table style='border:1px solid black;'>
<tr>
<td><u>clientName</u></td>
<td style='background:#d9d9d9;'><u>clientNumber</u></td>
<td><u>Title Of Product</u></td>
<td style='background:#d9d9d9;'><u>Message</u></td>
</tr>
<tr>
<td><?php echo $resz['clientName'];?></td>
<td style='background:#d9d9d9;'><?php echo $resz['clientNumber'];?></td>
<td><?php echo $resz['title'];?></td>
<td><a href="comment.php?id=<?php echo $resz['id'];?>"><button style='cursor:pointer;'>View Comments</button></a></td>
</tr>
</table>
</div>
<?php }?>
</div>
<h2 style='font-family:trebuchet ms; text-align:center;'>DELETE PROFILE</h2>
<form action='' method='POST' autocomplete='off' id='delbox'>
<input type='text' placeholder="Insert Name" id='inp' name='delinp'>
<button name='del' id='btn'>Delete</button>
</form>
</body>
</html>


























