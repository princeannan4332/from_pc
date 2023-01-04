<?php
include('conn.php');
session_start();
if(isset($_SESSION['uname'])){

}else{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<title>Ghost Tears</title>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='style.css'>
<style>
@media screen and (max-width:900px){
	body{
		height:155vh;
		flex-direction:column;
	}
}
</style>
</head>
<body>

<div class='shelf1'>
<input type='text' placeholder='Search A Friend' id='search' autocomplete='off' style='height:60px;'>
<div class='searchFriend'>

</div>
</div>
<div class='not'>

</div>
<div class='shelf2'>
<h2>Friends</h2>

<div class='Friends'>

</div>
</div>

<script src='jquery.js'></script>
<script src='frirendZone.js'></script>

<script>
setInterval(function(){
$('.not').load('notification.php',{},function(res){
	$('#yt').click(function(){
		$.post('shownoty.php',{},function(resp){
			alert(resp);
		});
	});
});
},1000);


</script>


</body>
</html>