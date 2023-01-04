<?php 
include('conn.php');
session_start();

$uname=$_SESSION['uname'];

$fname=$_POST['fname'];


$sqls="SELECT * FROM ghostgame WHERE uname='$fname' and fname='$uname' order by id desc";
$que=mysqli_query($conn,$sqls);
$ress=mysqli_fetch_assoc($que);

$urgameNum=$ress['gameNum'];

$sqlv="SELECT * FROM ghostgame WHERE uname='$uname' and fname='$fname' or uname='$fname' and fname='$uname' ";
$quev=mysqli_query($conn,$sqlv);
if(mysqli_num_rows($quev)>0){
	
}else{
	echo "<h2>Start the Game</h2>";
}
	
$sqlz="SELECT * FROM ghostgame WHERE uname='$uname' and fname='$fname' and gameNum='$urgameNum' ";
$quez=mysqli_query($conn,$sqlz);
if(mysqli_num_rows($quez)>0){
	
	
	
	#user scores
$us="SELECT sum(score) as totalPoints FROM ghostscores where win='$uname' and loose='$fname'";
$uq=mysqli_query($conn,$us);
$ur=mysqli_fetch_assoc($uq);

	#allies scores
$fs="SELECT sum(score) as totalPoints FROM ghostscores where win='$fname' and loose='$uname'";
$fq=mysqli_query($conn,$fs);
$fr=mysqli_fetch_assoc($fq);

	
	
echo "<label>Your Scores</label>";
echo "<h1>YOU-".strtoupper($fname)."</h1>";
	echo "<h1>".$ur['totalPoints']."-".$fr['totalPoints']."</h1>";
	
			#inserting data into ghost scores and checking the outcome for the current game
		$useroutcome="SELECT * FROM  ghostgame WHERE uname='$uname' and fname='$fname' and gameNum='$urgameNum' order by id desc";
		$friendoutcome="SELECT * FROM  ghostgame WHERE uname='$fname' and fname='$uname' and gameNum='$urgameNum' order by id desc";
		$uque=mysqli_query($conn,$useroutcome);
		$fque=mysqli_query($conn,$friendoutcome);
		$uoutcome=mysqli_fetch_assoc($uque);
		$foutcome=mysqli_fetch_assoc($fque);
	
	
	if($uoutcome['outcome']=='Rock' && $foutcome['outcome']=='Rock'){
		echo "<h3>Outcome:".$uoutcome['outcome']." vs ".$foutcome['outcome']."</h3>";
			echo "No one won Game:".$urgameNum."";
		}else if($uoutcome['outcome']=='Rock' && $foutcome['outcome']=='Paper'){
			echo "<h3>Outcome:".$uoutcome['outcome']." vs ".$foutcome['outcome']."</h3>";
			echo "You lost Game:".$urgameNum."";
			
					#insert opponent name and score
		
			
		}else if($uoutcome['outcome']=='Rock' && $foutcome['outcome']=='Scissors'){
			echo "<h3>Outcome:".$uoutcome['outcome']." vs ".$foutcome['outcome']."</h3>";
			echo "You won Game:".$urgameNum."";
			#inserting user name and score
	
			
		}else if($uoutcome['outcome']=='Scissors' && $foutcome['outcome']=='Scissors'){
			echo "<h3>Outcome:".$uoutcome['outcome']." vs ".$foutcome['outcome']."</h3>";
		echo "No one won Game:".$urgameNum."";
		}else if($uoutcome['outcome']=='Scissors' && $foutcome['outcome']=='Rock'){
			echo "<h3>Outcome:".$uoutcome['outcome']." vs ".$foutcome['outcome']."</h3>";
			echo "You lost Game:".$urgameNum."";
			
					#insert opponent name and score
		
			
		}else if($uoutcome['outcome']=='Scissors' && $foutcome['outcome']=='Paper'){
			echo "<h3>Outcome:".$uoutcome['outcome']." vs ".$foutcome['outcome']."</h3>";
			echo "You won Game:".$urgameNum."";
			#inserting user name and score
			
				
			
			
		}else if($uoutcome['outcome']=='Paper' && $foutcome['outcome']=='Paper'){
			echo "<h3>Outcome:".$uoutcome['outcome']." vs ".$foutcome['outcome']."</h3>";
		echo "No one won Game:".$urgameNum."";
		}else if($uoutcome['outcome']=='Paper' && $foutcome['outcome']=='Rock'){
			echo "<h3>Outcome:".$uoutcome['outcome']." vs ".$foutcome['outcome']."</h3>";
			echo "You won Game:".$urgameNum."";
			#inserting user name and score
			
			
		}
		else if($uoutcome['outcome']=='Paper' && $foutcome['outcome']=='Scissors'){
			echo "<h3>Outcome:".$uoutcome['outcome']." vs ".$foutcome['outcome']."</h3>";
		echo "You lost Game:".$urgameNum."";
					#insert opponent name and score
				
			
		}else{
			echo "Waiting for Player 2";
		}
		
	
	
	
	
	
}
else{
	
	echo "<h2>Your Turn</h2>";

	
}