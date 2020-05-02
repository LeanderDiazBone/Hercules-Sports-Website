<!DOCTYPE HTML>
<html>
<?php
	include("../headSportarten.php");
?>
	<body onload="" onscroll="LOAD_Al();RESIZE()" onresize="LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">

		<?php
			include("../menuSportartenAl.php");
		?>
		<?php
		  include("../../menu_MOBILE.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
		<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed" id="Background1_div"><img src="Bilder/Banner2.png" id="Background1" style="width:100%;opacity:0.7"></div>
		<h1 id="Background_H1" style="left:-30px">Handball</h1>
		<img src="Bilder/MB_Banner2.jpg" style="width:100%;position: relative" id="Background2" class="MB">
		<div id="Background1_div2" style="width: 100%;height: 100vh"></div>
		<div id="Sportarten_TextContainer">
			<div id="TEXT">
				<h3>Technik</h3>
				<p>Du willst deine Technik im Handball verbessern ? ... <a href="Technik.php">dann klicke hier</a></p>
				<h3>Allgemein</h3>
			<p>	Ziel des Spieles beim Handball ist, so viele wie mögliche Tore zu werfen, um somit am Ende mehr Punkte (Tore) wie die gegnerische Mannschaft zu haben.
					Neben dem üblichen Hallenhandball gibt es auch noch Feld- und Beachhandball. Zum ersten Mal wurde bei Olympia 1936 Handball gespielt und ist seither eine feste Disziplin.
					Außerdem gibt es noch die WM und EM-Spiele, in der die Nationalmannschaften gegeneinander spielen. In Deutschland spielen einzelne Vereine in verschiedenen Liegen zum Beispiel Bundesliga, Landesliga, Kreisliga usw. gegeneinander.
					Neben den verschiedenen Liegen in unterschiedlichen Ländern, gibt es auch die Champions League bei der verschiedene internationale Vereine gegeneinander spielen. </p>
				<h3> Regeln: </h3>
				<h4> Spielfeld : </h4>
				<p>Das <b>Handballfeld</b> hat eine Länge von 40m und eine Breite von 20m. Es besitzt 2 Tore (3m breit x 2m hoch) und ist in zwei Hälften durch die <b>Mittellinie</b> geteilt. Um die Tore herum in einem Abstand von 6m ist der <b>Torraum</b>, welcher nur von dem Torwart betreten werden darf.
					Außerdem befindet sich eine Linie im Abstand von 9m vor dem Tor, an der die Freiwürfe ausgeführt werden (Freiwurflinie). Die 7m-Linie dient zur Orientierung beim 7-Meterfreiwurf. Die Torwartgrenzlinie darf der Torwart beim 7-Meterwurf nicht überschreiten.</p>
				<h4> Spielzeit: </h4>
				<p>Die Spielzeit kann je nach Alter variieren: Ab 16 Jahren werden 2x 30min. gespielt. Zwischen 12 und 16 Jahren 2x 25min. und zwischen 8 und 12 Jahren 2x 20 min.. Zwischen den beiden Spielphasen gibt es eine Pause von 10 min, welche in jedem Alter gleich lang ist. </p>
				<h4> Mannschaften: </h4>
				<p>Bei beiden Mannschaften befinden sich 7 Spieler im Spiel, welche aus 6 Feldspielern und 1 Torwart bestehen. Die übrigen Spieler sind Auswechselspieler, welche jeder Zeit und beliebig oft eingewechselt werden können. </p>
				<h3> Angriff: </h3>
				<p>Die Angriffs-Mannschaft versucht die gegnerische Abwehr zu durchbrechen, um so ein Tor zu erzielen. Dabei werden häufig Spielzüge durchgeführt (geprobte Abfolge der Laufwege der Spieler), die die Abwehr verwirren sollen, wodurch Lücken in der Abwehr entstehen können. Jedoch können Spieler auch versuchen, im 1 vs. 1 an der Abwehr vorbei  zukommen</p>
				<h4> Positionen:</h4>
				<p><i>Links/ rechts Außen:</i> <br>Die Spieler versuchen die Abwehr der Gegner zu durchbrechen, indem sie sehr breit stehen, was bedeutet, dass sie weit außen stehen, um so die Abwehr auseinander zu ziehen. Außerdem versuchen sie am Kreis entlang „Einzulaufen“, dabei bieten sie sich den Mitspielern an, um eine optimale Ausgangsposition zu erhalten, um ein Tor erzielen zu können. </p>
				<p><i>Halb Rechts/Links:</i> <br>Die beiden Spieler stehen etwas weiter zurückgezogen (Rückraum), um mit viel Schwung bei Ballannahme auf das Tor laufen zu können und so mit einem Sprungwurf ein Tor zu werfen. </p>
				<p><i>Mitte:</i><br> Der Spieler in der Mitte ist für die Koordination des Spiels im Angriff zuständig. Er sagt Spielzüge an, um so die Gegnerische Mannschaft zu verwirren. Außerdem kann er bestimmen, ob ein schnelles oder langsam aufgebautes Spiel gespielt werden soll. </p>
				<p><i>Kreisläufer:</i><br> Der Kreisläufer versucht sich anzubieten, indem er sich am Kreis entlang freiläuft. Außerdem kann der Spieler auch eine Sperre stellen. </p>
				<h3> Abwehr:  </h3>
				<p>Steht die Mannschaft in der Abwehr, wird versucht, die gegnerische Mannschaft daran zu hindern, ein Tor zu erzielen. Das kann man durch das Provozieren von Fehlern oder durch das Abfangen von Pässen erzielen. Außerdem kann man Würfe abblocken und Stürmerfouls oder Zeitspiel provozieren. </p>
				<p>Die Person, welche die Abwehr koordiniert, ist der Kreisläufer, welcher auch in der Abwehr am Kreis arbeitet und den gegnerischen Kreis daran hindert, sich frei zu laufen. Er muss darauf achten, ob die Außenpositionen einlaufen und muss dies seinen Mitspieler mitteilen. Er sagt auch immer an, wo sich welcher Mann am Kreis befindet.</p>
				<div style="width:100%;text-align:center"><img src="Bilder/Handball.jpg" class="Textbilder" id="Handball" width="700px"></div>
			</div>
				<?php
						include("../footerSportarten.php")
					 ?>
		</div>
		<script> window.onload = function load(){
				LOAD_ALL();
				LOAD_Al();
				RESIZE();
				}
				</script>
	</body>
</html>
