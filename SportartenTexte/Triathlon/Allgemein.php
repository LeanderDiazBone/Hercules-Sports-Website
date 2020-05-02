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
		<h1 id="Background_H1" style="left:-50px">Triathlon</h1>
		<div id="Background1_div2" style="width: 100%;height:100vh"></div>
		<div id="Sportarten_TextContainer">
			<div style="width:100%;text-align:center;height:300px;margin-bottom: 200px">
				<div style="margin-left:0%" class="UnterlinksSportarten3">
					<h3 style="" class="UnterlinksSportarten_h">Disziplinen</h3>
					<div  class="UnterlinksSportarten_li">
						<li><a href="Disziplinen.php">Schwimmen</a></li>
						<li><a>Radfahren</a></li>
						<li><a href="">Laufen</a></li>
						<li><a href="">Der Wechsel</a></li>
					</div>
					<img src="Bilder/Unterlink_5.png" width="40px" style="margin-top:50px"></img>
				</div>
				<div style="margin-left:20%" class="UnterlinksSportarten3">
					<h3 style="" class="UnterlinksSportarten_h">Athleten</h3>
					<div style=""  class="UnterlinksSportarten_li">
						<li><a href="Profiteams.php">Profiteams</a></li>
						<li><a href="Athleten.php">Athleten</a></li>
						<li></li>
					</div>
					<img src="Bilder/Unterlink_1.png" width="40px" style="margin-top:105px"></img>
				</div>
				<div style="margin-left:40%" class="UnterlinksSportarten3">
					<h3 style="" class="UnterlinksSportarten_h">Wettkämpfe</h3>
					<div  class="UnterlinksSportarten_li">
						<li style="padding-top:15px"><a href="Trainer.php">Langdistanz</a></li>
						<li><a href="">Mitteldistanz</a></li>
						<li><a href="">Olympische Distanz</a></li>
						<li><a href="">Sprintdistanz</a></li>
					</div>
					<img src="Bilder/Unterlink_2.png" width="40px" style="margin-top:40px"></img>
				</div>
				<div style="margin-left:60%" class="UnterlinksSportarten3">
					<h3 style="" class="UnterlinksSportarten_h">Training und Ernährung</h3>
					<div  class="UnterlinksSportarten_li">
						<li style="padding-top:15px"><a href="Regelwerk.php#ÜberschriftSpielfeld">Trainingspläne</a></li>
						<li><a href="">Prinzipien</a></li>
						<li><a href="">Triathletenernährung</a></li>
						<li><a href="">Wettkampfversorgung</a></li>
					</div>
					<img src="Bilder/Unterlink_3.png" width="40px" style="margin-top:40px"></img>
				</div>
				<div style="border-right: none;margin-left:80%" class="UnterlinksSportarten3" onclick="window.location.href = '../Homeshop.html'">
					<h3 style="" class="UnterlinksSportarten_h">Equipment</h3>
					<div class="UnterlinksSportarten_li">
						<li style="padding-top:15px"><a>Athletenequipment</a></li>
						<li><a>Radfahren</a></li>
						<li><a>Laufen</a></li>
						<li><a>Schwimmen ...</a></li>
					</div>
					<img src="Bilder/Unterlink_4.png" width="40px" style="margin-top:50px"></img>
				</div>
			</div>
			<div id="TEXT">
				<h1 style="">Allgemein: </h1>
					<p class="TXCenter"> Triathlon-<a class="Textlinks" href="Triathlon/TriathlonDisziplinen.html#Schwimmen">Schwimmen</a>, <a class="Textlinks" href="Triathlon/TriathlonDisziplinen.html#Radfahren">Radfahren</a> und <a class="Textlinks" href="Triathlon/TriathlonDisziplinen.html#Laufen">Laufen</a> und alles drei hintereinander?</p>
					<p class="TXCenter">Klingt im ersten Augenblick an sich für viele Menschen unmöglich und sehr anstrengend. Doch viele Menschen betreiben diesen Sport als Freizeitaktivität und manche üben ihn sogar als Beruf aus. </p>
					<p class="TXCenter">Momentan ist der Sport noch nicht so populär wie zum Beispiel Fußball, etc. wird zurzeit aber immer beliebter.</p>
					<p class="TXCenter">Man unterscheidet in Sprintdistanz(750m/20km/5km), Kurz-auch olympische Distanz(1500m/40km/10km), Mitteldistanz(1900m/90km/21,1km) und Langdistanz(3800m/180km/42,195km).</p>
					<p class="TXCenter">Besonders bei Lang und Mitteldistanz sind die Anbieter Ironman und Challenge sehr beliebt.</p>
					<p class="TXCenter">Die Weltmeisterschaft von Ironman auf der Langdistanz findet jedes Jahr im Oktober auf Hawaii statt.</p>
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
