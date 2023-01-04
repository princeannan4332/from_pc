$(document).ready(function(){
	
	
	$('#logins').click(function(e){
		e.preventDefault();
		var ulogin=$('#ulogin').val();
		var plogin=$('#plogin').val();
		
		if(ulogin=='' || plogin==''){
			$('#loginlb').html('Fill All Requirements');
		}else{
		$.post('login.php',{ulogin:ulogin,plogin:plogin},function(res){
			$('#loginlb').html(res);
			setTimeout(function(){
			window.location='profile.php';
			},1500);
		});
		}
	});
	
	
	
	
	
	
	
	$('#signbtn').click(function(e){
		e.preventDefault();
		var usign=$('#usign').val();
		var psign=$('#psign').val();
		
		if(usign=='' || psign==''){
			$('#signlb').html('Fill All Requirements');
		}else{
		$.post('signup.php',{usign:usign,psign:psign},function(res){
			if(res=="Account Already Exist"){
			$('#signlb').html(res);
			$('#signlb').css('color','red');
			$('#signlb').show();
			setTimeout(function(){
				$('#signlb').hide();
			},4000);
			
			}else if(res=="Hurray!! Login Now"){
					$('#signlb').html(res);
				$('#signlb').css('color','green');
				$('#signlb').show();
			setTimeout(function(){
				$('#signlb').hide();
			},4000);
			}else{
				$('#signlb').html('Something Went Wrong');
				$('#signlb').css('color','red');
				$('#signlb').show();
			setTimeout(function(){
				$('#signlb').hide();
			},4000);
			}
		});
		}
	});
	
	
	
var check=false;
$('#sign').click(function(){
if(check==false){
	$('#login').fadeOut(500);
	check=true;
	setTimeout(function(){
	$('#signup').fadeIn(500);
	},500);
	
}
})

$('#log').click(function(){
if(check==true){
	$('#signup').fadeOut(500);
	check=false;
	setTimeout(function(){
	$('#login').fadeIn(500);
	},500);
	
}
})




	
});


