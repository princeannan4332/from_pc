var welcometxt=document.getElementById('welcometxt');
var speech=['Tired Of Searching For Backup','You are At The Right Place','Just Insert In the Details and Submit','It Is That Easy'];
var speechswitch=0;
function speechGenerator(){
speechswitch++;
if(speechswitch==0){
welcometxt.innerHTML=speech[speechswitch];
}
else if(speechswitch==1){
welcometxt.innerHTML=speech[speechswitch];
}
else if(speechswitch==2){
welcometxt.innerHTML=speech[speechswitch];
}
else if(speechswitch==3){
welcometxt.innerHTML=speech[speechswitch];
}
else{
	speechswitch=0;
	welcometxt.innerHTML=speech[speechswitch];
}


	
}

setInterval(speechGenerator,2500);


var modal=document.getElementById('modal');
function showModal(){
	modal.style.display='flex';
}
window.addEventListener('click',(event)=>{
	if(event.target==modal){
		modal.style.display='none';
	}
})










