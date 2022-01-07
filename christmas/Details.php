<?php
include('conn.php');
$sql="SELECT * FROM newyear ORDER BY id DESC";
$result=mysqli_query($conn,$sql);
$ans=mysqli_fetch_assoc($result);

if(isset($_GET['id'])){
	echo "<script>
	alert('Link Copied Successfully');
	navigator.clipboard.writeText(document.URL);
	</script>";
}

?>
<!DOCTYPE html>
<html lang='en'>
<head>
<title>NewYear</title>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'> 
<link rel='stylesheet' href='style.css'>
</head>
<body>
<div class='header1'>
<h2 style='color:Gold;font-family:trebuchet ms;'>NewYear</h2>
</div>
<div class='main'>
<div class='messageContent'>
<div class='sub1'>
<div class='title'>
<h2>VIBEZ MESSAGE</h2>
</div>
<?php if($ans){ ?>
<div class='a1'>
<p id='sendernametxt'>Sender's Name:<span id='name'><?php echo $ans['name']?></span></p>
</div>
<div class='b1'>
<p><?php echo $ans['message'] ?></p>
</div>

<div class='c1'>
<div class='sec1'>
<a href='index.php'><button>Reply</button></a>
</div>
<div class='sec2'>
<a href="Details.php?id=<?php echo $ans['id']; ?>"><button>Get Link</button>


<?php } ?>
</div>
</div>
</div>
</div>
</div>
<script>
function copy(){
var urls=document.URL;
alert(urls)
}
</script>
</body>
</html>