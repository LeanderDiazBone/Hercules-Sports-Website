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
							<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Hockey</a> - Trainer</div>
		<div id="TEXT">
			<h1>Trainer</h1>
      <p><span class="firstletter">D</span>ie Aufgaben eines Hockeytrainers sind sehr vielfältig und umfangreich. Unterstützt wird er daher meist durch einen Teambetreuer, der sozusagen die ,,rechte Hand‘‘ des Trainers ist. Allerdings fallen trotzdem die meisten Aufgaben auf den Trainer zurück:</p>
      <div class="Absatz50">
        <ol>
          <li>Leitung des Trainings</li>
          <li>Kontaktperson für Spieler und Interessenten</li>
          <li>Scouting (dt. Sichtung) von Nachwuchsspielern und deren Aufnahme in den Verein</li>
          <li>ständiger und enger Kontakt mit dem Vorstand und dem Abteilungsleiter</li>
          <li>Planung des Trainings</li>
          <li>Kontrolle und Überblick über die Spielpraxis</li>
          <li>sonstige wichtige Entscheidungen in Kontakt mit dem Sportvorstand</li>
        </ol>
      </div>
      <img class="Bild50"src="Bilder/Trainer.jpg"/>
      <p>Natürlich muss er auch einige Fähigkeiten aufweisen, wie zum Beispiel Teamfähigkeit, Kommunikationsfähigkeit, hockeyspezifische Fachkenntnisse usw. Diese werden einem Hockeytrainer aber alle in einer Ausbildung beigebracht.</p>
      <p>Unterstützung erhält der Trainer meist durch einen <b>Teambetreuer</b>, welcher dem Trainer einige Aufgaben abnimmt:</p>
      <ul>
        <li>er sorgt dafür, dass der Bezug und die Kommunikation zur Mannschaft gepflegt sind</li>
        <li>er ist Ansprechpartner des Teams und klärt aufkommende Fragen</li>
        <li>er versorgt die Spieler während des Spiels</li>
        <li>er verantwortet die Passkontrolle und die Materialien wie Trikots usw.</li>
        <li>der Teambetreuer sorgt dafür, dass die Spieler rechtzeitig von den Terminen erfahren</li>
        <li>Mitspracherecht bei Angelegenheiten bezüglich der Mannschaft</li>
      </ul>
    </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
