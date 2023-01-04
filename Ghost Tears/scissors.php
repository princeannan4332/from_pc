<?php
include('conn.php');
session_start();

#Scissors Played
if(isset($_POST['scissors'])){
$uname=$_SESSION['uname'];
$outcome=$_POST['scissors'];
$fname=$_POST['fname'];
$gamesPlayed=0;

$sqls="SELECT * FROM ghostgame WHERE uname='$uname' and fname='$fname' order by id desc";
$que=mysqli_query($conn,$sqls);
$ress=mysqli_fetch_assoc($que);

$urgameNum=$ress['gameNum'];

if(mysqli_num_rows($que)>0){
$sqlz="SELECT * FROM ghostgame WHERE uname='$fname' and fname='$uname' and gameNum='$urgameNum' ";
$quez=mysqli_query($conn,$sqlz);

if(mysqli_num_rows($quez)>0){
	$urgameNum++;
	$s="INSERT INTO ghostgame(uname,fname,outcome,gameNum,noty) VALUES('$uname','$fname','$outcome','$urgameNum','unread')";
	if(mysqli_query($conn,$s)){
		$unum=$urgameNum--;
	$ss="SELECT * FROM  ghostgame WHERE uname='$fname' and fname='$uname' and gameNum='$unum'";
	$q=mysqli_query($conn,$ss);
	if(mysqli_num_rows($q)>0){
		#inserting data into ghost scores and checking the outcome for the current game
		$useroutcome="SELECT * FROM  ghostgame WHERE uname='$uname' and fname='$fname' and gameNum='$unum' order by id desc";
		$friendoutcome="SELECT * FROM  ghostgame WHERE uname='$fname' and fname='$uname' and gameNum='$unum' order by id desc";
		$uque=mysqli_query($conn,$useroutcome);
		$fque=mysqli_query($conn,$friendoutcome);
		$uoutcome=mysqli_fetch_assoc($uque);
		$foutcome=mysqli_fetch_assoc($fque);
		
		if($foutcome['noty']=="unread"){
			$usql="UPDATE ghostgame set noty='read' where noty='unread' and uname='$fname' ";
			mysqli_query($conn,$usql);
			
			$usql="UPDATE ghostgame set noty='read' where noty='unread' and uname='$uname' ";
			mysqli_query($conn,$usql);
		}
		
		
		
		
		
		
		
		
		
		
		
		#comparing outcomes to insert scores
		if($uoutcome['outcome']=='Rock' && $foutcome['outcome']=='Rock'){
			
		}else if($uoutcome['outcome']=='Rock' && $foutcome['outcome']=='Paper'){
			
				#insert opponent name and score
					$inscore="INSERT INTO ghostscores(win,loose,score) VALUES('$fname','$uname',1)";
			mysqli_query($conn,$inscore);
			
		}else if($uoutcome['outcome']=='Rock' && $foutcome['outcome']=='Scissors'){
			
			#inserting user name and score
					$inscore="INSERT INTO ghostscores(win,loose,score) VALUES('$uname','$fname',1)";
			mysqli_query($conn,$inscore);
			
			
		}else if($uoutcome['outcome']=='Scissors' && $foutcome['outcome']=='Scissors'){
			
		}else if($uoutcome['outcome']=='Scissors' && $foutcome['outcome']=='Rock'){
			
			#insert opponent name and score
					$inscore="INSERT INTO ghostscores(win,loose,score) VALUES('$fname','$uname',1)";
			mysqli_query($conn,$inscore);
			
		}else if($uoutcome['outcome']=='Scissors' && $foutcome['outcome']=='Paper'){
			
			#inserting user name and score
			
				$inscore="INSERT INTO ghostscores(win,loose,score) VALUES('$uname','$fname',1)";
			mysqli_query($conn,$inscore);
			
		}else if($uoutcome['outcome']=='Paper' && $foutcome['outcome']=='Paper'){
	
		}else if($uoutcome['outcome']=='Paper' && $foutcome['outcome']=='Rock'){
			
			#inserting user name and score
					$inscore="INSERT INTO ghostscores(win,loose,score) VALUES('$uname','$fname',1)";
			mysqli_query($conn,$inscore);
			
		}
		else if($uoutcome['outcome']=='Paper' && $foutcome['outcome']=='Scissors'){
		
					#insert opponent name and score
				$inscore="INSERT INTO ghostscores(win,loose,score) VALUES('$fname','$uname',1)";
			mysqli_query($conn,$inscore);
		}else{
		echo "Waiting for Player 2";
		}
		
	
		
		
		
		
		
		
		
		
		
		
		
		
	}else{
		echo "Waiting for Player 2";
	}
	
	
	}
	
}else{
	echo "Waiting for Player 2";
}

	
	
}else{
$gamesPlayed++;

$sql="INSERT INTO ghostgame(uname,fname,outcome,gameNum) VALUES('$uname','$fname','$outcome','$gamesPlayed')";
if(mysqli_query($conn,$sql)){
	echo "You have started the Game";
}





}

}