
function PAGELOAD(){
	LOAD_ALL();
	LOAD_TX();
	document.getElementById("Sportart_Unterlinks").innerHTML = "<a style='color:#3d567c;text-shadow: 2px 2px 3px black'><span style='text-shadow: 3px 3px 5px black'>-</span> Hockey</a>";
	document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px';
//	RESIZE_TX();
	RESIZE();
}
