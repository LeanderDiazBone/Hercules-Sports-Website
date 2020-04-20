<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Tischtennis.js"></script>
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
			include("Tischtennis_Unterlinks.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
							<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Tischtennis</a> - Training</div>
		<div id="TEXT">
			<h1>training</h1>
      <p><span class="firstletter">W</span>ie bei jeder Sportart sollte vor dem Training ein <b>Aufwärmtraining</b> stattfinden. Dabei ist es wichtig nicht nur die Beine, sondern auch den Oberkörper aufzuwärmen, da beim Tischtennis auch die <b>Rotation des Oberkörpers</b> und die <b>Armbewegung </b>eine Rolle spielen. Anschließend sollten sich die Spieler einspielen, um ins Spielen zu kommen sich durch die Grundbewegungen noch einmal aufzuwärmen. Danach können Lauf- oder Bewegungsübungen geübt werden. Am Ende des Trainings sollten noch ein Wettkampf oder Wettkampfübungen gespielt werden, um die Spieler noch einmal auf Wettkampfbedingungen vorzubereiten. </p>
      <div class="Absatz65">
        <h3>Einspielen</h3>
        <p>Beim Einspielen sollten beide Spieler solange sich mit Grundschlägen wie Topspin und Konter einspielen, bis beide Spieler sich dabei wohlfühlen und eine gewisse Sicherheit in ihre Schläge gekommen ist. </p>
      </div>
      <img class="Bild30"src="Bilder/2TischtennisschlägeramNetz.jpg"/>
      <h3>Training</h3>
      <p>Beim eigentlichen Training können nun nachdem die Spieler aufgewärmt und eingespielt sind, die Übungen auf höchster <b>Leistung</b> und <b>Präzision</b> gespielt werden. Darum sollte diese Zeit für Übungen genutzt werden, um die Beinarbeit und die Technik der Spieler zu verbessern. Dafür sollten Übungen für 5-8 Minuten pro Seite gespielt werden, um die Übungen und das Trainierte zu verinnerlichen aber trotzdem nicht erschöpft zu sein. </p>
      <p>Eine Übung kann entweder zwischen zwei Spielern, oder mit einem Trainer ausgeführt werden. Das Training mit einem Trainer ist deutlich effektiver, da er einen immer wieder auf <b>Möglichkeiten der Technikverbesserungen</b> hinweisen kann. Außerdem kann er sich besonders auf die Schwächen eines Spielers konzentrieren.</p>
      <div class="InfoKastenMitte">
        <p>Du willst nun gleich loslegen? <a href="Übungen.php">Dann klick hier und lerne ein paar Übungen kennen!</a></p>
      </div>

      </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
