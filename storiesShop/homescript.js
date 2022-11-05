var txt=document.querySelector('#indextxt');
var menubtn=document.querySelector('#menubtn');
var menucontent=document.querySelector('.menucontent');
var cancels=document.querySelector('#cancels');
var checkon=false;


//menu button
menubtn.addEventListener('click',function(){
	checkon=true;
if(checkon==true){
	menucontent.style.display='block';
}
	
})


//cancel button
cancels.addEventListener('click',function(){
	checkon=false;
if(checkon==false){
	menucontent.style.display='none';
}
	
})





var x=0;
setInterval(function(){
	x++;
switch(x){
case 0:
txt.textContent='Welcome to COG';	
break;
case 1:
txt.textContent='Make Your Imagination Come To Life'
break;
case 2:
txt.textContent='Show Your Talent To The World'
break;
case 3:
txt.textContent='You Are Amazing';
x=-1;
break;
default:
txt.textContent='Welcome to CrazyPoems';
}
},3000);