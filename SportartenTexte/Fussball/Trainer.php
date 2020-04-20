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
					<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Fussball</a> - Trainer</div>
					<div style="width:300px;position:absolute;top:450px" id="Untermenü">
					<div style="" class="Unterlinks_H">Tunierarten: </div>
						<div style="font-style:italic" onclick="var a = document.getElementsByTagName('h3')[5].offsetTop; window.scrollTo(0,a - 290)" class="Unterlinks">Cheftrainer</div>
						<div style="" onclick="var b = document.getElementsByTagName('h3')[6].offsetTop; window.scrollTo(0,b - 290)" class="Unterlinks">Co-Trainer</div>
						<div style="" onclick="var c = document.getElementsByTagName('h3')[7].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Torwarttrainer</div>
						<div style="" onclick="var c = document.getElementsByTagName('h3')[8].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Interimstrainer</div>
						<div style="" onclick="var c = document.getElementsByTagName('h3')[9].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Konditionstrainer</div>
					<div style="height:30px;width:5px;background-color:#1473e6;transition:0.5s;position:relative;top:50px" id="Unterlinksshow"></div>
					<p  style="margin:5px; padding:0; margin-top: 150px;font-size:17px;text-align:center;width:200px;cursor:pointer"><a class="Textlinks" onclick="document.getElementById('Unterlinks').style.top= window.innerHeight - 300 + 'px'">Klicke hier für weitere Fußballthemen<br></a></p>
				</div>
				<div id="TEXT">
					<img src="Bilder/Fußball_MB.jpg" style="width:100%;position: relative" id="Background2" class="MB">
					<h1 style="" id="Topic">Arten von Trainer</h1>
						<div style="width:0px;height:1px;background-color:gray;margin-left:auto;margin-right:auto;transition:2s;margin-bottom: 100px" id="STDiv1"></div>
						<p class="AbsatznebenInfo"><span class="firstletter">E</span>in Trainer ist jemand der die Mannschaft leitet, aufstellt und trainiert. Allerdings gibt es nicht nur den Trainer, der während des Spiels an der Seitenlinie steht, sondern auch <b>zusätzliche Trainer</b> die im Hintergrund arbeiten. Die verschiedenen <b>Arten und Aufgaben der Trainer</b> im Bereich <a href="Fußball.html" class="Textlinks">Fußball</a> werden in diesem Bericht kurz zusammengefasst.</p>
						<div class="InfoKastenMitte" style="max-width:1000px">
							<h2>Info:</h2>
							<p>Im amerikanischen Englisch ist ein <i>Trainer</i> der Physiotherapeut einer Mannschaft, während die Aufgaben des deutschen Trainers durch den <i>Coach</i> wahrgenommen werden.</p>
						</div>
						<h3>Cheftrainer:</h3>
						<p><span class="firstletter">D</span>er Cheftrainer übernimmt die Ausbildung der Spieler in seiner Mannschaft. Er verteilt die Aufgaben im Training an sich und seine Kollegen, wie zum Beispiel an einen <b>Co-Trainer</b>. So kann es sein, dass auch der Co-Trainer eine Trainingseinheit übernimmt, falls der Cheftrainer einen anderen Termin wahrnehmen muss. </p>
						<p>Wenn die Mannschaft mehrere Spiele hintereinander verliert, dann ist es meist der Cheftrainer, der die <b>Kritik</b> zu spüren bekommt. Er entscheidet mit welchem <a href="Taktik.html#Spielsystem" class="Textlinks">Spielsystem</a> gespielt wird und bespricht Situationen von verletzten Spielern. Letztendlich entscheidet der Cheftrainer was getan werden muss, allerdings spricht er sich davor gut mit seinen Kollegen ab.</p>
						<div style="width:100%;text-align:center"><img id="Cheftrainer"src="Bilder/Cheftrainer.jpg" class="Textbilder"/></div>
						<h3>Co-Trainer:</h3>
						<p><span class="firstletter">D</span>er CO-Trainer ist der <b>Stellvertreter des Cheftrainers</b> und ist sowohl in den Nationalmannschaften vertreten, als auch in Vereinen. </p>
						<p>Die <b>Aufgaben</b> des Co-Trainers sind es, den Vorgesetzten (Cheftrainer) beim Training und bei Taktiken zu unterstützen. Oft beobachtet er auch das Training und gibt dem Cheftrainer Tipps (Die Aufgaben des Co-Trainers unterscheiden sich hier von Verein zu Verein.).</p>
						<p>Da der Co-Trainer die Mannschaft im Laufe der Jahre sehr gut kennen lernt, kommt es des Öfteren vor, dass er die Mannschaft nach einem <b>Rücktritt des Cheftrainers übernimmt</b>.</p>
						<div style="width:100%;text-align:center"><img id="Co-Trainer"src="Bilder/Co-Trainer.jpg" class="Textbilder"/></div>
						<h3>Torwarttrainer:</h3>
						<p><span class="firstletter">D</span>er Torwarttrainer trainiert die Torwärter der Mannschaft. Er trainiert ihre <b>Reflexe</b> und übt mit ihnen alle möglichen Arten von Ecken, Freistößen und gegnerischen Schüssen. </p>
						<p>Wichtig ist auch, dass er auf alle Situationen von Verletzungen reagieren kann und fähig ist für den nötigen Ersatz zu sorgen. Gibt es nur einen starken Torwart und junge </p>
						<p>Nachwuchstalente, dann ist dieser Zustand so lange in Ordnung, solange sich die Nummer 1 nicht verletzt. Wenn diese aber eine längere Verletzungspause einlegen muss, stellt sich die Frage, ob die jungen Torleute in seine Fußstapfen treten können. </p>
						<h3>Interimstrainer:</h3>
						<p><span class="firstletter">F</span>alls ein Trainer keinen Erfolg mehr hat und er ausgetauscht wird, kann es sein, dass die Mannschaft nicht sofort einen neuen Trainer parat hat. Wenn dies der Fall ist, dann springt ein sogenannter Interimstrainer ein, der die Mannschaft so lange trainiert, bis ein <b>geeigneter Ersatz</b> gefunden wurde.</p>
						<h3>Konditionstrainer:</h3>
						<p><span class="firstletter">D</span>er Konditionstrainer trainiert nicht nur die Ausdauer der Spieler einer Mannschaft, er ist auch für<b> Schnelligkeit und Spielintelligenz</b> zuständig. Zusätzlich kümmert er sich um die Spieler die lange verletzt waren und nun ihre <b>Kondition neu aufbauen</b> müssen.</p>
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
							document.getElementById('Unterlinksshow').style.height='30px'
							if(window.pageYOffset > 0 && document.getElementsByTagName("h3")[6].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "50px";document.getElementsByClassName('Unterlinks')[0].style.fontStyle = "italic"}
							if(window.pageYOffset > document.getElementsByTagName("h3")[6].offsetTop - 300 && document.getElementsByTagName("h3")[7].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "90px";document.getElementsByClassName('Unterlinks')[1].style.fontStyle = "italic"}
							if(window.pageYOffset > document.getElementsByTagName("h3")[7].offsetTop - 300){document.getElementById('Unterlinksshow').style.top = "135px";document.getElementsByClassName('Unterlinks')[2].style.fontStyle = "italic";document.getElementsByClassName('Unterlinks')[3].style.fontStyle = "italic";document.getElementsByClassName('Unterlinks')[4].style.fontStyle = "italic";document.getElementById('Unterlinksshow').style.height='110px'}
						}
						</script>
	</body>
</html>
