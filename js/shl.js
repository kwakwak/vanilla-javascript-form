var xmlhttp;
if (window.XMLHttpRequest){
xmlhttp=new XMLHttpRequest(); // code for IE7+, Firefox, Chrome, Opera, Safari
} else {
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); // code for IE6, IE5
}

var SHL = {};
SHL.loader = document.getElementById('loader');


SHL.serialize = function(obj) {
	var str = [];
	for(var p in obj) {
		if (obj.hasOwnProperty(p)) {
			str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
		};
	};
	return str.join("&");
};

//console.log ("parent url: " + window.parent.location);
//console.log ("iframe url: " + window.location);

SHL.send = function (form,url){

	var data ={};

	if(typeof SHL.status === 'undefined'){
		SHL.status = {
			lock : false
		};
	};

	var elements = document.forms[form].elements;

	for (i=0; i<elements.length; i++){
		data[elements[i].id]=elements[i].value;
	}

	data.url = window.parent.location;

	if (SHL.valid(elements) && !SHL.status.lock) {
		SHL.loader.style.display ='block';
		xmlhttp.open("POST",url,true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(SHL.serialize(data));
	}
}

SHL.valid = function (elements){
	//SHL.msg = document.getElementById('msg');
	for (i=0; i<elements.length; i++){
		for (a=0; a<elements[i].attributes.length; a++){
			if  (elements[i].attributes[a].name === 'required') {
				if (elements[i].value === '') {
					//SHL.msg.innerHTML =  elements[i].attributes.placeholder.value + ' הוא שדה חובה';
					alert (elements[i].attributes.label.value + ' הוא שדה חובה');
					return false;
				}
			}
		}
	}
	//SHL.msg.style.display ='none';
	return true;
}

xmlhttp.onreadystatechange=function(){
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
		SHL.formCont = document.getElementById('formCont');
		SHL.sendButton = document.getElementById('sendButton');
		SHL.success = document.getElementById('success');

		SHL.loader.style.display ='none';
		
		console.log (xmlhttp.responseText);

		SHL.formCont.style.display ='none';
		SHL.sendButton.style.display ='none';
		SHL.success.style.display ='block';

		SHL.status = {
			lock : true
		};

	};
};