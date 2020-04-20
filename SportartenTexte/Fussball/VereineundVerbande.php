<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Fussball.js"></script>
</head>
	<body onload="" onscroll="LOAD_TX();Unterlinks();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="RESIZE_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">
		<?php
			include("../backgroundSportarten.php")
		?>
		<?php
			include("../menuSportarten.php");
		?>
		<?php
			include("Fussball_Unterlinks.php");
		?>
		<?php
			include("../../menu_MOBILE.php");
		?>
					<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Fussball</a> - Vereine und Verbände</div>
				<div id="TEXT">
					<img src="Bilder/Fußball_MB.jpg" style="width:100%;position: relative" id="Background2" class="MB">
					<h1 style="" id="Topic">Vereine und Verbände</h1>
					<div style="width:0px;height:1px;background-color:gray;margin-left:auto;margin-right:auto;transition:2s;margin-bottom: 100px" id="STDiv1"></div>
					<h3>Definition Fußballverband: </h3>
	        <p><span class="firstletter">E</span>in Fußballverband ist ein <b>Bündnis</b>, in dem regionale, nationale und auch kontinentale <b>Fußballvereine zusammengeschlossen</b> sind.</p>
	        <p>Jeder Verband organisiert <a href="Weltmeisterschaft.html" class="Textlinks">Fußballturniere</a>.  für dessen Mitgliedsvereine und stellt die Schiedsrichter zur Verfügung. Es gibt Fußballverbände auf den unterschiedlichsten Ebenen. Der größte ist der <a class="Textlinks" href="Weltmeisterschaft.html">Weltfußballverband FIFA</a>. </p>
	        <p>Die FIFA ist sozusagen der übergeordnete Verband, der die allgemeinen Regeln bestimmt und das weltgrößte Fußballturnier die der <a class="Textlinks" href="Weltmeisterschaft.html">FIFA-Weltmeisterschaft (WM) </a>organisiert. Der FIFA gehören aktuell <b>211 Nationalverbände</b> an, welche auch gleichzeitig Mitglied von einem der<b> 6 Kontinentalverbände</b> <a class="Textlinks" href="#">(Grafik siehe unten)</a> sein müssen. Die FIFA unterstützt diese 211 Nationalverbände finanziell und ermöglicht Ihnen eine Menge an <b>Rechten und Privilegien</b>. Verpflichtungen dafür, sind das Respektieren der Ideale der FIFA und das Bewerben des Sportes <a class="Textlinks" href="Fußball.html">Fußball</a> im eigenen Land. </p>
					<p>Die <b>UEFA</b> ist der <b>europäische Kontinentalverband</b>. Er umfasst 55 Nationalverbände, aus jedem Land einen. Der deutsche Nationalverband heißt <a class="Textlinks" href="Weltmeisterschaft.html">DFB (Deutscher Fußballverband) </a> </p>
					<p>Die UEFA ist der Ausrichter von zahlreichen Wettbewerben, an denen Nationalmannschaften aus Europa oder nationale Vereinsmannschaften teilnehmen dürfen.</p>
					<p>Nationalmannschaften:<a class="Textlinks" href="Weltmeisterschaft.html#Europameisterschaft"  style="margin-left:100px">UEFA Europameisterschaft</a><br><a class="Textlinks" href="Weltmeisterschaft.html#NationsLeague" style="margin-left:310px">UEFA Nations League</a></p>
					<p>Vereinsmannschaften:<a class="Textlinks" href="Weltmeisterschaft.html#ChampionsLeague" style="margin-left:110px">UEFA Champions League</a><br><a class="Textlinks" href="Weltmeisterschaft.html#EuropaLeague" style="margin-left:310px">UEFA Europa League</a><br><a style="margin-left:310px;cursor:not-allowed">UEFA Super Cup<a></p>
					<p>Zusätzlich gibt es für die Nationalmannschaften die Möglichkeit sich über die Wettbewerbe der UEFA für die <a class="Textlinks" href="Weltmeisterschaft.html">FIFA Weltmeisterschaft</a> zu qualifizieren.</p>
					<p>Der <a class="Textlinks" href="Weltmeisterschaft.html#DFB">DFB (Deutscher Fußballverband)</a> ist der übergeordnete Nationalverband von Deutschland. In dem DFB sind 25 Fußballverbände mit insgesamt mehr als 25.000 Mannschaften in Deutschland.<br>Der DFB veranstaltet den wichtigsten deutschen Fußballwettbewerb, die <b>deutsche Meisterschaft</b>. 18 Mannschaften spielen in der 1. Bundesliga um den Meisterschaftstitel. Jedoch werden auch alle anderen Ligen vom DFB organisiert und geführt. </p>
					<p>Alle Nationalverbände (wie der DFB) veranstalten die nationalen Meisterschaften und die nationalen Ligen. Es gibt nicht nur die hohen Profi-Ligen, wie die 1. Bundesliga, sondern auch Amateurligen.</p>
					<p><span class="firstletter">D</span>as waren jetzt drei Beispiele für Weltfußball-, Kontinental- und Nationalverband (<b>FIFA, UEFA und DFB</b>). </p>
					<p>Es gibt noch 5 weitere <b>Kontinentalverbände</b> (AFC, CAF, CONCACAF, CONMEBOL, OFC) und 210 weiter Nationalverbände. </p>
					<div style="width:100%;text-align:center"><img id="Kontinentalverbände"src="Bilder/Kontinentalverbände.png" class="Textbilder"/></div>
					<h3>Wie kann ich in einer Liga spielen? </h3>
					<p><span class="firstletter">D</span>iese Frage lässt sich einfach beantworten. Du kannst in deinem/deiner Dorf/Stadt bzw. Stadt recherchieren, ob es <b>Fußballvereine</b> gibt, denen du <b>beitreten</b> kannst. Anschließend wird ein Spielerpass für dich beantragt und wenn dieser fertig ist bist du spielberechtigt. Jetzt liegt es nur noch daran, ob dein Verein dich in ein <b>Team einteilt</b> und dich spielen lässt. </p>
				</div>
						<?php
							include("../footerSportarten.php")
						 ?>
				<script> window.onload = function load(){PAGELOAD()}
						</script>
	</body>
</html>
