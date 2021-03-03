window.addEventListener('load',init);

function init(){
	menuHighlight();
}

function menuHighlight(){
	for (var i = 1; i < document.links.length; i++) {
		var str=document.URL;
		if (document.links[i].href == str) {
			document.links[i].style.color = '#ffffff';
			document.links[i].style.backgroundColor = "red";
		}
	}
}

