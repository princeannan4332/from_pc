var addcog=document.querySelector('#addcog');
var mes=document.querySelector('#mes');
var prf=document.querySelector('#prf');
var allcog=document.querySelector('#allcog');
var ed=document.querySelector('#ed');
var signup=document.querySelector('#signup');
var div1=document.querySelector('.div1');
var div2=document.querySelector('.div2');
var div3=document.querySelector('.div3');
var div4=document.querySelector('.div4');
var div5=document.querySelector('.div5');
var div6=document.querySelector('.div6');
var div7=document.querySelector('.div7');
var com=document.querySelector('#com');
var textinp=document.querySelector('#txtinp');
var txtleft=document.querySelector('#txtleft');


var arr=[];
setInterval(function(){
	var wordsLeft=0;
		for(let letters of textinp.value){
			var i=0;
			i++;
wordsLeft=i;
	}
var totalwords=10;
txtleft.textContent=wordsLeft+" Of 10";
if(wordsLeft>10){
	var ans=wordsLeft-totalwords;
txtleft.textContent=ans+' letters have exceeded the range';
txtleft.style.color='red';
}else{
	txtleft.textContent=wordsLeft+" Of 10";
}
}
},100);





var switcher=0;
addcog.addEventListener('click',()=>{
	switcher=0;
	if(switcher==0){
	div1.style.display='flex';
	div2.style.display='none';
		div5.style.display='none';
	div3.style.display='none';
	div7.style.display='none';
	div6.style.display='none';
	div4.style.display='none';
	mes.style.color='white';
	mes.style.background='orange';
	com.style.color='white';
	com.style.background='orange';
	prf.style.color='white';
	prf.style.background='orange';
		allcog.style.color='white';
	allcog.style.background='orange';
	}
});


mes.addEventListener('click',()=>{
	switcher=1;
	if(switcher==1){
	div1.style.display='none';
	div3.style.display='none';
	div4.style.display='none';
	div7.style.display='none';
	div6.style.display='none';
	div2.style.display='flex';
		div5.style.display='none';
	mes.style.color='orange';
	mes.style.background='white';
	com.style.color='white';
	com.style.background='orange';
	prf.style.color='white';
	prf.style.background='orange';
		allcog.style.color='white';
	allcog.style.background='orange';
	}
	
});

com.addEventListener('click',()=>{
	switcher=2;
	if(switcher==2){
	div1.style.display='nonw';
	div2.style.display='none';
	div7.style.display='none';
	div6.style.display='none';
		div4.style.display='none';
	div3.style.display='flex';
		div5.style.display='none';
	com.style.color='orange';
	com.style.background='white';
	mes.style.color='white';
	mes.style.background='orange';
	prf.style.color='white';
	prf.style.background='orange';
		allcog.style.color='white';
	allcog.style.background='orange';
	}
});

prf.addEventListener('click',()=>{
	switcher=3;
	if(switcher==3){
	div1.style.display='none';
	div2.style.display='none';
	div3.style.display='none';
	div6.style.display='none';
	div7.style.display='none';
	div5.style.display='none';
		div4.style.display='flex';
	mes.style.color='white';
	mes.style.background='orange';
	com.style.color='white';
	com.style.background='orange';
	prf.style.color='orange';
	prf.style.background='white';
	allcog.style.color='white';
	allcog.style.background='orange';
	}
});


allcog.addEventListener('click',()=>{
	switcher=4;
	if(switcher==4){
	div1.style.display='none';
	div2.style.display='none';
	div3.style.display='none';
	div4.style.display='none';
		div5.style.display='flex';
		div6.style.display='none';
		div7.style.display='none';
	mes.style.color='white';
	mes.style.background='orange';
	com.style.color='white';
	com.style.background='orange';
	prf.style.color='white';
	prf.style.background='orange';
	allcog.style.color='orange';
	allcog.style.background='white';
	}
});
ed.addEventListener('click',()=>{
	switcher=5;
	if(switcher==5){
	div6.style.display='flex';
	div1.style.display='none';
	div2.style.display='none';
		div5.style.display='none';
	div3.style.display='none';
	div4.style.display='none';
	div7.style.display='none';
	mes.style.color='white';
	mes.style.background='orange';
	com.style.color='white';
	com.style.background='orange';
	prf.style.color='white';
	prf.style.background='orange';
		allcog.style.color='white';
	allcog.style.background='orange';
	}
});

signup.addEventListener('click',()=>{
	switcher=5;
	if(switcher==5){
	div6.style.display='none';
	div1.style.display='none';
	div2.style.display='none';
		div5.style.display='none';
	div3.style.display='none';
	div4.style.display='none';
	div7.style.display='flex';
	mes.style.color='white';
	mes.style.background='orange';
	com.style.color='white';
	com.style.background='orange';
	prf.style.color='white';
	prf.style.background='orange';
		allcog.style.color='white';
	allcog.style.background='orange';
	}
});