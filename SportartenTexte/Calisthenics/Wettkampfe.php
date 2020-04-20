<!DOCTYPE HTML>
<html>
<?php
	include("../headSportarten.php");
?>
	<body onload="" onscroll="LOAD_Al();RESIZE()" onresize="LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">

		<?php
			include("../menuSportartenAl.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
		<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed" id="Background1_div"><img src="Bilder/Banner2.png" id="Background1" style="width:100%;opacity:0.7"></div>
		<h1 id="Background_H1" style="left:-70px;font-size: 100px">Wettkämpfe</h1>
		<div id="Background1_div2" style="width: 100%"></div>
		<div id="TEXT">
      <p><span class="firstletter">C</span>alisthenics ist auf dem Vormarsch, jedoch noch nicht in allen Teilen der Welt bekannt. Trotz dessen, bilden sich immer mehr Vereine und Wettkämpfe. In diesem Bericht zeigen wir, wie solche Wettbewerbe ablaufen und zeigen Euch ein paar Beispiele.</p>
      <p>Der größte Wettkampf ist die <b>World Championship</b>, welche jährlich seit 2011 stattfindet. Auch 2018 fand dieser Wettkampf in Moskau statt.</p>
      <h4>Wie wird bewertet?</h4>
      <p>Die Athleten aus den verschiedenen Ländern bekommen die Chance vor den Kampfrichtern zu performen (dt. ,,eine Übung ausführen‘‘). Die Richter geben jedem Teilnehmer eine Bewertung von 0-10 Punkten, wobei jeder Richter auf einen bestimmten Bereich spezialisiert ist den er bewertet. </p>
      <p>Der erste Richter bewertet den <b>statischen Bereich</b>, somit muss er über alle Einzelheiten und Schwierigkeiten der Bewegungen Bescheid wissen. Zu statischen Elementen gehören Holds (dt. ,,Haltungen‘‘ mit einer Dauer von mindestens 3 Sekunden) und langsame Kraftbewegungen, z.B. <a class="TextLinkBold"href="#">Planche oder die Flagge</a>. Allerdings darf der erste Richter nur 10 Punkte geben wenn <u>drei</u> statische Übungen vorgezeigt wurden, bei 2 Übungen dann maximal 6 und bei einer maximal nur 3.</p>
    </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){
				LOAD_ALL();
				LOAD_Al();
				RESIZE();
				}
				</script>
	</body>
</html>
