function getÜbungName(Übungnum,get){
	var activeÜbungen1 = activeÜbungen.slice(activeÜbungen.search("ID=")+3, activeÜbungen.search("_"));
	if(new Date().getDay() == 1){var activeÜbung2 = ['/Mo','/Di']}
	if(new Date().getDay() == 2){var activeÜbung2 = ['/Di','/Mi']}
	if(new Date().getDay() == 3){var activeÜbung2 = ['/Mi','/Do']}
	if(new Date().getDay() == 4){var activeÜbung2 = ['/Do','/Fr']}
	if(new Date().getDay() == 5){var activeÜbung2 = ['/Fr','/Sa']}
	if(new Date().getDay() == 6){var activeÜbung2 = ['/Sa','/So']}
	if(new Date().getDay() == 0){var activeÜbung2 = ['/So','_']}

	var activeÜbungen3 = activeÜbungen1.slice(activeÜbungen1.search(activeÜbung2[0])+3,activeÜbungen1.length-3);
	var activeÜbungen4 = activeÜbungen3.slice(1+(Übungnum * 6), 2+(Übungnum * 6)+1);
	var Übungmaxzahl = activeÜbungen3.length / 6;
		if(Übungmaxzahl == 0){window.location.href='Trainingsplan_Menu.php?Übung_num=error'}
	console.log(Übungmaxzahl);

	document.getElementById('Übungzahl').innerHTML = (parseInt(activeÜbung_num)+1) + "/" + Übungmaxzahl;
	console.log(parseInt(activeÜbung_num));
	if(parseInt(activeÜbung_num) == Übungmaxzahl){document.getElementById('TR_MN_Name').style.display = 'block';document.getElementById('logout').style.display = 'none';document.getElementById('Übungenauswählen').style.display = 'none';document.getElementById('Removeauswahl').style.display = 'none';}
//	alert(activeÜbungen3);
//	alert(Übungnum);
//	alert(activeÜbungen4);

		switch (activeÜbungen4) {
			case "01": var Übung = ["Übung1", ""];break;
			case "02": var Übung = ["Übung2", ""];break;
			case "03": var Übung = ["Übung3", ""];break;
			case "04": var Übung = ["Übung4", ""];break;
			case "05": var Übung = ["Übung5", ""];break;
			case "06": var Übung = ["Übung6", ""];break;
			case "07": var Übung = ["Übung7", ""];break;
			case "08": var Übung = ["Übung8", ""];break;
			case "09": var Übung = ["Übung9", ""];break;
			case "10": var Übung = ["Übung10", ""];break;
			default: var Übung_Name = "";
		}
		if(get=="Name"){return Übung[0];}
}
function Übungrate(rate){
	var activeÜbungen1 = activeÜbungen.slice(activeÜbungen.search("ID=")+3, activeÜbungen.search("_"));
	if(new Date().getDay() == 1){var activeÜbung2 = ['/Mo','/Di']}
	if(new Date().getDay() == 2){var activeÜbung2 = ['/Di','/Mi']}
	if(new Date().getDay() == 3){var activeÜbung2 = ['/Mi','/Do']}
	if(new Date().getDay() == 4){var activeÜbung2 = ['/Do','/Fr']}
	if(new Date().getDay() == 5){var activeÜbung2 = ['/Fr','/Sa']}
	if(new Date().getDay() == 6){var activeÜbung2 = ['/Sa','/So']}
	if(new Date().getDay() == 0){var activeÜbung2 = ['/So','_']}
	var activeÜbungen3 = activeÜbungen1.slice(activeÜbungen1.search(activeÜbung2[0])+3,activeÜbungen1.search(activeÜbung2[1]));
	var activeÜbungen4 = activeÜbungen3.slice(1+(parseInt(activeÜbung_num) * 6), 2+(parseInt(activeÜbung_num) * 6)+1);
	var Übungmaxzahl = activeÜbungen3.length / 6;
	if(activeÜbung_num<Übungmaxzahl){window.location.href='Trainer.php?activeÜbungen=' + activeÜbungen + '&Übung_Num=' + (parseInt(activeÜbung_num)+1) + '&Übung_rate=/' + activeÜbungen4 + "_" + rate + "_" + tag;}else{document.getElementById('TR_MN_Name').style.display = 'block'}
}
