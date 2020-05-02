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
		<h1 id="Background_H1" style="left:-100px">Tennis</h1>
		<div id="Background1_div2" style="width: 100%;height:100vh"></div>
		<div id="Sportarten_TextContainer">
			<div style="width:100%;text-align:center;height:300px;margin-bottom: 200px">
				<div style="margin-left:0%;width:33.3%" class="UnterlinksSportarten3" onclick="window.location.href = 'Schiedsrichter.php'">
					<h3 style="" class="UnterlinksSportarten_h">Schiedsrichter</h3>
					<div  class="UnterlinksSportarten_li">
						<li><a>Hauptschiedsrichter</a></li>
						<li><a>Linienschiedsrichter</a></li>
						<li><a>...</a></li>
					</div>
					<img src="Bilder/Unterlink_3.png" width="40px" style="margin-top:90px" onload="document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'"></img>
				</div>
				<div style="margin-left:33.3%;width:33.3%" class="UnterlinksSportarten3" onclick="window.location.href = 'Technik.php'">
					<h3 style="" class="UnterlinksSportarten_h">Technik</h3>
					<div style=""  class="UnterlinksSportarten_li">
						<li><a>Grundtechnik</a></li>
						<li><a>Schläge mit Ballrotation</a></li>
						<li><a>...</a></li>
					</div>
					<img src="Bilder/Unterlink_1.png" width="40px" style="margin-top:90px"></img>
				</div>
				<div style="margin-left:66.6%;width:33.3%" class="UnterlinksSportarten3" onclick="window.location.href = 'Taktik.php'">
					<h3 style="" class="UnterlinksSportarten_h">Taktik</h3>
					<div style=""  class="UnterlinksSportarten_li">
						<li><a>Grundlinienspiel</a></li>
						<li><a>Serve and Volley</a></li>
						<li><a>Inside-Out-Schläge</a></li>
						<li><a>...</a></li>
					</div>
					<img src="Bilder/Unterlink_2.png" width="40px" style="margin-top:50px"></img>
				</div>
			</div>
			<div id="TEXT">
				<p class="TXCenter">	Tennis ist ein sogenanntes Rückschlagspiel, bei dem entweder zwei einzelne Spieler gegeneinander spielen (Einzel) oder zwei Spieler gegen zwei andere (Doppel). Die Teams setzen sich aus entweder zwei Männern (Herrendoppel), zwei Frauen (Damendoppel) oder einer Frau und einem Mann (Mixed) zusammen. Die Sportart stammt ursprünglich aus England, ist heutzutage aber weltweit verbreitet und in den Olympischen Spielen vertreten.</p>
						<h3>Ausrüstung:</h3>
						<p> Benötigt werden ein Tennisschläger und ein Tennisball. Ebenfalls empfehlenswert sind passende, lockere Sportbekleidung und geeignete Sportschuhe.</p>
						<h3>Spielfeld:</h3>
						<img id="Tennisspielfeld" src="Bilder/Tennisspielfeld.jpg" style="width:100%;max-width: 300px;float:right" />
						<p>Das Tennisspielfeld ist rechteckig und ist durch ein Netz in zwei Hälften geteilt. Es ist 23,77m lang und 8,23m breit (bei einem Doppel 10,97m breit). Die beiden Grundlinien laufen parallel zum Netz und begrenzen das Feld der Länge nach. Die T-Linien schneiden beide Hälften in der Mitte und sind ebenfalls parallel zum Netz und zur Grundlinie<br>Die häufigsten Beläge von Tennisplätzen sind roter Sand (meist Ziegelmehl), Kunststoffgranulat, Rasen oder Kunstrasen.</p>
						<h3>Schlagarten:</h3>
						<p>	Wie bei allen anderen Rückschlagspielen gibt es die Vorhand, die Rückhand und den Aufschlag.</p>
						<p>	Bei der <b>Vorhand</b> (engl. forehand) wird der Ball mit der Schlaghand auf der Seite der Schlaghand gespielt. Das wäre bei einem Rechtshänder also die rechte Seite.</p>
						<p>	Bei der <b>Rückhand</b> (engl. backhand) wird der Schläger mit beiden Händen, nicht nur mit einer Hand wie bei der Vorhand, geschlagen. Der Ball wird dabei auf der anderen Seite der Schlaghand gespielt. Bei einem Rechtshänder diesmal auf der linken Seite, bei einem Linkshänder auf der rechten Seite.</p>
						<p> 	Der <b>Aufschlag</b> (engl. Service) leitet den Ballwechsel ein. Er muss hinter der Grundlinie ausgeführt werden, diese darf, bevor der Schläger den Ball berührt, vom aufschlagenden Spieler nicht überschritten werden. Der Spieler wirft dabei den Ball über seinen Kopf und schlägt zum richtigen Zeitpunkt den Ball in das diagonal gegenüberliegende Feld des Gegners. Bei frühzeitiger Übertretung der Grundlinie oder anderen Fehlern hat der aufschlagende Spieler einen zweiten Versuch. Wenn auch dieser scheitert erhält der Gegner einen Punkt.</p>
						<h3>Punktesystem:</h3>
						<img id="Tennisspieler" src="Bilder/Tennisspieler.png" style="width:100%;max-width:300px;float:right;margin:50px"/>
						<p> Ein Spiel im Tennis besteht aus mehreren Ballwechseln, bei denen die Spieler Punkte erzielen müssen. Der erste Punktgewinn eines Spielers wird dabei als <b>15</b>, der zweite als <b>30</b> und der dritte als <b>40</b> gezählt. Der vierte Punktgewinn bedeutet den Sieg, falls der Spieler einen Vorsprung von mindestens zwei Punkten hat. Bei einem 40:40 spricht man von einem <b>Einstand</b> (also Gleichstand). Der darauf folgende Punkt wird als <b>Vorteil</b> bezeichnet und bedeutet, dass der Spieler der den Vorteil erspielt hat, nun einen Punkt machen muss um den Satz zu gewinnen. Falls er dies nicht schafft, ist wieder Einstand und es wird erneut um einen Vorteil gespielt. Nach einem Einstand muss also ein Spieler zwei Punkte unmittelbar hintereinander erzielen.</p>
						<p> Um eine Tennisbegegnung (auch Match oder Partie genannt) zu gewinnen, ist eine vorher festgelegte Anzahl von <b>Sätzen</b> für sich zu entscheiden. Meistens werden <b>zwei</b> Sätze gespielt, bei großen Herrenturnieren (Bsp. Grand-Slam oder Davis Cup) jedoch drei.</p>
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
