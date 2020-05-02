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
		<h1 id="Background_H1" style="left:-100px;font-size: 100px">Tischtennis</h1>
		<div id="Background1_div2" style="width: 100%;height:100vh"></div>
		<div id="Sportarten_TextContainer">
			<div style="width:100%;text-align:center;height:100px;margin-bottom: 200px">
				<div style="margin-left:0%;width:20%" class="UnterlinksSportarten3" onclick="window.location.href = 'Technik.php'">
					<h3 style="" class="UnterlinksSportarten_h">Technik</h3>
					<div  class="UnterlinksSportarten_li">
						<li><a>Grundstellung</a></li>
						<li><a>Aufschlag</a></li>
						<li><a>...</a></li>
					</div>
					<img src="Bilder/Unterlink_1.png" width="40px" style="margin-top:90px"></img>
				</div>
				<div style="margin-left:20%;width:20%" class="UnterlinksSportarten3" onclick="window.location.href = 'Technik.php'">
					<h3 style="" class="UnterlinksSportarten_h">Regeln</h3>
					<div style=""  class="UnterlinksSportarten_li">
						<li><a>Satz</a></li>
						<li><a>Spiel</a></li>
						<li><a>Aufschlag</a></li>
						<li><a>...</a></li>
					</div>
					<img src="Bilder/Unterlink_3.png" width="40px" style="margin-top:50px"></img>
				</div>
				<div style="margin-left:40%;width:20%" class="UnterlinksSportarten3" onclick="window.location.href = 'Wettkampfe.php'">
					<h3 style="" class="UnterlinksSportarten_h">Wettkämpfe</h3>
					<div  class="UnterlinksSportarten_li">
						<li><a>Olympia</a></li>
						<li><a>Weltmeisterschaft</a></li>
					</div>
					<img src="Bilder/Unterlink_4.png" width="40px" style="margin-top:120px"></img>
				</div>
				<div style="margin-left:60%;width:20%" class="UnterlinksSportarten3" onclick="window.location.href = 'Ubungen.php'">
					<h3 style="" class="UnterlinksSportarten_h">Übungen</h3>
					<div  class="UnterlinksSportarten_li">
						<li><a>Einspielen</a></li>
						<li><a>Beinarbeit</a></li>
					</div>
					<img src="Bilder/Unterlink_5.png" width="40px" style="margin-top:120px"></img>
				</div>
				<div style="margin-left:80%;width:20%" class="UnterlinksSportarten3" onclick="window.location.href = 'Training.php'">
					<h3 style="" class="UnterlinksSportarten_h">Training</h3>
					<div  class="UnterlinksSportarten_li">
						<li><a>Einspielen</a></li>
						<li><a>Trainieren</a></li>
					</div>
					<img src="Bilder/Unterlink_2.png" width="40px" style="margin-top:120px"></img>
				</div>
			</div>
			<div id="TEXT">
				<div class="Absatz65">
					<p><span class="firstletter">T</span>ischtennis ist eine Sportart, bei der es um Reaktion, Technik, Präzision, Taktik und Erfahrung geht. Tischtennis ist eine <b>Einzelsportart</b>. Man muss durch ein variables Spiel seinen Gegner ausspielen und durch die gute Beherrschung der Technik die Oberhand im Spiel behalten. Auch Geschwindigkeit und Reaktion der Spieler ist essentiell für ein erfolgreiches Spiel, ebenso die Beherrschung der Rotation des Balls (Schnitt/Spin) ist sehr wichtig.</p>
				</div>
				<img class="Bild30" src="Bilder/SchlägerZeichnung.png"style="margin-top:20px;"/>
				<p>Verschiedene Arten der Rotationen:</p>
				<ul>
					<li><b>Überschnitt </b><br> wenn man von der linken Seite des Tisches auf den Ball schauen würde dreht er sich <u>gegen</u> den Uhrzeigersinn</li>
					<li><b>Unterschnitt</b><br> wenn man von der linken Seite des Tisches auf den Ball schauen würde dreht er sich <u>mit</u> dem Uhrzeigersinn</li>
					<li><b>Seitschnitt </b><br> der Ball dreht sich auf einer Achse, die senkrecht auf den Boden trifft</li>
				</ul>
				<p>Es können auch Mischschnitte entstehen, indem der Ball schräg angeschnitten wird.</p>
				<img class="Bild50zentrum"src="Bilder/SchlägermitTisch.jpg"/>
				<h3>Geschichte Tischtennis</h3>
				<p>Um 1874 entstand in England eine Frühform des Tischtennis aus dem zugrunde liegenden Sportspiel „Spharistike“ (griechisch: „Lass uns spielen“). Über die Zeit hinweg haben sich der Sport und das Material mit dem gespielt wird grundlegend verändert. Heutzutage ist das Tischtennis ein sehr schneller Sport; dies war früher nicht so. </p>
				<h3>Spielstile</h3>
				<p>Es gibt auch verschiedene Spielstile. Heutzutage wird das Tischtennis durch das aggressive Spiel dominiert, früher wurde im Tischtennis häufiger ein defensiver Spielstiel gespielt. Durch ein variables Spiel und den gekonnten Wechsel von <b>aggressiven und eher passiven Spielzügen</b> können sie ihren Gegner schlagen.  Für verschiedene Spielstiele braucht man verschiedene Arten von Tischtennisschlägern.</p>
				<h3>Tischtennisschläger</h3>
				<p>Tischtennisschläger bestehen aus einem Tischtennisholz und zwei Belägen, einen Vorhand- und einen Rückhandbelag. Einer muss <b>rot</b> und der andere <b>schwarz</b> sein. Es gibt grundsätzlich drei Arten von Belägen:</p>
				<ol>
					<li>Glatter Belag</li>
					<li>Kurze Noppen</li>
					<li>Lange Noppen</li>
				</ol>
				<p>Bei Belägen ist es wichtig, dass man sich damit wohlfühlt. Beläge mit Noppen sind eher für einen defensiven Spielstiel geeignet, wobei lange Noppen extremer fungieren als kurze Noppen. Das grundsätzliche Prinzip von Noppen ist, dass sie den Schnitt umdrehen.
					Glatte Beläge sind grundsätzlich eher für das Angriffsspiel geeignet. Die Geschwindigkeit der Belege ist von der Dicke des Belags abhängig. </p>
					<div class="InfoKastenMitte">
						<p><b>Info: </b><br>Die Vorhand eines Spielers ist die Seite des Schlägers, die, wenn er den Schläger in seiner Hand hat und die <b>Innenseite zu sich</b> dreht, oben ist. Die Rückhand ist dementsprechend die andere Seite.</p>
					</div>
					<div class="Absatz65">
						<h3>Der Tischtennistisch</h3>
						<p>Die Seiten des Tischtennistisches werden mit der Seite des Schlägers beschrieben, mit dem sie abgedeckt werden sollen. Da die Vorhand einen größeren Bereich abdecken kann wird auch mehr als die Hälfte des Tisches mit der Vorhand beschrieben. Der Punkt an dem sich der Bereich der Vor- und Rückhand treffen, wird als <b>Wechselpunkt</b> bezeichnet. Am Wechselpunkt muss sich der Spieler für entweder die Rückhand oder die Vorhand entscheiden und muss sich bewegen um eine der beiden Seiten gut einsetzen zu können. <br>Da dies, insbesondere aufgrund der hohen Spielgeschwindigkeit, nicht immer einfach ist, ist es ratsam dort den Ball hinzuspielen um somit den Gegner zu fordern und ihm Schwierigkeiten zu bereiten.</p>
					</div>
					<img class="Bild30"src="Bilder/TischtennisplatteBeschriftung.jpg" style="margin-top:100px;"/>


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
