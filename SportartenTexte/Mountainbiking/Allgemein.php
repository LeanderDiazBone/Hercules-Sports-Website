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
		<h1 id="Background_H1" style="left:-20px;font-size: 90px">Mountainbiking</h1>
		<div id="Background1_div2" style="width: 100%"></div>
		<div id="TEXT">
					<p class="TXCenter">Das ,,Mountainbiken‘‘ beschreibt das Fahren auf abseits gelegenen Straßen und Wegen. Gefahren wird dabei mit einem extra dafür konzipierten Fahrrad, dem Mountainbike. Das Mountainbike, oder Geländerad, hat eine stark ausgeprägte Federung und hat meist breite, grobstollige Reifen.</p>
					<p class="TXCenter">Es ist ein Sportgerät und aufgrund dessen nicht wirklich ein Verkehrsmittel, da geforderte Komponenten wie z.B Beleuchtung und Klingel fehlen.</p>
					<div style="width:100%;text-align:center"><img src="Bilder/1.jpg"/></div>
					<h3>Technik und Aufbau eines Mountainbikes</h3>
					<p>Zur Federung des Vorderrades dient eine Federgabel, bei denen in einem Gabelrohr meist die Dämpfung und im anderen Gabelrohr die Federung eingebaut ist. Als Dämpfmedium wird dabei fast immer Öl verwendet. </p>
					<p>Bei der Federung unterscheidet man zwischen Luft- und Stahlfederungen. Beide haben unterschiedliche Funktionen. Luftfederungen sind weicher, sprechen dafür aber nicht so schnell an wie Stahlfederungen.</p>
					<p>Manche Mountainbikes haben neben der normalen Stoßfederung auch eine Hinterradfederung (Hinterbau-Federung). Diese kommt zum Beispiel bei sogenannten Downhill-Mountainbikes vor. </p>
					<h3>Varianten des Mountainbikings</h3>
					<div style="margin-left:75px;">
					<ul class="ListeText" style="margin-top:50px"><b>MTB Cross-Country</b>
						<li >Cross-Country meint das ´querfeldein´ fahren in freiem Gelände</li>
						<li >oftmals als Wettkampf-Disziplin zu finden</li>
					</ul>
					<ul class="ListeText" style="margin-top:50px"><b>Downhill</b>
						<li>Downhill Mountainbiken ist eine extreme Art des Mountainbikings </li>
						<li>anspruchsvolle Abfahrten mit Sprüngen und schwierigen Passagen, die es in sich haben</li>
					</ul>
					<ul class="ListeText" style="margin-top:50px"><b>Alpencross (engl. transalp)</b>
						<li>Alpenüberquerung</li>
					</ul>
					</div>

					<h3>Bauliche Unterschiede</h3>
					<p>Trotz vieler Gemeinsamkeiten unterscheidet man zwischen mehreren Mountainbikes, wobei sich, abhängig vom Verwendungszweck, einige Grundtypen herauskristallisieren können.</p>
						<ul class="ListeText">
							<li>All Mountain (AM)</li>
							<li>Cross-Country (XC/CC)</li>
							<li>Downhill (DH)</li>
							<li>Enduro</li>
							<li>Four Cross (4X), Biker Cross</li>
						</ul>
						<ul class="ListeText">
							<li>Freeride (FR)</li>
							<li>Trial</li>
							<li>Dirt Jump (DJ)</li>
							<li>Pumptrack(PT)</li>
							<li>Fatbikes</li>
						</ul>
					<div style="width:100%;text-align:center"><img src="Bilder/2.jpg" style="margin-top:25px;width:100%;max-width:600px"/></div>
					<h3>Tricks mit dem Mountainbike</h3>
					<p>Nicht nur mit dem BMX sondern auch mit einem Mountainbike kann man bestimmte Tricks vollführen. Um diese Tricks zu üben, gibt es sogenannte Bikeparks. Dies sind extra angefertigte Pisten mit verschiedenen Schwierigkeitsgraden (gut zu vergleichen mit Ski- und Snowboardpisten (Artikel folgen)). </p>
					<p>Die bekanntesten Tricks sind der <b>Wheelie</b>, der <b>Stoppie</b>, der <b>Bunnyhop</b>, der <b>falsche Bunnyhop/falscher Hase</b>, der <b>Manual-Wheelie</b> und der <b>Drop</b>.</p>
					<h4>Ausführliche Erklärungen finden Sie auf folgenden Websiten:</h4>
					<ul class="ListeText">
					<li><a href="https://www.allgaeu-bikers.de">https://www.allgaeu-bikers.de</a></li>
					<li><a href="https://www.outdooractive.com/de/radrouten/5090/">https://www.outdooractive.com/de/radrouten/5090/</a></li>
					</ul>
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
