<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Volleyball.js"></script>
</head>
	<body onload="" onscroll="LOAD_TX();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
		<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed;width: 100%" id="Background1_div"><img src="Bilder/Beachvolleyball.jpg" id="Background1" style="width:100%;opacity:0.7;position:relative;top: -250px;min-width: 900px"></div>
		<div id="Background1_div2" style="width: 100%"></div>
		<?php
			include("../menuSportarten.php");
		?>
		<?php
			include("Volleyball_Unterlinks.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
							<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Volleyball</a> - Regeln</div>
		<div id="TEXT">
      <h1>Volleyball Grundregeln</h1>
			<p><span class="firstletter">I</span>m Volleyball geht es grundsätzlich darum, den Ball auf den Boden des gegnerischen Feldes zu bringen. In seiner eigenen Spielhälfte sollte dies dementsprechend verhindert werden. </p>
      <p><b><u>Des Weiteren gilt:</u></b></p>
      <ul>
        <li>2 Mannschaften mit jeweils 6 Spielern treten gegeneinander an.</li>
        <li>Das Spielfeld teilt sich in jeweils 2 Spielhälften mit einer Größe von 9*9 Metern.</li>
        <li>Die beiden Spielhälften werden von einem Netz getrennt, welches bei den Männern 2,43 Meter und bei den Frauen 2,24 Meter hoch ist.</li>
        <li>Der Ball darf <b>mit allen Körperteilen berührt</b> werden, wird er aber zu lange berührt, zählt dies als Festhalten und somit als Fehler und somit Punkt für den Gegner.</li>
        <li>Bei jedem Ballwechsel stehen dem Team <b>3 Ballberührungen</b> zur Verfügung um den Ball über das Netz zu bringen. Das <a class="TextLinkBold"href="Technik">Blocken</a> zählt nicht dazu.</li>
        <li>Ein einzelner Spieler darf den Ball nicht zweimal hintereinander berühren.</li>
        <li>Ein Spiel beinhalten 3 Sätze, wobei die ersten beiden Sätze 25 Punkte betragen und der letzte Satz 15.</li>
        <li>Das Gewinnerteam muss 2 Punkte Vorsprung haben und es gibt keine Punktebegrenzung.</li>
        <li>Der Ball wird mit einem <a class="TextLinkBold"href="Technik">Aufschlag</a> über das Netz ins gegnerische Feld befördert </li>
        <li>Ein Spielzug geht solange, bis der Ball <b>im Spielfeld</b> oder <b>im Aus</b> den Boden berührt oder wenn es eine Mannschaft nicht schafft den Ball regelkonform über das Netz zu befördern.</li>
        <li>Für jeden Ballwechsel wird ein Punkt verteilt.</li>
      </ul>

  </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
