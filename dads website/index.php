<?php
include('conn.php');
$sql="SELECT id,title,addDescription FROM 2bconcept ORDER BY id DESC LIMIT 4";
$query=mysqli_query($conn,$sql);
$ans=mysqli_fetch_all($query,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang='en'>
<head>
<title>Copy Print</title>
<meta charset='utf-8'>
<meta name='viewport'content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='stylesheet.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class='searchContainer'>
<div class='searchPageHeader'>
<h2>Copy<span>Print</span></h2>
<a href='login.php'><button>Admin</button></a>
</div>
<div class='searchPageWelcomeText'>
<h2 id='searchtxt'>Want To Bring Your Imagenation To Life</h2>
</div>
<form method='POST' autocomplete='off' action='' class='searchPageSearchBox'>
<input type='text' placeholder='Search Your Name' name='search'>
<button name='searchbtn'><i class='fa fa-search'></i></button>
</form>
</div>


<?php 
include('conn.php');
if(isset($_POST['searchbtn'])){
	echo "<h2 id='latestTxt'>Search Result</h2>";
	$name=$_POST['search'];
	$sql="SELECT * FROM 2bconcept WHERE clientName='$name'";
	$query=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($query)){
		?>
		
<div class="PostBox">
  <div class="centered"style="background:url('img/<?php echo $row['addDescription']; ?>')center;background-size:cover;background-repeat:no-repeat;">
  <a href="details.php?id=<?php echo $row['id']; ?>"><p><?php echo $row['title'];?> </p></a>
  
  </div>
</div>

		<?php 
	}
	
	
}

?>



<h2 id='latestTxt'>Latest</h2>
<div class='PostBoxWrap'>


<?php foreach($ans as $an){ ?>
<div class="PostBox">
 
  <div class="centered"style="background:url('img/<?php echo $an['addDescription']; ?>')center;background-size:cover;background-repeat:no-repeat;">
 <a href="details.php?id=<?php echo $an['id']; ?>"><p><?php echo $an['title'];?> </p></a>

  
  </div>
</div>
<?php } ?>


</div>


<script src='scriptSearch.js'></script>
</body>
</html>






