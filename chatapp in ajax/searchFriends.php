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
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='stylesheet.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Cham Chat</title>

</head>
<body style='background:white;'>

<div class='profheader' style='text-align:center;'>
<h2 style='font-family:jokerman;'>Cham</h2>
</div>
<div class='profilewrap'>
<div class='profile'>
<div class='searchInput'>
<input type='text' placeholder='Find Friend' id='searchInput'>
<button id='searchbtn'>Find</button>

</div>
<div class='searchResults'>








</div>

</div>


</div>



<div class='optionswrap'>

<div class='options'>

<?php 
$unames=$_SESSION['uname'];
$sqlss="SELECT * FROM dummymessage where reciever='$unames' and unread='1'";
	$ques=mysqli_query($conn,$sqlss);
	 if(mysqli_num_rows($ques)>0){


echo "<div class='iconwrap' style='background:red;'>";
echo "<a href='message.php' style='text-decoration:none;'>";
echo "<div class='icon'>";

echo "</div>";
echo "</a>";


echo "<a href='message.php' style='text-decoration:none;'>";
echo "<div class='iconalt'>";
echo "<p>Messages</p>";
echo "</div>";
echo "</a>";

echo "</div>";
	  }else{
		 
		 
	echo "<div class='iconwrap'>";
echo "<a href='message.php' style='text-decoration:none;'>";
echo "<div class='icon'>";

echo "</div>";
echo "</a>";


echo "<a href='message.php' style='text-decoration:none;'>";
echo "<div class='iconalt'>";
echo "<p>Messages</p>";
echo "</div>";
echo "</a>";

echo "</div>";	 
		 
		 
	 }?>


<div class='iconwrap'>

<a href='searchFriends.php' style='text-decoration:none;'>
<div class='icon'>

</div>
</a>

<a href='searchFriends.php' style='text-decoration:none;'>
<div class='iconalt'>
<p>Search</p>
</div>
</a>

</div>


<div class='iconwrap'>
<a href='profile.php' style='text-decoration:none;'>
<div class='icon'>


</div>
</a>
<a href='profile.php' style='text-decoration:none;'>
<div class='iconalt' >
<p>Profile</p>
</div>
</a>

</div>


<div class='iconwrap'>
<a href='logoutscript.php' style='text-decoration:none;'>
<div class='icon'>

</div>
</a>
<a href='logoutscript.php' style='text-decoration:none;'>
<div class='iconalt'>
<p>Logout</p>
</div>
</a>

</div>




</div>

</div>













<script src='jquery.js'></script>
<script>

$(document).ready(function(){

$('#searchbtn').click(function(){
	
	var searchval=$('#searchInput').val();
			if(searchval==''){
			}else{
	$('.searchResults').load('search.php',{
		key:searchval
	},function(){
		
		
		$('#addFriend').click(function(){
			var friendName=$('#friendName').val();
			var picture=$('#friendImage').val();
			$.ajax({
				url:'addFriend.php',
				method:'POST',
				data:{
				friendName:friendName,	
					picture:picture
				},
				dataType:'text',
				success:function(response){
					if(response=="Success"){
						$('#addFriend').css('background','rgba(80,200,120)');
						$('#addFriend').html('Request Successfull');
					}else{
						$('#addFriend').css('background','red');
						$('#addFriend').html(response);
					}
				
				}
				
			});
			
		});
		
		
	});
	
			}
			
	});
	
	


	$('#searchInput').keyup(function(){
			var searchval=$('#searchInput').val();
			if(searchval==''){
			}else{
	$('.searchResults').load('search.php',{
		key:searchval
	},function(){
		
		
		$('#addFriend').click(function(){
			var friendName=$('#friendName').val();
			var picture=$('#friendImage').val();
			$.ajax({
				url:'addFriend.php',
				method:'POST',
				data:{
				friendName:friendName,	
					picture:picture
				},
				dataType:'text',
				success:function(response){
					if(response=="Success"){
						$('#addFriend').css('background','rgba(80,200,120)');
						$('#addFriend').html('Request Successfull');
					}else{
						$('#addFriend').css('background','red');
						$('#addFriend').html(response);
					}
				
				}
				
			});
			
		});
		
		
	});
	
			}
			
	});
	
	
});



</script>
</body>
</html>