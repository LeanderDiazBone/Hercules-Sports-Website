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
		<h1 id="Background_H1" style="left:-50px;font-size: 90px">Leichtathletik</h1>
		<div id="Background1_div2" style="width: 100%;height:100vh"></div>
		<div id="Sportarten_TextContainer">
			<div id="TEXT">
				<p style="padding-top: 50px;"><a style="text-decoration: underline; cursor: pointer; color: white" href="Technik.php" >Hier findest du mehr zur Technik</a></p>
				<p>Die Leichtathletik hat die grundlegenden menschlichen Bewegungsabläufe des Laufens, Springens und Werfens innerhalb eines umfangreichen Regelwerks zusammengefasst und ist das Herzstück der Olympischen Spiele.</p>
				<p>Die Leichtathletik ist eine Individualsportart. Für Leistungssportler steht die persönliche Leistung im Mittelpunkt. Im Wettkampf geht es um die beste Leistung, die über Sieg und Platzierung entscheidet.</p>
				<p>Das Messen der Leistung und alle zu erfüllenden Randbedingungen für die Anerkennung einer Leistung sind in den Internationalen Wettkampfregeln (IWR) für alle Disziplinen der Leichtathletik genau definiert. Die erzielten Leistungen sind durch modernste Techniken exakt messbar und weltweit vergleichbar.</p>
				<img src="Bilder/1.jpg" style="width:100%;max-width:250px;margin-right:100px;float:right"/>
				<p>Wie viele andere Sportarten auch, folgt die Leichtathletik einem Jahreszyklus. Ein typischer Verlauf beginnt mit einer langen Vorbereitungszeit im Winter, bei der gelegentlich Hallenwettkämpfe oder Crossläufe absolviert werden. Hallenwettkämpfe sind dabei eine ,,minimierte‘‘ Form eines Wettkampfs (Bsp. 60m Sprint anstatt 100m). </p>
				<p>Das Sommerhalbjahr ist die eigentliche Wettkampfsaison, in der auch der Saisonhöhepunkt liegt. Das Jahr endet mit einer etwa einmonatigen Pause in der Zeit um Oktober.</p>
				<p>Als Mannschaftssport zeigt sich die Leichtathletik lediglich im Staffellauf.</p>
				<h4 style="text-align:center">Folgend sind nun alle unterschiedlichen Disziplinen dargestellt:</h4>
				<div style="width:100%;text-align:center"><img src="Bilder/Tabelle.png" style="width:100%;max-width:1300px"/></div>
				<div style="width:100%;text-align:center"><img src="Bilder/2.jpg" style="width:100%;max-width:600px;margin-top:50px"/></div>
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
