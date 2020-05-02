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
		<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed" id="Background1_div"><img src="Bilder/Banner2.jpg" id="Background1" style="width:100%;opacity:1"></div>
		<h1 id="Background_H1" style="left:-70px;font-size: 110px">Basketball</h1>
		<div id="Background1_div2" style="width: 100%;height:100vh"></div>
		<div id="Sportarten_TextContainer">
			<div style="width:100%;text-align:center;height:300px;margin-bottom: 200px">
				<div style="margin-left:0%;width:25%" class="UnterlinksSportarten3" onclick="window.location.href = 'Schiedsrichter.php'">
					<h3 style="" class="UnterlinksSportarten_h">Schiedsrichter</h3>
					<div  class="UnterlinksSportarten_li">
						<li><a>Ausrüstung</a></li>
						<li><a>Schiedsrichterzahl</a></li>
						<li><a>...</a></li>
					</div>
					<img src="Bilder/Unterlink_3.png" width="40px" style="margin-top:90px" onload="document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'"></img>
				</div>
				<div style="margin-left:25%;width:25%" class="UnterlinksSportarten3" onclick="window.location.href = 'Wettkampfe.php'">
					<h3 style="" class="UnterlinksSportarten_h">Wettkämpfe</h3>
					<div style=""  class="UnterlinksSportarten_li">
						<li><a>Olympia</a></li>
						<li><a>Weltmeisterschaft</a></li>
						<li><a>Nationale Turniere</a></li>
						<li><a>...</a></li>
					</div>
					<img src="Bilder/Unterlink_1.png" width="40px" style="margin-top:50px"></img>
				</div>
				<div style="margin-left:50%;width:25%" class="UnterlinksSportarten3" onclick="window.location.href = 'Spielfeld.php'">
					<h3 style="" class="UnterlinksSportarten_h">Spielfeld</h3>
					<div style=""  class="UnterlinksSportarten_li">
						<li><a>Mittellinie</a></li>
						<li><a>Freiwurflinie</a></li>
						<li><a>Dreipunktelinie</a></li>
						<li><a>...</a></li>
					</div>
					<img src="Bilder/Unterlink_4.png" width="40px" style="margin-top:50px"></img>
				</div>
				<div style="margin-left:75%;width:25%" class="UnterlinksSportarten3" onclick="window.location.href = 'Technik.php'">
					<h3 style="" class="UnterlinksSportarten_h">Technik</h3>
					<div style=""  class="UnterlinksSportarten_li">
						<li><a>Wurfarten</a></li>
						<li><a>Wurftechnik</a></li>
						<li><a>Passarten</a></li>
						<li><a>...</a></li>
					</div>
					<img src="Bilder/Unterlink_2.png" width="40px" style="margin-top:50px"></img>
				</div>
			</div>
			<div id="TEXT">
	      <div class="Absatz65">
				     <p><span class="firstletter">B</span>asketball ist ein Ballsport in dem zwei Mannschaften gegeneinander antreten. Dies findet meistens in der Halle statt und wird pro Team von <b>fünf Feldspielern</b> ausgetragen. Das Ziel der Mannschaften ist es, den Ball in den <b>3.05 Meter hohen Korb</b> der gegnerischen Mannschaft zu befördern. Die Körbe befinden sich an der Schmalseite des Spielfelds. Punkte erzielt man, indem man den Basketball in den Korb befördert, dabei entscheidet die Entfernung ob es drei oder zwei Punkte gibt, allerdings zählt ein <b>Freiwurf</b> als ein Punkt. Dem Trainer stehen maximal 7 Wechselspieler zur Verfügung, mit denen er unbeschränkt oft Wechseln kann. Als Gewinner geht die Mannschaft vom Platzt, die am Ende die meisten Punkte hat.</p>
	      </div>
	      <div style="margin-left:70%;"class="InfoKasten20">
	        <p><b><u>Info:</u></b>Ein Freiwurf ist ähnlich dem Elfmeter im <a href="../Fussball/Allgemein.php">Fußball</a>. Nach Foul eines Spielers, darf ein Spieler der gefoulten Mannschaft den Ball von der Freiwurflinie auf den Korb werfen.</p>
	      </div>
	      <img class="Bild50zentrum" src="Bilder/DunkTry.jpg"/>
	      <p>Der Sport Basketball wurde von dem kanadischen Arzt und Pädagogen <b>James Naismith</b> im <b>Jahr 1891</b> erfunden. Seit 1936 ist Basketball auch eine <b>Olympische Sportart</b> und ist vor allem in den Vereinigten Staaten, China und Südeuropa sehr populär. Wie im Fußball wird alle vier Jahre eine Weltmeisterschaft von dem Weltbasketballverband <b>FIBA</b> ausgetragen. Aufgrund des Weltweiten Interesses an diesem Sport zählen Basketballer zu den <b>bestbezahlten Sportlern der Welt</b>.</p>
	      <p>Auch im Basketball gibt es verschiedene Formen des Spieles:</p>
	      <h4>Streetball</h4>
	      <p>Wie man sich von dem Namen ableiten kann spielt man diese Form von Basketball auf der Straße und zählt eher als Freizeitsportart. Hierbei geht es oft auch um tolle Tricks und um Ansehen zwischen den Spielern (Jugendkultur). </p>
	      <h4>Einradbasketball</h4>
	      <p>Diese Form von Basketball ist nahezu identisch zu der normalen Basketballform, außer dass sich die Spieler auf einem Einrad befinden.</p>
	      <h4>Rollstuhlbasketball</h4>
	      <p>Diese Form von Basketball kam zustande, als Kriegsverletzte ihren Sport trotzdem durchführen wollten. Organisiert und gegründet wurde es von der Organisation International Wheelchair Basketball Federation.</p>
	      <h4>Beachbasketball</h4>
	      <p>Auch hier verrät der Name worum es sich hierbei handelt, nämlich um Basketball am Strand.</p>
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
