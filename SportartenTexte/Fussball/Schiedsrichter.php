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
					<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Fussball</a> - Schiedsrichter</div>
			<div style="width:250px;position:absolute;top:450px" id="Untermenü">
				<div style="" class="Unterlinks_H">INHALT: </div>
				<div style="font-style:italic" onclick="var a = document.getElementsByTagName('h3')[5].offsetTop; window.scrollTo(0,a - 290)" class="Unterlinks">Definition</div>
				<div style="" onclick="var b = document.getElementsByTagName('h3')[6].offsetTop; window.scrollTo(0,b - 290)" class="Unterlinks">Pflichten und Rechte</div>
				<div style="" onclick="var c = document.getElementsByTagName('h3')[7].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Schiedsrichterassistent</div>
				<div style="" onclick="var c = document.getElementsByTagName('h3')[8].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Vierter Offizieller</div>
				<div style="" onclick="var c = document.getElementsByTagName('h3')[9].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Additional Assistant Referees</div>
				<div style="height:30px;width:5px;background-color:#1473e6;transition:0.5s;position:relative;top:50px" id="Unterlinksshow"></div>
				<p  style="margin:5px; padding:0; margin-top: 150px;font-size:17px;text-align:center;width:200px;cursor:pointer"><a class="Textlinks" onclick="document.getElementById('Unterlinks').style.top= window.innerHeight - 300 + 'px'">Klicke hier für weitere Fußballthemen<br></a></p>
		</div>
		<div id="TEXT">
			<img src="Bilder/Fußball_MB.jpg" style="width:100%;position: relative" id="Background2" class="MB">
			<h1 style="" id="Topic">Schiedsrichter</h1>
				<h3 style="opacity:0"></h3>
				<p style="">Schiedsrichter leiten ein Fußballspiel und sorgen für die <b>Regeleinhaltung</b> auf dem Platz, sowie neben dem Platz. Um sich durchzusetzen kann der Schiedsrichter Spiel- und <b>Disziplinstrafen</b> an Spieler auf dem Platz, neben dem Platz verteilen oder an den Trainer verteilen. Mit dem Betreten des Spielfeldes, der sogenannten <b>Platzbegehung</b>, geht die Gewalt an die Schiedsrichter über und endet mit dem Verlassen des Platzes. Allerdings muss er auch alle Unsportlichkeiten melden welche nach dem Spiel begannen wurden. </p>
				<div class="InfoKasten20" style="float:right;margin:0;width:400px;position:relative; left: 100px">
					<div style="position:absolute;height:289px;width:420px;margin-top:-10px;margin-left:-10px;overflow:hidden"><div id="Glanz1" style=""></div></div>
					<h2><b>INFO:</b></h2>
					<p>Wusstest Du, dass wenn ein Einwurf im eigenen Tor landet, ohne dass ein gegnerischer oder eigener Spieler den Ball berührt hat, das Tor <b>nicht</b> zählt?</p>
				</div>
				<p>Der Schiedsrichter kann unterschiedliche Strafen verhängen:  Mit der <b>Gelben Karte</b> zeigt er dem Spieler, der eine Regel missachtet hat, eine Verwarnung an. Sollte dieser Spieler danach ein weiteres Foul ausführen, kommt die <b>Gelb-Rote Karte</b> zum Einsatz welche den Spieler vom Platz verweist. Zusätzlich ist auch eine direkte <b>Rote-Karte</b> möglich, die den Spieler ohne vorherige Verwarnung dauerhaft vom Platz verweist. Auf Unsportlichkeiten der Spieler kann der Schiedsrichter indirekte <a href="Regelwerk.html#LinksÜStandartsituationen"class="Textlinks">Freistöße oder Elfmeter</a> verteilen. Diese sind abhängig von der Art und dem Ort des Fouls. </p>
				<p>Auch die <b>Trainer</b> können verwarnt oder vom Platzrand verwiesen werden, wenn sie sich nicht regelgemäß verhalten. Dies wird jedoch ohne gelbe oder rote Karten, sondern mündlich dem Trainer mitgeteilt.</p>
				<p>Der Schiedsrichter ist ebenfalls dafür verantwortlich zu überprüfen ob die Sportausrüstung vollständig ist und ob der Platz in spielbarer Verfassung ist, darunter fallen auch Löcher in Tornetzten.</p>
				<div style="width:100%;text-align:center"><img id="FußballSpiel" class="Textbilder" src="Bilder/Spiel.jpg"/></div>
				<h3>Pflichten und Rechte:</h3>
				<p>Der Schiedsrichter muss...</p>
				<ul>
					<li>die <a href="Regelwerk.html"class="Textlinks">Spielregeln</a> durchsetzen</li>
					<li>das Spiel, mit Hilfe der anderen Schiedsrichter, kontrollieren</li>
					<li>Aufzeichnungen über das Spiel machen</li>
					<li>die Fortsetzung des Spiels überwachen und anzeigen</li>
				</ul>
				<p>…Maßnahmen…</p>
				<ul>
					<li>bei Fouls im physischen (körperlichen) wie auch taktischen Bereich Maßnamen ergreifen</li>
					<li>auf Hinweis anderer Offiziellen über Ereignisse entscheiden, die er selbst nicht gesehen hat</li>
					<li>bei Fehlverhalten der Spieler, Bestrafungen in Form von Verwarnungen und Strafen verhängen</li>
					<li>bei Fehlverhalten Bestrafungen in Form von Freistößen und Strafstößen ver-hängen</li>
				</ul>
				<p>Weitere Aufgaben, die der Schiedsrichter abdeckt sind, dass er bei Fehlverhalten der Spieler, selbst entscheidet wie groß das Fehlverhalten, wie zu Beispiel Foul oder Beleidigung war. Dann muss er nach eigenem Empfinden entscheiden wen er wie stark bestraft. Es gibt die Möglichkeit einer einfachen <b>mündlichen Verwarnung</b>, welche aber keine verbindlichen Auswirkungen hat. Eine weitere Möglichkeit ist, bei einem größeren Fehlverhalten, die gelbe Karte, die die letzte Verwarnung vor der roten Karte, dem Platzverweis, ist. </p>
				<p>Im Falle einer Verletzung, hat der Schiedsrichter die Möglichkeit, das Spiel solange weiterlaufen zu lassen, bis der Ball im Aus ist. Wenn die Verletzung jedoch schwerer ist, kann er das Spiel unterbrechen und einen <b>Abtransport vom Spielfeld</b> veranlassen.</p>
				<p>Weitere Rechte die der Schiedsrichter hat, sind die Regulierung des Flutlichtes, bei Außeneingriffen von den Zuschauern die Spielunterbrechung und unbefugten Personen das Betreten des Spielfeldes zu verbieten.</p>
				<p id="gesTeamSchie">In Spielen der höheren Spielklassen, leitet ein <b>gesamtes Team von Schiedsrichtern</b> das Spiel: </p>
				<h3 >Schiedsrichterassistenten</h3>
				<img style="max-width: 300px;width:100%;float:right;margin-left:50px;margin-top:0px;box-shadow:2px 2px 10px black" src="Bilder/Schiedsrichterassistent.jpg"/>
				<p style="">Seit der Saison 1996/97 werden Linienschiedsrichter Schiedsrichterassistenten genannt. In den höher klassigen Spielen unterstützen den Schiedsrichter zwei Assistenten, die mit ihren Fahnen anzeigen, wann der Ball im Aus ist und welche Mannschaft einen Einwurf oder eine Ecke erhält. Außerdem zeigen sie das Abseits an. Für jede Spielhälfte ist ein Assistent zuständig.</p>
				<h3 >Vierter Offizieller</h3>
				<p class="AbsatznebenInfo">Der Vierte Offizielle kontrolliert die vom Schiedsrichter festgelegten <b>Auswechslungen</b> und zeigt die <b>Nachspielzeit</b> mithilfe einer elektronischen Tafel an. Falls sich der Trainer oder Auswechselspieler daneben benimmt, ist es seine Aufgabe für Ruhe und Ordnung zu sorgen. </p>
				<div class="InfoKasten20" style="float:right;margin:0;width:400px;margin-right: 100px;margin-left:100px;margin-top:0px;overflow:hidden;position:relative; left: 300px">
					<div style="position:absolute;height:249px;width:420px;margin-top:-10px;margin-left:-10px;overflow:hidden"><div id="Glanz1" style=""></div></div>
					<h2><b>INFO:</b></h2>
					<p>Wusstest Du, dass Tore, die durch eine Berührung des Schiedsrichters gefallen sind zählen?</p>
				</div>
				<p>Es kommt selten vor, dass ein Schiedsrichter ausfällt aber wenn dies so ist, dann kann der Vierte Offizielle für ihn einspringen, denn er hat ebenfalls eine <b>Schiedsrichterausbildung</b>. Außerdem hilft er dem Schiedsrichter bei <b>Verwaltungsaufgaben</b> und kontrolliert die Ausrüstung der Spieler die eingewechselt werden. Danach gibt er mit einer Anzeige die Rückennummer des eingewechselten (grüne Zahl) sowie des ausgewechselten (rote Zahl) Spielers bekannt. Allerdrings hat er auf den Spielverlauf keinen Einfluss. </p>
				<h3 >Additional Assistant Referees (,,Torrichter‘‘)</h3>
				<div id="letzterpSchied">
					<img src="Bilder/Torassistent.jpg" style="float:right;width:400px;margin-right:50px;margin-top:100px;margin-left:100px" class="Textbilder"/>
					<p>Die Torrichter positionieren sich jeweils auf der Linie neben dem Tor und entscheiden, ob sich der Ball hinter der Torlinie befindet. Außerdem unterstützen sie den Schiedsrichter, wenn es sich um <b>Entscheidungen im Strafraum</b> handelt.</p>
					<p>Die Torrichter sind eine umstrittene Thematik, denn sie werden selten in Aktion gesehen. Jedoch bieten sie einen <b>Ersatz zu den technischen Hilfsmitteln.</b> Da es jedoch mittlerweile die Torlinientechnik gibt, fällt der Großteil ihrer Aufgaben weg. Der zukünftige Einsatz von Torrichtern steht also in Frage.</p>
				</div>
				<div class="InfoKastenMitte" style="max-width:900px; width: 90%">
				<p>Wusstest Du, dass wenn ein Spieler vor Spielbeginn eine rote Karte erhält, er durch einen Auswechselspieler ersetzt werden darf, damit keine Mannschaft in Unterzahl beginnen muss?
					<br>Du willst mehr über Regeln im Fußball wissen?         <a href="Regelwerk.html" class="Textlinks">Dann klick hier!</a> </p>
				</div>
		</div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}
				</script>
				<script>
				function Unterlinks(){
					if(window.pageYOffset > 350){document.getElementById('Untermenü').style.position = "fixed";document.getElementById('Untermenü').style.top = "100px"}else{document.getElementById('Untermenü').style.position = "absolute";document.getElementById('Untermenü').style.top = "450px"}
					document.getElementsByClassName('Unterlinks')[0].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[1].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[2].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[3].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[4].style.fontStyle = "normal";
					if(window.pageYOffset > 0 && document.getElementsByTagName("h3")[6].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "50px";document.getElementsByClassName('Unterlinks')[0].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h3")[6].offsetTop - 300 && document.getElementsByTagName("h3")[7].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "90px";document.getElementsByClassName('Unterlinks')[1].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h3")[7].offsetTop - 300 && document.getElementsByTagName("h3")[8].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "135px";document.getElementsByClassName('Unterlinks')[2].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h3")[8].offsetTop - 300 && document.getElementsByTagName("h3")[9].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "175px";document.getElementsByClassName('Unterlinks')[3].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h3")[9].offsetTop - 300){document.getElementById('Unterlinksshow').style.top = "215px";document.getElementsByClassName('Unterlinks')[4].style.fontStyle = "italic"}
				}
				</script>
	</body>
</html>
