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
							<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Hockey</a> - Feldhockey</div>
		<div id="TEXT">
			<h1>Feldhockey</h1>
      <p><span class="firstletter">F</span>eldhockey ist eine ähnliche Variante von Eishockey und ist auch als <b>Hockey</b> bekannt. Gespielt wurde die moderne Form des Feldhockeys das erste Mal in England im frühen 19. Jahrhundert. Allerdings hat es seine Ursprünge schon im Mittelalter. Gespielt wird meistens auf Kunstrasen oder natürlichem Gras, mit <b>11 Spielern</b> pro Mannschaft: 10 Feldspielern und einem Torwart. Die <b>Hockeyschläger</b> sind aus Kohlefasern, Glasfasern und Holz. Der Schläger darf den Ball nur mit <u>einer</u> Seite berühren. Die Länge des Schlägers hängt von der Größe des Spielers ab, wobei die Torhüter meist einen anderen Schläger haben als ein Feldspieler. </p>
      <p>Außerdem sind die Torhüter die <u>einzigen</u> Spieler auf dem Platz, die den Ball auch mit dem Körper berühren dürfen (die Hand des Spielers wird als Teil des Schlägers anerkannt). Die Anzahl der Punkte entscheiden über das Ergebnis, Sieg, Niederlage oder Unentschieden. </p>
      <h3>Ausrüstung:</h3>
      <div class="Absatz50">
        <ul>
          <li>Hallenschläger</li>
          <li>Trikot mit Spielernummer</li>
          <li>Stutzen </li>
          <li>Kurze Hose /Rock</li>
          <li>Mundschutz</li>
          <li>Gesichtsschutz</li>
          <li>Schutzhandschuhe</li>
        </ul>
      <p>(Der Torwart hat deutlich mehr Schutz in seiner Ausrüstung)</p>
    </div>
    <img class="Bild50"src="Bilder/Frauenhockey.jpg"/>
    <p>Der Sport Feldhockey ist <b>weltweit beliebt</b>; besonders in Westeuropa, Südasien, Südafrika, Australien, Neuseeland, Argentinien und in den Vereinigten Staaten von Amerika (USA). Die Regeln sind in allen Ländern weitestgehend gleich nur der Name ist oft verschieden, so wird Feldhockey oft auch einfach nur Hockey oder ,,Landhockey‘‘ genannt. Aufgrund seiner Beliebtheit ist Feldhockey auch bei den <b>Olympischen Spielen</b> seit 1908 vertreten.</p>

       </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
