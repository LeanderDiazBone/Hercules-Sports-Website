<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Laufsport.js"></script>
</head>
	<body onload="" onscroll="LOAD_TX();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
		<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed;width: 100%" id="Background1_div"><img src="Bilder/Wettkampfstart.jpg" id="Background1" style="width:100%;opacity:0.7;position:relative;top: -250px;min-width: 900px"></div>
		<div id="Background1_div2" style="width: 100%"></div>
		<?php
			include("../menuSportarten.php");
		?>
		<?php
			include("Laufsport_Unterlinks.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
							<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Laufsport</a> - Übungen</div>
		<div id="TEXT">
		<h1>Übungen</h1>
				<video src="Bilder/Anfersen.mp4" autoplay controls class="Video_Laufen"></video>
    <h4>Anfersen:</h4>
    <p>-	Beine nacheinander nach hinten zum Gesäß führen<br>-	Zehenspitzen anziehen und Bewegungen dynamisch und mit hoher Frequenz durchführen<br>-	in der Hüfte leicht nach vorne kippen<br>-	Mitschwingen der Arme<br></p>
		<video src="Bilder/Kniehebelauf.mp4" autoplay controls class="Video_Laufen"></video>
		<h4>Kniehebelauf:	</h4>
    <p>-	Zwischentritt mit dem Fuß auf den Boden<br>-	freies Spielbein vor dem Körper in kreisartiger Bewegung nach vorne aufsetzen</p>
		<video src="Bilder/Fußgelenkarbeit.mp4" autoplay controls class="Video_Laufen"></video>
		<h4>Fußgelenksarbeit:</h4>
    <p>-	aufrechte Haltung<br>-	auf die Zehenspitzen gehen und beginnen von der Zehenspitze zur Ferse abzurollen<br>-	Bewegung flüssig ausführen<br>-	Zehenspitze verlässt kaum den Boden</p>
		<video src="Bilder/Skippings.mp4" autoplay controls class="Video_Laufen"></video>
		<h4>Skippings:</h4>
    <p>-	Kniehub bis ca. 70°<br>-	abwechselnd mit hoher Frequenz<br>-	Anziehen der Zehenspitzen und landen auf vorderen Teil des Fußes</p>
		<video src="Bilder/Steigerungslauf.mp4" autoplay controls class="Video_Laufen"></video>
		<h4>Steigerungslauf:</h4>
    <p>-	Beginnen mit langsamen Lauftempo, Steigerung bis Vollsprint<br>-	bestenfalls ca. 80-100m leicht bergauf</p>
		<video src="Bilder/Rückwärtslauf.mp4" autoplay controls class="Video_Laufen"></video>
		<h4>Rückwärtslaufen:</h4>
    <p>-	beim Rückwärtslaufen Fuß möglichst hoch zum Gesäß ziehen/anheben</p>
		<h4>Überkreuzlauf:</h4>
				<video src="Bilder/Überkreuzlaufen.mp4" autoplay controls class="Video_Laufen"></video>
    <p>-	seitlich Laufen und Beine abwechselnd vor und hinter dem Körper überkreuzen<br>-	Drehung erfolgt aus der Hüfte<br>-	Oberkörper bleibt seitlich der Laufrichtung; Arme gestreckt<br>-	beidseitiges Training</p>
		<video src="Bilder/SeitensprüngeSeitgalopp.mp4" autoplay controls class="Video_Laufen"></video>
		<h4>Seitensprünge:</h4>
    <p>-	seitliche Körperstellung zur Laufrichtung<br>-	abwechselnd werden durch seitliche Sprünge Beine gestreckt und wieder angezogen</p>
		<h4>Laufsprünge:</h4>
    <p>-	kräftiges Abdrücken beim Laufen um übertrieben Lange Flugphase zu erreichen<br>-	Körper ist nach vorne geneigt<br>-	Arme werden kräftig eingesetzt<br>-	ca. 100m lang </p>
		<video src="Bilder/Hopserlauf.mp4" autoplay controls class="Video_Laufen"></video>
		<h4>Hopserlauf:	</h4>
    <p>-	Hopser durch schnelles Abdrücken<br>-	hohe Knie<br>-	Arme betonen Hopser mit<br>-	starker Fußabdruck</p>
    <img id="WaldJoggerin"src="Bilder/WaldJoggerin.jpg"/>
    </div>
			<div style="width:100%;height:0px;"></div>
				<?php
					include("../footerSportarten.php")
				 ?>
<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
