<!DOCTYPE HTML>
<html>
<?php
	include("../headSportarten.php");
?>
<script src="Basketball.js"></script>
	<body onload="" onscroll="LOAD_Al();RESIZE()" onresize="LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">

		<?php
			include("../menuSportartenAl.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
		<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed" id="Background1_div"><img src="Bilder/Banner2.png" id="Background1" style="width:100%;opacity:0.7"></div>
		<h1 id="Background_H1" style="left:-100px">Hockey</h1>
		<div id="Background1_div2" style="width: 100%"></div>
		<div style="width:100%;text-align:center;height:300px;margin-bottom: 200px">
			<a href="Feldhockey.php" style="text-decoration: none"><div style="margin-left:0%" class="UnterlinksSportarten3">
				<h3 class="UnterlinksSportarten_h">Feldhockey</h3></a>
				<div  class="UnterlinksSportarten_li">
					<li><a href="Feldhockey.php">Allgemeines</a></li>
					<li><a href="Feldhockey.php">Ausrüstung</a></li>
				</div>
				<img src="Bilder/Unterlink_3.png" width="40px" style="margin-top:120px"></img>
			</div>
			<div style="margin-left:20%" class="UnterlinksSportarten3">
				<h3 style="" class="UnterlinksSportarten_h">Taktik und Technik</h3>
				<div style=""  class="UnterlinksSportarten_li">
					<li><a href="Taktik.php">Aufstellung</a></li>
					<li><a href="Taktik.php">Spielfeldzonen</a></li>
					<li><a href="Technik.php">Schlagarten</a></li>
					<li></li>
				</div>
				<img src="Bilder/Unterlink_1.png" width="40px" style="margin-top:75px"></img>
			</div>
			<div style="margin-left:40%" class="UnterlinksSportarten3">
				<a href="Trainer.php" style="text-decoration: none"><h3 style="" class="UnterlinksSportarten_h">Trainer</h3></a>
				<div  class="UnterlinksSportarten_li">
					<li style="padding-top:15px"><a href="Trainer.php">Aufgaben</a></li>
					<li><a href="Trainer.php">Fähigkeiten</a></li>
				</div>
				<img src="Bilder/Unterlink_4.png" width="20px" style="margin-top:130px"></img>
			</div>
			<div style="margin-left:60%" class="UnterlinksSportarten3">
				<a href="Wettkampfe.php" style="text-decoration: none"><h3 style="" class="UnterlinksSportarten_h">Wettkämpfe</h3></a>
				<div  class="UnterlinksSportarten_li">
					<li style="padding-top:15px"><a href="Wettkampfe.php">Olympia</a></li>
					<li><a href="Wettkampfe.php">World Cup</a></li>
					<li><a href="Wettkampfe.php">Champions League</a></li>
				</div>
				<img src="Bilder/Unterlink_1.png" width="40px" style="margin-top:90px"></img>
			</div>
			<div style="border-right: none;margin-left:80%" class="UnterlinksSportarten3" onclick="window.location.href = '../Homeshop.html'">
				<h3 style="" class="UnterlinksSportarten_h">Equipment</h3>
				<div class="UnterlinksSportarten_li">
					<li style="padding-top:15px"><a>SCHUHE</a></li>
					<li><a>TRIKOTS</a></li>
					<li><a>HOSEN</a></li>
					<li><a>...</a></li>
				</div>
				<img src="Bilder/Unterlink_5.png" width="40px" style="margin-top:50px"></img>
			</div>
		</div>
		<div id="TEXT">
				<p>Hockey wird mit einem Schläger gespielt und kann auf Rasen als Feldhockey oder in der Halle als Hallenhockey gespielt werden. Es ist bekannt für seine Schnellig- und Schlagfertigkeit.  Die Sportart Hockey ist seit 1908 olympisch und der Welthockeyverband ist die Fédération Internationale de Hockey.</p>
				<p>Neben dem traditionellen Hockey gibt es auch andere Arten des Hockeys, wie Einradhockey, Rollhockey, Bandy, Inline-/Skatehockey, Floorball/Unihockey, Rollstuhl-Hockey und natürlich Eishockey (die meisten dieser Hockeyarten werden jedoch in der Halle gespielt).</p>
				<h3>Ausrüstung:</h3>
				<p>Beim normalen Feldhockey muss vor allem der Torwart gut geschützt sein. Dieser Schutz besteht aus folgenden Teilen: </p>
				<ul class="ListeText">
					<li>Brustpanzer</li>
					<li>Beinschoner</li>
					<li>Helm mit Gitter</li>
					<li>Hose</li>
					<li>Stockhandschuh</li>
					<li>Torwartkelle (spezieller Hockeyschläger)</li>
					<li>Suspensorium (hauptsächlich für Männer zum Schutz der Genitalien)</li>
					<li>Halskrause/Kehlkopfschutz</li>
					<li>Trikot</li>
				</ul>
				<div style="width:100%;text-align:center"><img src="Bilder/1.jpg" style="width:100%;max-width:500px" class="Textbilder"/></div>
				<p>Die Feldspieler dagegen tragen deutlich weniger Schutz. Zu ihrer Ausrüstung gehört Folgendes:</p>
				<ul class="ListeText">
					<li>Hallen- oder Feldhockeyschläger</li>
					<li>Feld- oder Hallenhockeyschuhe</li>
					<li>Trikot</li>
					<li>Kurze Hose/kurzer Rock</li>
					<li>Stutzen</li>
					<li>Schienbeinschützer </li>
					<li>Mundschutz</li>
				</ul>
				<div style="width:100%;text-align:center"><img src="Bilder/2.jpg" style="width:100%;max-width:500px" class="Textbilder"/></div>
				<p>(Die Schienbeinschützer und der Mundschutz sind nicht fest vorgeschrieben, werden aber von den meisten Spielern genutzt/getragen.)</p>
				<h3>Regeln:</h3>
				<p>Beim Hockey spielen zwei Mannschaften gegeneinander. Beide bestehen aus jeweils zehn Feldspielern und einem Torwart. Dazu gibt es pro Mannschaft fünf Auswechselspieler. Gespielt werden 2 x 35 Minuten und beide Teams dürfen pro Halbzeit eine einminütige Auszeit nehmen. In internationalen Turnieren werden anstatt 2 x 35 Minuten seit dem Jahr 2014  4 x 15 Minuten gespielt und nach einem Foul oder Tor eine 40-sekündige Auszeit erteilt (bei einem Foul logischerweise nur für den Foul-Ausführenden, nicht für die ganze Mannschaft).</p>
				<p>Das Hockeyspielfeld ist 91,4 × 55 m groß, das entspricht ca. 100 x 60 Yards im Englischen. In beiden Hälften gibt es jeweils eine Viertellinie, die 22,9m von den Toren entfernt ist. Dadurch ist das Spielfeld also  in insgesamt in vier Viertel unterteilt, dementsprechend geviertelt.Gespielt wird entweder auf Kunstrasen oder normalem Rasen.</p>
				<div style="width:100%;text-align:center"><img src="Bilder/3.png" width="100%" style="max-width:400px"/></div>
				<p>Ziel des Spiels ist es, den ca. 7,3cm dicken Kunststoffball in das 2,14m hohe Tor zu schießen. Dabei darf der Ball nur mit der flachen Seite des Schlägers und innerhalb des markierten Schusskreises geschlagen werden. Dieser ist ein ca. 14,63m breiter Halbkreis um das Tor herum.</p>
				<p>Eine Besonderheit im Hockey ist die Strafecke (auch ,,kurze Ecke‘‘ genannt). Diese wird dann ausgeführt, wenn eine der beiden Mannschaften ein Foul/Regelverstoß verübt. Die angreifenden Spieler, die die Strafecke ausführt platziert sich hinter der Schusskreislinie und ein Spieler, der ,,Herausgeber‘‘, begibt sich mit dem Ball zur Torauslinie (genauer siehe Abbildung). Die verteidigende Mannschaft stellt sich mit bis zu vier Spielern und dem Torwart hinter die Torlinie, der Rest der Mannschaft begibt sich hinter die Mittellinie. Wichtig!  Erst nach Freigabe durch den Schiedsrichter und nach dem anschließenden Abspiel des Angreifers, dürfen sich die Spieler bewegen und in Aktion treten. </p>
				<p>In Ergänzung dazu gibt es den Siebenmeter, welcher bei einem schwereren Foul verhängt wird. Dieser ist stark mit dem im Fußball bekannten Elfmeter zu vergleichen, denn er basiert auf dem gleichem Grundprinzip. Bei einem Foul bzw. Regelverstoß eines Verteidigers im eigenen Schusskreis, wird die Zeit gestoppt und die gefoulte Mannschaft darf ab dem Siebenmeterpunkt einen Schuss aufs Tor ausführen. </p>
				<h1>Unterschiede zwischen Hockey und Eishockey</h1>
				<table>
					<thead>
						<tr><th>Hockey</th><th>Eishockey</th></tr>
					</thead>
					<tr><th>Größe des Spielfeldes: 91,4 Meter lang und 55 Meter breit</th><th>Größe des Spielfeldes: 60 Meter lang und 30 Meter hoch</th></tr>
					<tr><th>10 Feldspieler plus 1 Torwart; Bei Hallenhocke sind es nur 5 plus 1 Torwart </th><th>5 Feldspieler plus 1 Torwart</th></tr>
					<tr><th>,,körperloses Spiel‘‘ (Körperkontakt ist nicht erlaubt)</th><th>Körperkontakt <u>ist</u> erlaubt</th></tr>
					<tr><th>Gespielt wird auf einem Kunstrasen</th><th>Gespielt wird auf Eis</th></tr>
					<tr><th>Ein Spiel besteht aus zwei Halbzeiten mit einer Dauer von jeweils 35 Minuten</th><th>Ein Spiel besteht aus 3 Halbzeiten mit einer Dauer von jeweils 20 Minuten</th></tr>
					<tr><th>Regelverstöße werden mit einem Strafeckball oder einem 7 Meter Strafstoß bestraft</th><th>Bei einem Foul darf der gefoulte Spieler vom Mittelkreis alleine auf den Tormann zulaufen</th></tr>
					<tr><th>Es wird mit einem Ball gespielt</th><th>Es wird mit einem Puck gespielt</th></tr>
					<tr><th>Hockey ist langsamer als Eishockey</th><th>Eishockey gehört zu einer der schnellsten Sportarten der Welt</th></tr>
				</table>
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
