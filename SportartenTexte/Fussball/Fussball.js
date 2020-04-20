var deg = 0;
function TX_Unterlinks(Unterlink){
		document.getElementById("TX_Unterlink_Training").style.display = "none";
		document.getElementById("TX_Unterlink_Tuniere").style.display = "none";
		document.getElementById("TX_Unterlink_Trainer").style.display = "none";
		document.getElementById("TX_Unterlink_Regel").style.display = "none";
		document.getElementById("TX_Unterlink_Shop").style.display = "none";
		document.getElementById(Unterlink).style.display = "block";
		document.getElementsByClassName("TX_Unterlink")[0].style.backgroundImage = "";document.getElementsByClassName("TX_Unterlink")[0].style.boxShadow = "";
		document.getElementsByClassName("TX_Unterlink")[1].style.backgroundImage = "";document.getElementsByClassName("TX_Unterlink")[1].style.boxShadow = "";
		document.getElementsByClassName("TX_Unterlink")[2].style.backgroundImage = "";document.getElementsByClassName("TX_Unterlink")[2].style.boxShadow = "";
		document.getElementsByClassName("TX_Unterlink")[3].style.backgroundImage = "";document.getElementsByClassName("TX_Unterlink")[3].style.boxShadow = "";
		document.getElementsByClassName("TX_Unterlink")[4].style.backgroundImage = "";document.getElementsByClassName("TX_Unterlink")[4].style.boxShadow = "";
		if(Unterlink == "TX_Unterlink_Training"){document.getElementsByClassName("TX_Unterlink")[0].style.backgroundImage = "linear-gradient(#232a34 40%, #3d567c 100%)";document.getElementsByClassName("TX_Unterlink")[0].style.boxShadow = "5px 5px 10px black"}
		if(Unterlink == "TX_Unterlink_Tuniere"){document.getElementsByClassName("TX_Unterlink")[1].style.backgroundImage = "linear-gradient(#232a34 40%, #3d567c 100%)";document.getElementsByClassName("TX_Unterlink")[1].style.boxShadow = "5px 5px 10px black"}
		if(Unterlink == "TX_Unterlink_Trainer"){document.getElementsByClassName("TX_Unterlink")[2].style.backgroundImage = "linear-gradient(#232a34 40%, #3d567c 100%)";document.getElementsByClassName("TX_Unterlink")[2].style.boxShadow = "5px 5px 10px black"}
		if(Unterlink == "TX_Unterlink_Regel"){document.getElementsByClassName("TX_Unterlink")[3].style.backgroundImage = "linear-gradient(#232a34 40%, #3d567c 100%)";document.getElementsByClassName("TX_Unterlink")[3].style.boxShadow = "5px 5px 10px black"}
		if(Unterlink == "TX_Unterlink_Shop"){document.getElementsByClassName("TX_Unterlink")[4].style.backgroundImage = "linear-gradient(#232a34 40%, #3d567c 100%)";document.getElementsByClassName("TX_Unterlink")[4].style.boxShadow = "5px 5px 10px black"}
}
function PAGELOAD(){
	LOAD_ALL();
	LOAD_TX();
			document.getElementById("Sportart_Unterlinks").innerHTML = "<a style='color:#3d567c;text-shadow: 2px 2px 3px black'><span style='text-shadow: 3px 3px 5px black'>-</span> Fussball</a>";
	RESIZE_TX();
	RESIZE();
}
