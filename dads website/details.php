<?php 

include('conn.php');
include('messageconn.php');
if(isset($_GET['id'])){
	$id=mysqli_real_escape_string($conn,$_GET['id']);
$sql="SELECT * FROM 2bconcept WHERE id=$id";
$query=mysqli_query($conn,$sql);
$ans=mysqli_fetch_assoc($query);


$sqls="SELECT * FROM messages WHERE userid='$id'";
$querys=mysqli_query($messageconn,$sqls);
$result=mysqli_fetch_all($querys,MYSQLI_ASSOC);

}

if(isset($_POST['send'])){
	$id=mysqli_real_escape_string($conn,$_GET['id']);
$commentz=mysqli_real_escape_string($messageconn,$_POST['commentz']);
$commentsql="INSERT INTO messages(message,userid) VALUES('$commentz','$id')";
mysqli_query($messageconn,$commentsql);



$sqls="SELECT * FROM messages WHERE userid='$id'";
$querys=mysqli_query($messageconn,$sqls);
$result=mysqli_fetch_all($querys,MYSQLI_ASSOC);

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
*{
	margin:0px auto;
	padding:0px auto;
	
}
</style>
</head>
<body>
<div class='searchPageHeaders'>
<h2>Copy<span>Print</span></h2>
<a href='index.php'><button>Home</button></a>
</div>
<?php if($ans){?>
<div class='imageWrapper' style="background:url('img/<?php echo $ans['addDescription']; ?>')center;background-size:cover;background-repeat:no-repeat;">

</div>
<div class='downloadbtn'>
<a href="imgs/<?php echo $ans['attachment'];?>"><button id='downloadFile'>Download</button></a>
<a href="img/<?php echo $ans['addDescription'];?>"><button id='view'>View</button></a>
</div>
<div class='detailsTxt'>
<p id='detailsTxt'><?php echo $ans['description']; ?></p>
</div>
<div class='date'>
<p>Date Modified:<?php echo $ans['currentTime']; ?></p>
</div>
<?php } ?>

<?php foreach($result as $res){?>
<div class='detailsTxts'>
<p id='detailsTxts'><?php echo $res["message"]; ?></p>
</div>
<?php }?>

<form class='commentBox' action='' method='POST'>
<h2>Leave a comment</h2>
<textarea type='text' placeholder='Add Comment' name='commentz'></textarea>
<button name='send'>Send</button>
</form>

<script src='detailsScript.js'></script>





</body>
</html>