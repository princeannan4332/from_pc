$('#search').keyup(function(){
	var key=$('#search').val();
if(key==''){
	
}else{
		$('.searchFriend').load('getFriend.php',{key:key},
		function(){
			$('.cont button').click(function(){
				var fname=this.value;
				$.post('insertFriend.php',{fname:fname},function(res){
				alert(res);
				});
			})
		});

}



	
	
});


setInterval(function(){
$('.Friends').load('friends.php');
},100);
