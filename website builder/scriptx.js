var div;
var sub1=document.getElementById("sub1");
var sub2=document.getElementById("sub2");
var sub2a=document.getElementById("sub2a");
var sub1b=document.getElementById("sub1b");

function newdiv(){
var content=document.getElementById("content");
div=document.createElement("div");


var width=prompt("Please Specify The WIdth Of The Bar Between 1-100");
if(width !=null){
div.style.width=width+"%";
}

var height=prompt("Please Specify The Height Of The Bar");
if(height !=null){
div.style.height=height+"px";
}

var background=prompt("Which Background Colour Do You Prefere");
if(background !=null){
div.style.background=background;
}

//Text button
var buttontext=document.createElement("button");

var textinp=document.createElement("input");
textinp.setAttribute("placeholder","Insert Text Here");

var textinput=document.createElement("input");
textinput.setAttribute("placeholder","Insert Font Size Here");

var txtText=document.createTextNode("Insert Text");

var TextAdd=document.createElement("button");

TextAdd.setAttribute("id","textadd");

var TextAddtxt=document.createTextNode("Add Text");

var TextSizeAdd=document.createElement("button");
TextSizeAdd.setAttribute("id","textadd");
var TextSizeAddtxt=document.createTextNode("Font size");




//text-align left
var alignleft=document.createElement("button");
alignleft.setAttribute("id","textadd");
var alignlefttxt=document.createTextNode("Align Left");

//text-align right
var alignright=document.createElement("button");
alignright.setAttribute("id","textadd");
var alignrighttxt=document.createTextNode("Align Right");

//text-align center
var aligncenter=document.createElement("button");
aligncenter.setAttribute("id","textadd");
var aligncentertxt=document.createTextNode("Center");


//font-color inp
var fontcolorinp=document.createElement("input");
fontcolorinp.setAttribute("placeholder","Insert Font Color Here");

//font-color button
var fontcolor=document.createElement("button");
fontcolor.setAttribute("id","textadd");
var fontcolortxt=document.createTextNode("Color");

//textinp value
var valres=textinp.value;
var val=document.createTextNode(valres);


//add text button
TextAdd.addEventListener("click",function(){
div.appendChild(val);
})


//fontsize value
var fontsizeval=textinput.value;

//font size button
TextSizeAdd.addEventListener("click",function(){
alert("hey");
})



TextAdd.addEventListener("click",function(){
var val=document.createTextNode(textinp.value);
div.appendChild(val);
})

var txt;
textinp.setAttribute("id","inp");
textinput.setAttribute("id","inp");
fontcolorinp.setAttribute("id","inp");
buttontext.setAttribute("id","button");


//insert text button
buttontext.addEventListener("click",function(){


//text-add
TextAdd.appendChild(TextAddtxt);
sub1.appendChild(textinp);
sub1.appendChild(TextAdd);

//font-color
fontcolor.appendChild(fontcolortxt);
sub2a.appendChild(fontcolorinp);
sub2a.appendChild(fontcolor);


//align-left
alignleft.appendChild(alignlefttxt);
sub1a.appendChild(alignleft);

//align-center
aligncenter.appendChild(aligncentertxt);
sub1a.appendChild(aligncenter);


//align-right
alignright.appendChild(alignrighttxt);
sub1a.appendChild(alignright);





//font-size
TextSizeAdd.appendChild(TextSizeAddtxt);
sub2.appendChild(textinput);
sub2.appendChild(TextSizeAdd);


});



//Remove bar
var buttonremove=document.createElement("button");
var removebar=document.createTextNode("Remove Bar");
var txt;
buttonremove.setAttribute("id","button");
buttonremove.addEventListener("click",function(){
div.remove();

});

buttontext.appendChild(txtText);
buttonremove.appendChild(removebar);

div.appendChild(buttontext);
div.appendChild(buttonremove);

content.appendChild(div);


alert("Div created");
}