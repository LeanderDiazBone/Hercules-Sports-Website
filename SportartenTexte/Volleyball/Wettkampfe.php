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
							<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Volleyball</a> - Wettkämpfe</div>
		<div id="TEXT">
			<h1>Wettkämpfe</h1>
      <h3>Olympische Spiele</h3>
			<p><span class="firstletter">V</span>olleyball ist im Hallensport, sowie im Beachvolleyball bei Olympia vertreten. Hallenvolleyball wurde 1964 das erste Mal ausgetragen, wohingegen Beachvolleyball erst 1996 dazu kam. Der Wettkampf war anfangs so aufgebaut, dass alle Mannschaften in einer Gruppe gegen jede andere Mannschaft spielten. </p>
      <p>Zwölf unterschiedliche Teams waren in den Olympischen Spielen im Hallenvolleyball vertreten, allerdings sind es bei Beachvolleyball doppelt so viele, insgesamt 24. Bei Männern sowie bei Frauen ist <b>Russland die Nummer eins</b> in der Gesamtwerttabelle, mit 10 Medaillen bei den Männern und 9 Medaillen bei den Frauen.</p>
      <img class="Bild75zentrum"src="Bilder/OlympischesZeichen.jpg" />
      <h3>Volleyball Champions League</h3>
      <p>Die VCL (Volleyball Champions League) ist das größte Volleyballturnier in Europa, in dem die <b>besten Mannschaften Europas</b> gegeneinander antreten. Die erste Austragung des Turniers fand in der Saison 1995/96 statt. Auch in der <b>Champions League</b> ist eine russische Mannschaft die führende an der Tabellenspitze, nämlich VK ZSKA Moskau mit 13 Titeln bei den Männern und VK Dynamo Moskau bei den Frauen mit 11 Titeln. Teilnahmeberechtigt sind die Meister und die in der nationalen Liga dahinter platzierten Mannschaften. Die genaue Anzahl der Startplätze in den einzelnen Wettbewerben ergibt sich aus einer Rangliste der CEV. Die Deutschen sind momentan auf dem Siebten Platzt und dürfen somit Meister und Vize-Meister qualifizieren.</p>
      <h3>Volleyball Bundesliga</h3>
      <div style="width:45%;"class="Absatz65">
        <p>Auch eine Bundesliga ist als Turnier um Volleyball vertreten und wie in anderen Sportarten ist dies die <b>höchste Liga</b>, die es zu erreichen gibt. Gegründet wurde diese Liga 1974. Pro Team stehen elf Spieler zur Verfügung. Die ersten 6 Mannschaften sind für die <b>Play-Offs</b> qualifiziert und die Mannschaften auf den Plätzen 7 bis 10 für die <b>Pre-Play-Offs</b>. Die Play-Offs sowie die Pre-Play-Offs werden im Viertelfinale über Best-of-three entschieden, während die Halbfinal- und Finalrunden über Best-of-five entschieden werden.</p>
      </div>
      <div style="width:50%;"class="InfoKasten20">
        <p>Auch eine Bundesliga ist als Turnier um Volleyball vertreten und wie in anderen Sportarten ist dies die <b>höchste Liga</b>, die es zu erreichen gibt. Gegründet wurde diese Liga 1974. Pro Team stehen elf Spieler zur Verfügung. Die ersten 6 Mannschaften sind für die <b>Play-Offs</b> qualifiziert und die Mannschaften auf den Plätzen 7 bis 10 für die <b>Pre-Play-Offs</b>. Die Play-Offs sowie die Pre-Play-Offs werden im Viertelfinale über Best-of-three entschieden, während die Halbfinal- und Finalrunden über Best-of-five entschieden werden.</p>
      </div>
      <img class="Bild75zentrum"src="Bilder/VollHallenspiel2.jpg"/>
  </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
