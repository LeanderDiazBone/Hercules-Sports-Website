<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Basketball.js"></script>
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
			include("Basketball_Unterlinks.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
							<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Basketball</a>Spielfeld</div>
		<div id="TEXT">
      <h1>Die Spielfeldlinien</h1>
	  <p><span class="firstletter">D</span>ie <b>Grundlinie</b> im Basketball rahmt das gesamte Spielfeld an den Enden und Seiten ein. Wird sie von einem Spieler überschritten, wird der Spielzug abgebrochen. </p>
    <p>Das Basketballfeld wird durch eine <span style="background-color:black;">Mittelfeldlinie</span> getrennt, die das Spielfeld in „Vorfeld“ und „Rückfeld“ unterteilt.</p>
    <p>In jeder Spielhälfte gibt es eine <span style="background-color:blue;">Dreipunktelinie</span> mit einem Radius von 6.75 Metern. Ist man <u>innerhalb</u> dieser Linie zählt der Treffer 2 Punkte und ist man außerhalb erhält das Team 3 Punkte.</p>
    <p>Das Rechteck innerhalb der Dreipunktelinie nennt man <span style="background-color:#B40486;">Zone</span>, in der sich der Gegner nur 3 Sekunden aufhalten darf. Geschlossen wird die Zone durch die <span style="background-color:#DF01D7;">Freiwurflinie</span>, von der die Spieler Freiwürfe ausführen.</p>
    <div class="InfoKastenMitte">
      <p>Du willst mehr über die Regeln im Basketball wissen? <a class="TextLinkBold"href="Regeln.php">Dann klick hier!!</a></p>
    </div>
    <p>Der <b>Anwurf</b> (Beginn des Spiels) des Spiels wird im Mittelkreis ausgeführt. Der Ball wird vom Schiedsrichter in den <span style="background-color:brown">Mittelkreis</span> geworfen, in dem sich aus jedem Team ein Spieler befindet, der versucht den Ball in seine Hälfte zu befördern.</p>
    <p>Direkt unter dem Korb befindet sich ein <span style="background-color:red">„No-charging„ Halbkreis</span>, dort werden Bestimmte Fouls wie ,,Anrempler‘‘ nicht geahndet.</p>
    <img class="Bild75zentrum"src="Bilder/Spielfeld.jpg"/>
    </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
