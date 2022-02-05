var welcomesearchtxt=document.getElementById('searchtxt');
var speechs=['Want To Bring Your Imagenation To Life','2bConcept Got Your Back ','Just Search Your Name','It Is That Easy'];
var speechswitchs=0;
function speechGenerators(){
speechswitchs++;
if(speechswitchs==0){
welcomesearchtxt.innerHTML=speechs[speechswitchs];
}
else if(speechswitchs==1){
welcomesearchtxt.innerHTML=speechs[speechswitchs];
}
else if(speechswitchs==2){
welcomesearchtxt.innerHTML=speechs[speechswitchs];
}
else if(speechswitchs==3){
welcomesearchtxt.innerHTML=speechs[speechswitchs];
}
else{
	speechswitchs=0;
	welcomesearchtxt.innerHTML=speechs[speechswitchs];
}


	
}

setInterval(speechGenerators,2500);