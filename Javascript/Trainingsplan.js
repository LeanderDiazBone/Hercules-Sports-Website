function catchend(day,dayafter){
	document.getElementById('move').style.left = document.getElementById(day).offsetLeft + 'px';
	document.getElementById('move').style.transition = '1s';
	if(day == 'day1'){varday = day1; day1++;setTimeout('Quellcodeändern("day1")', 2000);};
	if(day == 'day2'){varday = day2; day2++;setTimeout('Quellcodeändern("day2")', 2000);};
	if(day == 'day3'){varday = day3; day3++;setTimeout('Quellcodeändern("day3")', 2000);};
	if(day == 'day4'){varday = day4; day4++;setTimeout('Quellcodeändern("day4")', 2000);};
	if(day == 'day5'){varday = day5; day5++;setTimeout('Quellcodeändern("day5")', 2000);};
	if(day == 'day6'){varday = day6; day6++;setTimeout('Quellcodeändern("day6")', 2000);};
	if(day == 'day7'){varday = day7; day7++;setTimeout('Quellcodeändern("day7")', 2000);};

	document.getElementById('move').style.height = '50px';
	document.getElementById('move').style.top = (0.25 * window.innerHeight) + ((document.getElementById(day).children.length - 1) * 50) + "px";
	document.getElementById('move').style.width = document.getElementById(dayafter).offsetLeft - document.getElementById(day).offsetLeft + "px";
	document.getElementById('move').style.fontSize = "17px";
	catchactive = 0;
	if(day == 'day1'){setTimeout('document.getElementById("day1").appendChild(document.createElement("div"));document.getElementById("day1").children[' + document.getElementById("day1").children.length + '].innerHTML = document.getElementById("move").innerHTML;document.getElementById("day1").children[' + document.getElementById("day1").children.length + '].className = "block"', 1000)}
	if(day == 'day2'){setTimeout('document.getElementById("day2").appendChild(document.createElement("div"));document.getElementById("day2").children[' + (document.getElementById("day2").children.length) + '].innerHTML = document.getElementById("move").innerHTML;document.getElementById("day2").children[' + (document.getElementById("day2").children.length) + '].className = "block"', 1000)}
	if(day == 'day3'){setTimeout('document.getElementById("day3").appendChild(document.createElement("div"));document.getElementById("day3").children[' + (document.getElementById("day3").children.length) + '].innerHTML = document.getElementById("move").innerHTML;document.getElementById("day3").children[' + (document.getElementById("day3").children.length) + '].className = "block"', 1000)}
	if(day == 'day4'){setTimeout('document.getElementById("day4").appendChild(document.createElement("div"));document.getElementById("day4").children[' + (document.getElementById("day4").children.length) + '].innerHTML = document.getElementById("move").innerHTML;document.getElementById("day4").children[' + (document.getElementById("day4").children.length) + '].className = "block"', 1000)}
	if(day == 'day5'){setTimeout('document.getElementById("day5").appendChild(document.createElement("div"));document.getElementById("day5").children[' + (document.getElementById("day5").children.length) + '].innerHTML = document.getElementById("move").innerHTML;document.getElementById("day5").children[' + (document.getElementById("day5").children.length) + '].className = "block"', 1000)}
	if(day == 'day6'){setTimeout('document.getElementById("day6").appendChild(document.createElement("div"));document.getElementById("day6").children[' + (document.getElementById("day6").children.length) + '].innerHTML = document.getElementById("move").innerHTML;document.getElementById("day6").children[' + (document.getElementById("day6").children.length) + '].className = "block"', 1000)}
	if(day == 'day7'){setTimeout('document.getElementById("day7").appendChild(document.createElement("div"));document.getElementById("day7").children[' + (document.getElementById("day7").children.length) + '].innerHTML = document.getElementById("move").innerHTML;document.getElementById("day7").children[' + (document.getElementById("day7").children.length) + '].className = "block"', 1000)}

	setTimeout('document.getElementById("move").style.opacity = "0"', 1000)
	setTimeout('document.getElementById("move").style.transition = "0s"', 2000)
	setTimeout('document.getElementById("move").style.top = 0', 2000)
	setTimeout('document.getElementById("move").style.left = 0', 2000)
	setTimeout('document.getElementById("move").style.height = "100px"', 2000)
	setTimeout('document.getElementById("move").style.width = "100px"', 2000)
	setTimeout('document.getElementById("move").style.display = "none"', 2000)

}
function Quellcodeändern(day){
	console.log(day);
	if(day == 'day1'){activeTrainingnew = activeTraining.replace("/Di", activeÜbung + "/Di"); window.location.href = "Trainingsplan_reload.php?activeTrainingreload=" + userTraining.replace(activeTraining, activeTrainingnew) + "&activeTraining=" + activeTrainingnew};
	if(day == 'day2'){activeTrainingnew = activeTraining.replace("/Mi", activeÜbung + "/Mi"); window.location.href = "Trainingsplan_reload.php?activeTrainingreload=" + userTraining.replace(activeTraining, activeTrainingnew) + "&activeTraining=" + activeTrainingnew};
	if(day == 'day3'){activeTrainingnew = activeTraining.replace("/Do", activeÜbung + "/Do"); window.location.href = "Trainingsplan_reload.php?activeTrainingreload=" + userTraining.replace(activeTraining, activeTrainingnew) + "&activeTraining=" + activeTrainingnew};
	if(day == 'day4'){activeTrainingnew = activeTraining.replace("/Fr", activeÜbung + "/Fr"); window.location.href = "Trainingsplan_reload.php?activeTrainingreload=" + userTraining.replace(activeTraining, activeTrainingnew) + "&activeTraining=" + activeTrainingnew};
	if(day == 'day5'){activeTrainingnew = activeTraining.replace("/Sa", activeÜbung + "/Sa"); window.location.href = "Trainingsplan_reload.php?activeTrainingreload=" + userTraining.replace(activeTraining, activeTrainingnew) + "&activeTraining=" + activeTrainingnew};
	if(day == 'day6'){activeTrainingnew = activeTraining.replace("/So", activeÜbung + "/So"); window.location.href = "Trainingsplan_reload.php?activeTrainingreload=" + userTraining.replace(activeTraining, activeTrainingnew) + "&activeTraining=" + activeTrainingnew};
	if(day == 'day7'){activeTrainingnew = activeTraining.replace("_", activeÜbung + "_"); window.location.href = "Trainingsplan_reload.php?activeTrainingreload=" + userTraining.replace(activeTraining, activeTrainingnew) + "&activeTraining=" + activeTrainingnew};
}
var varday = 0;
var day1 = 0;
var day2 = 0;
var day3 = 0;
var day4 = 0;
var day5 = 0;
var day6 = 0;
var day7 = 0;
var i = 0;

function removeblock(day){
	if(document.getElementById(day).children.length > 1){document.getElementById(day).removeChild(document.getElementById(day).lastChild)}
	document.getElementById('RemoveauswahlP').innerHTML = 'Klicke hier um Übungen zu entfernen';
	document.getElementById('RemoveauswahlP').style.top = '0px';
	remove=0;
	console.log(day);
	if(day == 'day1'){day1 = 0;if(activeTraining.slice(activeTraining.search("/Di") - 6, activeTraining.search("/Di") - 5) == ","){;activeTrainingnew = activeTraining.replace(activeTraining.slice(activeTraining.search("/Di") - 6, activeTraining.search("/Di")+3),"/Di"); window.location.href = "Trainingsplan_reload.php?activeTrainingreload=" + userTraining.replace(activeTraining, activeTrainingnew) + "&activeTraining=" + activeTrainingnew}};
	if(day == 'day2'){day2 = 0;if(activeTraining.slice(activeTraining.search("/Mi") - 6, activeTraining.search("/Mi") - 5) == ","){;activeTrainingnew = activeTraining.replace(activeTraining.slice(activeTraining.search("/Mi") - 6, activeTraining.search("/Mi")+3),"/Mi"); window.location.href = "Trainingsplan_reload.php?activeTrainingreload=" + userTraining.replace(activeTraining, activeTrainingnew) + "&activeTraining=" + activeTrainingnew}};
	if(day == 'day3'){day3 = 0;if(activeTraining.slice(activeTraining.search("/Do") - 6, activeTraining.search("/Do") - 5) == ","){;activeTrainingnew = activeTraining.replace(activeTraining.slice(activeTraining.search("/Do") - 6, activeTraining.search("/Do")+3),"/Do"); window.location.href = "Trainingsplan_reload.php?activeTrainingreload=" + userTraining.replace(activeTraining, activeTrainingnew) + "&activeTraining=" + activeTrainingnew}};
	if(day == 'day4'){day4 = 0;if(activeTraining.slice(activeTraining.search("/Fr") - 6, activeTraining.search("/Fr") - 5) == ","){;activeTrainingnew = activeTraining.replace(activeTraining.slice(activeTraining.search("/Fr") - 6, activeTraining.search("/Fr")+3),"/Fr"); window.location.href = "Trainingsplan_reload.php?activeTrainingreload=" + userTraining.replace(activeTraining, activeTrainingnew) + "&activeTraining=" + activeTrainingnew}};
	if(day == 'day5'){day5 = 0;if(activeTraining.slice(activeTraining.search("/Sa") - 6, activeTraining.search("/Sa") - 5) == ","){;activeTrainingnew = activeTraining.replace(activeTraining.slice(activeTraining.search("/Sa") - 6, activeTraining.search("/Sa")+3),"/Sa"); window.location.href = "Trainingsplan_reload.php?activeTrainingreload=" + userTraining.replace(activeTraining, activeTrainingnew) + "&activeTraining=" + activeTrainingnew}};
	if(day == 'day6'){day6 = 0;if(activeTraining.slice(activeTraining.search("/So") - 6, activeTraining.search("/So") - 5) == ","){;activeTrainingnew = activeTraining.replace(activeTraining.slice(activeTraining.search("/So") - 6, activeTraining.search("/So")+3),"/So"); window.location.href = "Trainingsplan_reload.php?activeTrainingreload=" + userTraining.replace(activeTraining, activeTrainingnew) + "&activeTraining=" + activeTrainingnew}};
	if(day == 'day7'){day7 = 0;if(activeTraining.slice(activeTraining.search("_") - 6, activeTraining.search("_") - 5) == ","){;activeTrainingnew = activeTraining.replace(activeTraining.slice(activeTraining.search("_") - 6, activeTraining.search("_")),""); window.location.href = "Trainingsplan_reload.php?activeTrainingreload=" + userTraining.replace(activeTraining, activeTrainingnew) + "&activeTraining=" + activeTrainingnew}};
}
function createTR(tr_num, tr_name, tr_date, trid, newTR, tr_activeDate){
	document.getElementById("TR_Liste").appendChild(document.createElement("div"));
	document.getElementById("TR_Liste").children[tr_num].id = "TR" + tr_num;
	document.getElementById("TR" + tr_num).appendChild(document.createElement("h2"));
	document.getElementById("TR" + tr_num).children[0].innerHTML = tr_name;
	document.getElementById("TR" + tr_num).appendChild(document.createElement("p"));
	document.getElementById("TR" + tr_num).children[1].innerHTML = "<span>erstellt am: </span>" + tr_date;
	document.getElementById("TR" + tr_num).appendChild(document.createElement("a"));
	document.getElementById("TR" + tr_num).children[2].innerHTML = "X";
	document.getElementById("TR" + tr_num).children[2].id = "TR" + tr_num + "löschen";
	document.getElementById("TR" + tr_num).children[2].onclick = function() {TR_löschen("TR" + tr_num, trid)};
	document.getElementById("TR" + tr_num).children[0].onclick = function() {TR_bearbeiten(trid)};
	document.getElementById("TR" + tr_num).appendChild(document.createElement("h6"));
	document.getElementById("TR" + tr_num).children[3].innerHTML = "<span>Trainingszeitraum: </span>" + tr_activeDate;
	document.getElementById("TR" + tr_num).children[3].onclick = function() {TR_activeDate(trid)};
		if(newTR == 1){
			userTraining = userTraining.concat("TR" + trid + trid + "N=" + tr_name + trid + "Date=" + tr_date + trid + "activeDate=" + tr_activeDate + trid + "ID=/Mo/Di/Mi/Do/Fr/Sa/So" + "_" + trid + ";");
			var tridändern = userTraining.slice(0,2);
			if(tridändern !== ".-"){
				var tridändern2 = tridändern.replace(".","");
				var tridändern3 = parseInt(tridändern2);
				var tridändern4 = tridändern3 + 1;
				var tridändern5 = "." + tridändern4;
				userTraining = userTraining.replace(tridändern, "");
				userTraining = tridändern5.concat(userTraining);
			}else{
				userTraining = userTraining.replace(".-1",".0");
			}
			window.location = "Trainingsplan_reload.php?userTraining=" + userTraining;
		}
}
function TR_löschen(Tr, trid){
	document.getElementById(Tr).parentNode.removeChild(document.getElementById(Tr));
	console.log("HI");
	var pos1 = userTraining.search("TR" + trid);
	var pos2 = userTraining.search("_" + trid + ";") + 3;
	var string = userTraining.slice(pos1, pos2);
	userTraining = userTraining.replace(string, "");
	var tridändern = userTraining.slice(0,2);
	var tridändern2 = tridändern.replace(".","");
	var tridändern3 = parseInt(tridändern2);
	var tridändern4 = tridändern3 - 1;
	var tridändern5 = "." + tridändern4;
	userTraining = userTraining.replace(tridändern, "");
	console.log(tridändern);
	userTraining = tridändern5.concat(userTraining);
	window.location.href = "Trainingsplan_reload.php?userTraining=" + userTraining;
}
function TR_bearbeiten(trid){
	var pos1 = userTraining.search("TR" + trid);
	var pos2 = userTraining.search("_" + trid + ";") + 3;
	var string = userTraining.slice(pos1, pos2);
	window.location.href = "Trainingsplan.php?activeTraining=" + string + "&activeÜbung=none";
}
function TR_activeDate(trid){
	window.location.href = "Trainingsplan_Menu.php?activeDatetrid=" + trid;
}
function TR_activeDatebearbeiten(activedate){
	var trid = TR_activeDatebearbeitenvar;
	var pos6 = userTraining.search(trid + "activeDate=");
	var pos7 = userTraining.search(trid + "ID=");
	if(userTraining.search(activedate) > -1 && activedate !== "zum festlegen klicken"){alert("Dieser Trainingszeitraum wurde schon für ein anderen Trainingsplan bestimmt")}else{
	userTraining = userTraining.replace(userTraining.slice(pos6,pos7), trid + "activeDate=" + activedate);
	window.location.href = "Trainingsplan_reload.php?userTraining=" + userTraining;}
}
function Übunghinzufügen(){
	activeÜbung2 = activeÜbung.slice(0,3);
	document.getElementById("move").innerHTML = "<span>" + Übungsinfo(activeÜbung2, 0, 6).slice(0, Übungsinfo(activeÜbung2, 0, 6).search("<br>")) + "</span>";
	if(document.getElementById("move").innerHTML == "<span></span>"){document.getElementById("move").style.display = "none"}else{catchactive=1}
}
function Trainingsplan_load(){
	var load1 = activeTraining.search("/Mo") + 3;
	var load2 = activeTraining.search("/Di");
	var load3 = activeTraining.slice(load1, load2);
	var load4 = load3.length / 6;
	var a = 0;
	var b = 6;
	var i = 0;
	for (i = 0 / 6; i < load4; i++) {
		document.getElementById("day1").appendChild(document.createElement("div"));document.getElementById("day1").children[i + 1].innerHTML = Übungsinfo(load3, a, b);document.getElementById("day1").children[i + 1].className = "block";
		a = a + 6;
		b = b + 6;
	}
	var load1 = activeTraining.search("/Di") + 3;
	var load2 = activeTraining.search("/Mi");
	var load3 = activeTraining.slice(load1, load2);
	var load4 = load3.length / 6;
	var a = 0;
	var b = 6;
	var i = 0;
	for (i = 0 / 6; i < load4; i++) {
		document.getElementById("day2").appendChild(document.createElement("div"));document.getElementById("day2").children[i + 1].innerHTML = Übungsinfo(load3, a, b);document.getElementById("day2").children[i + 1].className = "block";
		a = a + 6;
		b = b + 6;
	}
	var load1 = activeTraining.search("/Mi") + 3;
	var load2 = activeTraining.search("/Do");
	var load3 = activeTraining.slice(load1, load2);
	var load4 = load3.length / 6;
	var a = 0;
	var b = 6;
	var i = 0;
	for (i = 0 / 6; i < load4; i++) {
		document.getElementById("day3").appendChild(document.createElement("div"));document.getElementById("day3").children[i + 1].innerHTML = Übungsinfo(load3, a, b);document.getElementById("day3").children[i + 1].className = "block";
		a = a + 6;
		b = b + 6;
	}
	var load1 = activeTraining.search("/Do") + 3;
	var load2 = activeTraining.search("/Fr");
	var load3 = activeTraining.slice(load1, load2);
	var load4 = load3.length / 6;
	var a = 0;
	var b = 6;
	var i = 0;
	for (i = 0 / 6; i < load4; i++) {
		document.getElementById("day4").appendChild(document.createElement("div"));document.getElementById("day4").children[i + 1].innerHTML = Übungsinfo(load3, a, b);document.getElementById("day4").children[i + 1].className = "block";
		a = a + 6;
		b = b + 6;
	}
	var load1 = activeTraining.search("/Fr") + 3;
	var load2 = activeTraining.search("/Sa");
	var load3 = activeTraining.slice(load1, load2);
	var load4 = load3.length / 6;
	var a = 0;
	var b = 6;
	var i = 0;
	for (i = 0 / 6; i < load4; i++) {
		document.getElementById("day5").appendChild(document.createElement("div"));document.getElementById("day5").children[i + 1].innerHTML = Übungsinfo(load3, a, b);document.getElementById("day5").children[i + 1].className = "block";
		a = a + 6;
		b = b + 6;
	}
	var load1 = activeTraining.search("/Sa") + 3;
	var load2 = activeTraining.search("/So");
	var load3 = activeTraining.slice(load1, load2);
	var load4 = load3.length / 6;
	var a = 0;
	var b = 6;
	var i = 0;
	for (i = 0 / 6; i < load4; i++) {
		document.getElementById("day6").appendChild(document.createElement("div"));document.getElementById("day6").children[i + 1].innerHTML = Übungsinfo(load3, a, b);document.getElementById("day6").children[i + 1].className = "block";
		a = a + 3;
		b = b + 3;
	}
	var load1 = activeTraining.search("/So") + 3;
	var load2 = activeTraining.search("_");
	var load3 = activeTraining.slice(load1, load2);
	var load4 = load3.length / 6;
	var a = 0;
	var b = 6;
	var i = 0;
	for (i = 0 / 6; i < load4; i++) {
		document.getElementById("day7").appendChild(document.createElement("div"));document.getElementById("day7").children[i + 1].innerHTML = Übungsinfo(load3, a, b);document.getElementById("day7").children[i + 1].className = "block";
		a = a + 6;
		b = b + 6;
	}

}
function Übungsinfo(load3, a, b){
	switch (load3.slice(a,(b-3))) {
		case ",01": var Übung_Name = "Kraftsport1<br><section>" + load3.slice(b-1,b) + " x " + load3.slice((a+3),b-1) + " Wdh.</section>";break;
		case ",02": var Übung_Name = "Kraftsport2<br><section>" + load3.slice(b-1,b) + " x " + load3.slice((a+3),b-1) + " Wdh.</section>";break;
		case ",03": var Übung_Name = "Kraftsport3<br><section>" + load3.slice(b-1,b) + " x " + load3.slice((a+3),b-1) + " Wdh.</section>";break;
		case ",04": var Übung_Name = "Kraftsport4<br><section>" + load3.slice(b-1,b) + " x " + load3.slice((a+3),b-1) + " Wdh.</section>";break;
		case ",05": var Übung_Name = "Kraftsport5<br><section>" + load3.slice(b-1,b) + " x " + load3.slice((a+3),b-1) + " Wdh.</section>";break;
		case ",06": var Übung_Name = "Kraftsport6<br><section>" + load3.slice(b-1,b) + " x " + load3.slice((a+3),b-1) + " Wdh.</section>";break;
		case ",07": var Übung_Name = "Kraftsport7<br><section>" + load3.slice(b-1,b) + " x " + load3.slice((a+3),b-1) + " Wdh.</section>";break;
		case ",08": var Übung_Name = "Kraftsport8<br><section>" + load3.slice(b-1,b) + " x " + load3.slice((a+3),b-1) + " Wdh.</section>";break;
		case ",09": var Übung_Name = "Kraftsport9<br><section>" + load3.slice(b-1,b) + " x " + load3.slice((a+3),b-1) + " Wdh.</section>";break;
		case ",10": var Übung_Name = "Kraftsport10<br><section>" + load3.slice(b-1,b) + " x " + load3.slice((a+3),b-1) + " Wdh.</section>";break;
		default: var Übung_Name = "";
	}
	return Übung_Name;
}
function getWeek(x){
	if(new Date().getDay() == 1){
				var today = new Date();
		    var newdate = new Date();
		    newdate.setDate(newdate.getDate()+6);
				if(x==0){var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();}
				if(x==1){
					today.setDate(today.getDate()+7);
					newdate.setDate(newdate.getDate()+7);
					var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
				}
				if(x==2){
					today.setDate(today.getDate()+14);
					newdate.setDate(newdate.getDate()+14);
					var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
				}
	}
	if(new Date().getDay() == 2){
			var today = new Date();
			today.setDate(today.getDate()-1);
			var newdate = new Date();
			newdate.setDate(newdate.getDate()+5);
			if(x==0){var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();}
			if(x==1){
				today.setDate(today.getDate()+7);
				newdate.setDate(newdate.getDate()+7);
				var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
			}
			if(x==2){
				today.setDate(today.getDate()+14);
				newdate.setDate(newdate.getDate()+14);
				var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
			}
	}
	if(new Date().getDay() == 3){
			var today = new Date();
			today.setDate(today.getDate()-2);
			var newdate = new Date();
			newdate.setDate(newdate.getDate()+4);
			if(x==0){var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();}
			if(x==1){
				today.setDate(today.getDate()+7);
				newdate.setDate(newdate.getDate()+7);
				var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
			}
			if(x==2){
				today.setDate(today.getDate()+14);
				newdate.setDate(newdate.getDate()+14);
				var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
			}
	}
	if(new Date().getDay() == 4){
			var today = new Date();
			today.setDate(today.getDate()-3);
			var newdate = new Date();
			newdate.setDate(newdate.getDate()+3);
			if(x==0){var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();}
			if(x==1){
				today.setDate(today.getDate()+7);
				newdate.setDate(newdate.getDate()+7);
				var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
			}
			if(x==2){
				today.setDate(today.getDate()+14);
				newdate.setDate(newdate.getDate()+14);
				var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
			}
	}
	if(new Date().getDay() == 5){
			var today = new Date();
			today.setDate(today.getDate()-4);
			var newdate = new Date();
			newdate.setDate(newdate.getDate()+2);
			if(x==0){var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();}
			if(x==1){
				today.setDate(today.getDate()+7);
				newdate.setDate(newdate.getDate()+7);
				var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
			}
			if(x==2){
				today.setDate(today.getDate()+14);
				newdate.setDate(newdate.getDate()+14);
				var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
			}
	}
	if(new Date().getDay() == 6){
			var today = new Date();
			today.setDate(today.getDate()-5);
			var newdate = new Date();
			newdate.setDate(newdate.getDate()+1);
			if(x==0){var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();}
			if(x==1){
				today.setDate(today.getDate()+7);
				newdate.setDate(newdate.getDate()+7);
				var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
			}
			if(x==2){
				today.setDate(today.getDate()+14);
				newdate.setDate(newdate.getDate()+14);
				var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
			}
	}
	if(new Date().getDay() == 0){
			var today = new Date();
			today.setDate(today.getDate()-6);
			var newdate = new Date();
			newdate.setDate(newdate.getDate()+0);
			if(x==0){var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();}
			if(x==1){
				today.setDate(today.getDate()+7);
				newdate.setDate(newdate.getDate()+7);
				var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
			}
			if(x==2){
				today.setDate(today.getDate()+14);
				newdate.setDate(newdate.getDate()+14);
				var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
			}
			if(x==3){
				today.setDate(today.getDate()+21);
				newdate.setDate(newdate.getDate()+21);
				var week = today.getDate() + "." + (today.getMonth()+1) + "." + today.getFullYear() + " - " + newdate.getDate() + "." + (newdate.getMonth()+1) + "." + newdate.getFullYear();
			}
	}
return week;
}
