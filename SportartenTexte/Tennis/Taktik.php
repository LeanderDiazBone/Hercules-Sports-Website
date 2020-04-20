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
		<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Tennis</a> - Taktik</div>
		<div id="TEXT">
      <h3>Grundlinienspiel:</h3>
      <p>Beim Grundlinienspiel geht es darum, den Ball in die Feldecke des Gegners zu spielen, die am weitesten vom Gegner entfernt ist; oder in die <b>entgegengesetzte Laufrichtung</b> des Gegners zu spielen. Dadurch wird erreicht, dass der Gegenspieler für jeden Schlag die möglichst größte Strecke zurücklegen muss um den Ball zu spielen. Wird diese Taktik bei mehreren Schlägen hintereinander angewandt, ist der nächste Punkt zumeist sicher. Um den vollen Erfolg zu erzielen, sollte der Ball möglichst schnell und flach gespielt werden, um den Gegner noch weniger Zeit zu lassen.</p>
      <h3>,,Serve and Volley‘‘</h3>
      <div class="Absatz65">
        <p>Bei der Taktik des ,,Serve and Volley‘‘ versucht ein Spieler einen Punkt zu erzielen, indem er während eines Ballwechsels <b>nahe zum Netz vorläuft</b> und dann anschließend versucht den Ballwechsel mit einem Volley zu beenden. Dadurch, dass der Angreifer seinen Abstand zum Netz dauerhaft verkürzt, hat der Gegenspieler nicht mehr die Möglichkeit perfekt auf die Schläge zu reagieren. Somit ist diese Taktik erfolgsversprechend, da fast immer ein Punkt vom Angreifer erzielt wird.</p>
      </div>
      <div style="margin-left:70%;"class="InfoKasten20">
        <p><b>Info: </b><br>Bei einem ,,Volley‘‘ wird der Ball bereits gespielt, bevor er einmal auf dem Boden des Feldes aufkommt.  Der Ball wird direkt aus der Luft gespielt!</p>
      </div>
      <p>Um die Serve and Volley Taktik erfolgreich anwenden zu können sind zwei Varianten des Aufschlages möglich: Zum einen kann der Aufschlag sehr hart und schnell gespielt werden, wodurch die Abwehr des Gegners meist nur ein „Blocken“ des Balles ist. Dadurch, dass der Ball mit langsamer Geschwindigkeit, ohne Drall zurückgespielt werden kann, ergibt sich dem Angreifer die Möglichkeit, mit einem harten Volley den Ballwechsel zu beenden. </p>
      <p>Die zweite Möglichkeit ist den Aufschlag nicht mit großer Härte und Geschwindigkeit, sondern dafür eher <b>präzise</b> und mit viel <b>technischer Genauigkeit</b> zu spielen. Dadurch ist ein Drall des Balles möglich, durch den der Gegner es schwieriger hat, den Ball kontrolliert zurück zu spielen. </p>
      <h3>Inside-Out-Schläge</h3>
      <div class="Absatz65">
        <p>Die Taktik der <b>Inside-Out-Schläge</b> ist eine Möglichkeit das Tempo des Spiels hoch zu halten, indem man <b>Rückhand Schläge vermeidet</b>. Die Schlagart „Rückhand“ bezeichnet den Schlag auf der gegenüberliegenden Seite der starken Hand. Diese Art von Schlägen sind, da sie mit der Rückseite des Schlägers durchgeführt werden nicht so stark wie Schläge mit der Vorhand. Somit geht es bei den Inside-Out-Schlägen darum, immer die Rückhand zu vermeiden, indem um den Schlag „herumläuft“ und damit den meist stärkeren Vorhand-Schlag ausübt, welcher mehr Druck auf den Gegner ausübt und das Tempo hochhält. </p>
      </div>
      <img class="Bild30"src="Bilder/Schläger.jpg"/>
      <h3 style="margin-top:150px;">Chip and Charge</h3>
      <p>Bei dieser Taktik antwortet der Spieler auf einen <b>Aufschlag</b> direkt mit einem <b>Angriffsball</b>. Zudem rückt er danach direkt an das Netz und entscheidet den Ballwechsel durch einen <b>Volley</b>. </p>

      </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
