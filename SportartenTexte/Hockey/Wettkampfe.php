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
							<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Hockey</a> - Wettkämpfe</div>
		<div id="TEXT">
			<h1>Wettkämpfe</h1>
      <p><span class="firstletter">I</span>m Eishockey gibt es mehrere internationale Turniere und Wettkämpfe von unterschiedlicher Größe und Wichtigkeit. Der größte und bekannteste Wettkampf sind die <b>Olympischen Spiele</b>, die von der Internationalen Eishockey-Föderation (International Ice Hockey Federation – IIHF) als wichtigster Wettkampf eingestuft werden. Darauf folgen die <b>Weltmeisterschaften</b>, welche vor allem für die Europäer sehr wichtig sind. Da die nordamerikanische National Hockey League keine Pausen für Weltmeisterschaften einlegt, ist das Ansehen dieser Turniere in Kanada und den USA relativ gering. Aufgrund dessen ist der ,,World Cup of Hockey‘‘ der zweitwichtigste Wettkampf vor den Weltmeisterschaften. Weitere Vereinsturniere wären <b>Champions Hockey League</b>, indem die besten internationalen Teams gegeneinander antreten. </p>
      <h3>Olympische Eishockey Turniere:</h3>
      <p>1914 wurde die Sportart Eishockey in das olympische Programm aufgenommen. Da die Olympischen Spiele aufgrund des ersten Weltkrieges in Berlin nicht stattfinden konnten, war 1920 die Premiere. In den olympischen Spielen wurde nach den kanadischen Regeln gespielt, mit einer Scheibe als „Ball“.</p>
      <h3>World Cup of Hockey:</h3>
      <p>Dieses Turnier ist Nachfolger von den Canada Cups und wird von der National Hockey League, National Hockey League Players’ Association und internationalen Eishockey-Föderation IIHF organisiert. Das erste Mal wurde der World Cup of Hockey 1996 ausgetragen und er war deshalb so beliebt, da auch die kanadischen Profispieler daran teilnehmen konnten. </p>
      <h3>Eishockey Weltmeisterschaften</h3>
      <p>Von der internationalen Eishockey-Föderation IIHF organisiert, finden die Weltmeisterschaften seit 1920 statt. Die Dauer beträgt 2 Wochen und bis auf eine Pause während des Zweiten Weltkrieges findet der Wettkampf auch regelmäßig statt. </p>
      <h3>Champions Hockey League</h3>
      <p>Die Champions Hockey League ist das ,,höchste‘‘ europäische Turnier, welches seit 2014 ausgetragen wird. Es löste den IIHF European Champions Cup ab, welcher davor das höchst gestellte europäische Turnier war. Der IIHF European Champions Cup wurde vor allem deswegen abgelöst, da die Finanzkrise anhielt und die Sponsoren absagten und man somit keine Prämien für die Teams hatte. </p>
      <p>Der Aufbau des Turniers begann mit der Aufteilung der <b>48 Mannschaften</b> in 16 Gruppen, aber seit 2017/2018 sind es 8 Gruppen à 4 Mannschaften. In der Gruppe treten die Mannschaften in Hin- und Rückrunde gegeneinander an. Die zwei besten Mannschaften in einer Gruppe kommen weiter in die K.O.- Phase. In der K.O.- Phase wird wieder mit Hin- und Rückspiel gespielt, aber das Finale wird in einem Spiel ausgetragen.</p>
      <p>Qualifiziert sind pro Liga:</p>
      <ul>
        <li>Titelverteidiger der CHL</li>
        <li>Meister der Liga</li>
        <li>Hauptrundensieger</li>
        <li>Hauptrundenzweiter</li>
        <li>Finalist der Play-Offs</li>
        <li>Halbfinalisten der Play-Offs (nach Platzierung der Hauptrunde) </li>
      </ul>
      <img style="margin-top:100px;"class="Bild75zentrum"src="Bilder/Icehockey.jpg"/>
        </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
