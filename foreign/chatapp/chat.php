<?php
include('messageconn.php');

$sql="SELECT message FROM message";
$result=mysqli_query($conn,$sql);
$msgs=mysqli_fetch_all($result,MYSQL_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>VimChat</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
@media screen and (max-width:900px){
.content{
width:95%;
height:82%;
overflow-y:scroll;
position:fixed;
background:url('chat.jpg') fixed center;
background-size:cover;
}
.messager{
	border-radius:32px; 32px;
min-width:100px;
max-width:180px;
min-height:0px;
max-height:1000px;
float:none;
margin:10px 25px;
display:table;
background:blue;
padding-left:10px;
padding-right:10px;
}
.messager p{
color:white;
font-family:trebuchet ms;
text-align:center;
}
}
</style>
</head>
<body>
<?php include('header.php') ?>
<div class="content">

<?php foreach($msgs as $msg){ ?>
<div class="messager" id="messager">
<p id="txt"><?php echo $msg['message']; ?></p>

</div>
<?php } ?>
</div>
<?php include('messanger.php')?>

<script>
var mess=document.getElementById("messager");
var txt=document.getElementById("txt");
function dark(){
	mess.style.background="black";
		txt.style.color="white";
}
function light(){
	mess.style.background="white";
	txt.style.color="black";
}
</script>
</body>
</html>
