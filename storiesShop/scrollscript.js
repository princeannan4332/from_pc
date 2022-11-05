var scrolldiv=document.querySelector('.scrollUp');
scrolldiv.addEventListener('click',function(){
	window.scrollTo({
		top:0,
		behavior:'smooth'
		
	});
	
});
setInterval(function(){
	if(window.scrollY<170){
		scrolldiv.style.display='none';
	}else{
		scrolldiv.style.display='flex';
	}
	
},100);