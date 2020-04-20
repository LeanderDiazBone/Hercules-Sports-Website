<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Hockey.js"></script>
</head>
	<body onload="" onscroll="LOAD_TX();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
		<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed;width: 100%" id="Background1_div"><img src="Bilder/Banner2.jpg" id="Background1" style="width:100%;opacity:0.7;position:relative;top: -250px;min-width: 900px"></div>
		<div id="Background1_div2" style="width: 100%"></div>
		<?php
			include("../menuSportarten.php");
		?>
		<?php
			include("Hockey_Unterlinks.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
							<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Hockey</a> - Taktik</div>
		<div id="TEXT">
			<h1>Taktik</h1>
      <h2>Eishockey: Taktiken und Zonen des Spielfelds</h2>
      <img class="Bild100"src="Bilder/TaktikuZonen.jpg"/>
      <h3>Erste Aufstellung (links auf dem Feld in blau):</h3>
      <p>Diese Aufstellung ist offensivere der beiden; die Absicherung nach hinten ist demnach schwächer. Die Aufstellung ist vor allem für Mannschaften gedacht, die das Spiel dominieren wollen und im Vorteil gegenüber ihren Gegnern sind.</p>
      <h3>Zweite Aufstellung (rechts auf dem Feld in grün):</h3>
      <p>Die zweite Aufstellung ist <b>ausgeglichener</b> als die ,,blaue‘‘ und ist sowie hinten, als auch vorne gut besetzt. Diese Aufstellung ist perfekt für Mannschaften geeignet, die ihren Gegner noch nicht kennen und die gegnerische Taktik erst kennenlernen müssen.</p>
        </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
