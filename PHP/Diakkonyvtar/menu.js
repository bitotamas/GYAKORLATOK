window.addEventListener('load',init);

function init(){
	menuHighlight();
}

function menuHighlight(){
	for (var i = 0; i < document.links.length; i++) {
		var str=document.URL;
		if (document.links[i].href == str) 
			document.links[i].style.color = 'lightgreen';
	}
}

