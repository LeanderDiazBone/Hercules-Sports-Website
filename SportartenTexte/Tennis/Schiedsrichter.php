<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Tennis.js"></script>
</head>
<body onload="" onscroll="LOAD_TX();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">
	<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
	</div>
	<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed;width: 100%" id="Background1_div"><img src="Bilder/Tennisspielfeld.jpg" id="Background1" style="width:100%;opacity:0.7;position:relative;top: -250px;min-width: 900px"></div>
	<div id="Background1_div2" style="width: 100%"></div>
	<?php
		include("../menuSportarten.php");
	?>
	<?php
		include("Tennis_Unterlinks.php");
	?>
		<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Tennis</a> - Schiedsrichter</div>
		<div id="TEXT">
      <p><span class="firstletter">D</span>er Schiedsrichter im Tennis ist wie in anderen Sportarten auch eine unparteiische Person, die das Tennisspiel leitet.</p>
      <p>Im Gesamten gibt es <b>vier verschiedene</b> Arten von Schiedsrichtern im Tennis: den <b>Hauptschiedsrichter</b>, den <b>Linienrichter</b>, den <b>Netzrichter</b> und den <b>Oberschiedsrichter</b>.</p>
      <p>Wichtige Aufgaben des Schiedsrichterteams sind die Einhaltung der Regeln nach dem offiziellen <a class="TextLinkBold"href="#">Regelwerk</a> und den aktuellen Spielstand für alle sichtbar festzuhalten. Dies hängt mit der Einhaltung der Regeln zusammen, da bei Regelverstoß Punkte an den Gegner verteilt werden können. </p>
      <h3>Hauptschiedsrichter:</h3>
      <div class="Absatz65">
        <p>Der Hauptschiedsrichter ist beim Tennis die Person, die auf den zentral, etwas höher gelegenen Schiedsrichtersitz Platz nimmt. Durch die hohe Sitzposition wird dem Schiedsrichter eine gute <b>Übersicht</b> über das gesamte Spielfeld garantiert und macht ihn zum wichtigsten Schiedsrichter eines Matches.</p>
        <p>Die Aufgaben des Hauptschiedsrichters liegen primär darin, das gesamte Spiel zu leiten. Dabei ist er derjenige der bestimmt, wer die Aufschläge hat, wer Punkte bekommt, wer einen Fehler gemacht hat und was daraus folgt. Zudem hat der Hauptschiedsrichter auch das <b>Vorrecht bei wichtigen Entscheidungen</b> des Spiels, also vor anderen Schiedsrichtern wie dem Linienschiedsrichter oder dem Netzschiedsrichter. </p>
      </div>
      <img class="Bild30"src="Bilder/Hauptschiedsrichter.jpg"/>
      <h3>Linienrichter:</h3>
      <p>Ein weiterer Teil des Schiedsrichterteams im Tennis ist der Linienrichter. Er steht an den Linien des Spielfeldes und muss entschieden, ob der Ball eine Linie berührt hat oder ohne Berührung der Linie ins Aus geflogen ist. Dies ist ein wesentlicher Unterschied, da bei einer Entscheidung auf eine Linienberührung das Spiel weiterläuft. Bei einem Aus ist der Punkt entschieden. </p>
      <p>Als Hilfestellung für den Linienrichter gibt es zudem <b>moderne Systeme</b>, welche mithilfe einer Zeitlupenkamera den genauen Auftrittspunktes <b>millimetergenau</b> bestimmen kann. Dieses System wird aber nur auf Wunsch einer der beiden Spieler eingesetzt um den letzten Zug zu überprüfen. </p>
      <p>Eine weitere Aufgabe des Linienrichters neben dem Überprüfen des Auftrittspunktes, ist, auf Fußfehler beim Aufschlag zu achten. Beim Aufschlag muss man im Tennis hinter der Linie des Feldes stehen, sonst wird dieser als nicht gültig gewertet.</p>
      <p>Die Arbeit des Linienrichters erfordert viel <b>Konzentration</b>, weswegen diese auch regelmäßig während des Spiels ausgetauscht werden.</p>
      <h3>Netzrichter: </h3>
      <p>Der Netzrichter im Tennisspiel besitzt die Aufgabe, dem Hauptschiedsrichter anzuzeigen, ob der Ball das <b>Netz</b> bei einem Aufschlag <b>berührt</b> hat oder nicht. Denn beim Tennis darf der Ball das Netz bei einem Aufschlag <u>nicht</u> berühren. Tut er dies doch und fliegt danach korrekt in das Aufschlagsfeld, dann darf der Aufschlag <b>wiederholt</b> werden. Berührt der Ball jedoch das Netz und fällt danach in einen nicht regulären Bereich, so muss ein <b>zweiter Aufschlag</b> gespielt werden. Wenn auch der zweite Aufschlag falschgespielt wird, dann wird dies als Doppelfehler gewertet wodurch der Gegner einen Punkt erhält.</p>
      <h3>Oberschiedsrichter:</h3>
      <div class="Absatz65">
      <p>Das vierte und letzte Mitglied des Schiedsrichterteams im Tennis ist der Oberschiedsrichter. Während des normalen Spieles hält dieser sich im Hintergrund und hat zuerst keine Funktion. Er kann aber eingefordert werden, wenn ein Spieler mit einer Entscheidung des Hauptschiedsrichters nicht einverstanden ist, was jedoch nicht häufig passiert. In diesem Fall hat der Oberschiedsrichter das letzte Wort und entschiedet über die Situation. </p>
      </div>
      <img class="Bild30"src="Bilder/Oberschiedsrichter.jpg"/>
      <p>Weitere Situationen, bei denen der Oberschiedsrichter einberufen werden kann, sind zum Bespiel einbrechende Dunkelheit oder das Beginnen von starkem Regen. In diesem Falle kann der Oberschiedsrichter, welcher im <b>Kontakt mit der Turnierleitung</b> steht und auch alle nötigen Wetterinfos besitzt, das Spiel unterbrechen oder weiterlaufen lassen.</p>
      <p>Außerdem vergibt auch er die Punkte im Spiel anhand von einer Anzeigetafel auf der sich nach Befehl des Hauptschiedsrichters der Punktestand verändert. </p>
    </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
