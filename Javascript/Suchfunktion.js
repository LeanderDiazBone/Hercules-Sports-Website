var erfolgreichesuche = 0;
var text = 0;
	function suche(x,Suchbegriff,Verlinkung){
		var eingabeb1 = document.getElementById('eingabe').value;
		var eingabeb2 = eingabeb1.trim();
		var text = eingabeb2.toLowerCase();
		var result = Suchbegriff.search(text);
		if (result > -1 & text.length > 2) {
			erfolgreichesuche = erfolgreichesuche + 1;
			schreib(x,Verlinkung);
}
		if (eingabeb1 =""){
			resetSuche();
		}
}

function suchverlauf(){
	erfolgreichesuche = 0;
	resetSuche();
	suche('Handball','handball.ballsportart.hallenhandball.kreisläufer.spielfeld','Handball');
	suche('Triathlon','triathlon.laufen.radfahren.fahrrad.lauftechnik.laufstile.distanzen.ironman','Triathlonpage');
	suche('Tennis','tennis.spielfeld.ballsportart','Tennis');
	suche('Krafttraining','krafttraining.calisthenics.equipment.anfänger.kraft','Krafttraining');
	suche('Fussball','fussball.spielfeld.ballsportart','Fussball');
	suche('Tischtennis','tischtennis.ballsportart','Tischtennis');
	suche('Leichtathletik','leichtathletik.individualsportart.wettkampf','Leichtathletik');
	suche('Calisthenics','calisthenics','Calisthenics');
	suche('Hockey','hockey.spielfeld','Hockey');
	suche('Mountainbiking','mountainbiking','Mountainbiking');
	suche('Volleyball','volleyball','Volleyball');
}

function schreib(Wort,Verlinkung) {
								var vorhandenertext = document.getElementById('textfeld').innerHTML;
								var neuertext = vorhandenertext  +  '<a href="SportartenTexte/' + Verlinkung + '/Allgemein.php">' + Wort + "</a>" + "<br>"
								document.getElementById('textfeld').innerHTML = neuertext;
								var txtfeldgröße1 = erfolgreichesuche * 50;
								document.getElementById('textfeld').style.height = txtfeldgröße1 + "px";
								document.getElementById("Searchbar").style.height = txtfeldgröße1 + 40 + "px";
								}
								function resetSuche(){
								document.getElementById('textfeld').innerHTML = "";
								document.getElementById('textfeld').style.height = 0;
								document.getElementById("Searchbar").style.height = 40 + "px";
								}
