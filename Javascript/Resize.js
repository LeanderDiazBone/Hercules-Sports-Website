function RESIZE(){
			document.getElementById("background").style.height = window.innerHeight + "px";
			document.getElementById("social-left").style.width = (window.innerWidth - 540) / 2 + "px";
			document.getElementById("Searchbar").style.left = window.innerWidth - 370 + "px";
			if(window.innerWidth>600){document.getElementById("ANIMATION").style.height = window.innerHeight + "px";}else{document.getElementById("ANIMATION").style.height = "200px"}
}
function RESIZE_TX(){
	if(window.innerWidth < 600){
	var x = document.getElementsByClassName("Textbilder");
	var i;
	for (i = 0; i < x.length; i++) {
  	x[i].style.margin = "0";
		x[i].style.marginTop = "10px";
		x[i].style.marginBottom = "10px";
	}
	var x = document.getElementsByClassName("Textbilder2");
	var i;
	for (i = 0; i < x.length; i++) {
  	x[i].style.margin = "0";
		x[i].style.marginTop = "10px";
		x[i].style.marginBottom = "10px";
		x[i].style.width = "100%";
	}
	var y = document.getElementsByClassName("UnterlinksSportarten3");
	var a;
	for (a = 0; a < y.length; a++) {
  	y[a].style.marginLeft = "0";
		y[a].style.width = "100%";
	}
	var y = document.getElementsByClassName("Textbilder");
	var a;
	for (a = 0; a < y.length; a++) {
  	y[a].style.width = "100%";
		y[a].style.maxWidth = "100%";
	}
	var y = document.getElementsByClassName("InfoKasten20");
	var a;
	for (a = 0; a < y.length; a++) {
		y[a].style.width = "90%";
		y[a].style.marginLeft = "auto";
		y[a].style.marginRight = "auto";
		y[a].style.left = "0";
		y[a].style.float = "";
	}
	document.getElementById("Background1_div").style.display = "none";
	document.getElementById("Background2").style.display = "block";
	document.getElementById("Background2").style.margin = "0";
	document.getElementById("Background1").style.display = "none";
}
}
