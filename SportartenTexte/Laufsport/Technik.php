<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Laufsport.js"></script>
</head>
	<body onload="" onscroll="LOAD_TX();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="RESIZE_TX();LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
		<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed;width: 100%" id="Background1_div"><img src="Bilder/Wettkampfstart.jpg" id="Background1" style="width:100%;opacity:0.7;position:relative;top: -250px;min-width: 900px"></div>
		<div id="Background1_div2" style="width: 100%"></div>
		<?php
			include("../menuSportarten.php");
		?>
		<?php
			include("Laufsport_Unterlinks.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
							<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Laufsport</a> - Technik</div>
		<div id="TEXT">
		<h1>Technik</h1>
		<h3>Laufspezifische Mobilisation und Dehnen:</h3>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/c6LW8PAPnaw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<h3>Lauftechnik</h3>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/PnAH4NQWIEk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<h3 id="LF_H5">Vorfuß-, Mittelfuß- und Fersenlaufstil</h3>
		<p><span class="firstletter">D</span>er <b>Vorfußlaufstil</b> wird häufig als ,,<b>schnellster</b>‘‘ Laufstil angepriesen. Jedoch ist dies nicht immer die beste Technik und nur dann passend, wenn man wirklich schnell laufen will, da der Vorfußlaufstil sehr dynamisch und abdruckkräftig ist. Wie zum Beispiel in <a class="TextLinkBold"href="Wettkämpfe.php">Wettkämpfen.</a> </p>
		<p>Besonders wichtig ist, dass man sich nach einem Lauf mit dem Vorfußlaufstil ordentlich dehnt, denn sonst können Verletzungen an Wade, Knöchel und Achillessehne entstehen.</p>
		<img id="Autobahnlauf"src="Bilder/Autobahnlauf.jpg"/>
		<p>Der <b>Mittelfußlaufstil</b> ist für den Fuß deutlich schonender. Er eignet sich gut für <b>Dauerläufe, Tempoläufe</b> und <b>nicht allzu schnell</b> gelaufene Trainingseinheiten. Einen Halbmarathon oder einen Marathon sollte mit diesem Stil kein Problem sein; ganz anders mit dem Vorfußlaufstil.</p>
		<p>Der <b>Fersenlauf</b> (auch Rückfußlauf genannt), ist der am weitesten verbreitete Laufstil, denn er wird vor allem von <b>Hobbyläufern</b> angewandt und scheint weniger anstrengend wie der Vorfußlaufstil. Außerdem sind die meisten Schuhe auf diesen Laufstil ausgerichtet und haben viele <b>Dämpfungselemente</b> im Bereich der Ferse.</p>
		<h3 id="LF_H6">Oberkörperrotation</h3>
		<p>Wenn Du bei Läufern auf den Oberkörper achtest, dann siehst Du, dass viele der Läufer eine gewisse <b>Schulterrotation</b> aufweisen. Wie sich aber herausgestellt hat, verbraucht die Rotation mit den Schultern unnötig viel Energie und bringt auch nicht mehr Geschwindigkeit. Somit ist die Schulterrotation ein häufiger <b>Fehler</b> bei Lauftechniken. </p>
		<p>Wenn Du es geschafft hast die Rotation im Oberkörper größtenteils unterbunden zu haben, dann wir diese zwangsweiße im Unterkörper stattfinden. Dort ist die Rotation genau richtig, denn die Beckenrotation absorbiert die Kraft in Form des Stoßes der auf uns zukommenden Straße und setzt sie direkt in das Vorschwingen der Beine um.</p>
		<h3 id="LF_H7">Pacing</h3>
		<div class="AbsatznebenInfolauf">
		<h4>Das Uhrwerk:</h4>
		<p>Bei dieser Taktik versucht der Läufer ein konstantes Tempo zu laufen und mit technischer Hilfe sein/e Tempo und Zeiten zu überwachen. Jedoch kann konstantes Laufen für einen Anfänger sehr schwierig sein und so braucht diese Taktik einiges an Übung bevor sie in einem Wettkampf angewendet werden sollte. </p>
		</div>
		<img id="LaufSmartwatch"src="Bilder/Smartwatch.jpg"/>
		<h4>Der negative Split:</h4>
		<p>Anders wie bei den anderen Taktik startet man bei dieser Lauftaktik mit einem eher langsamen Tempo. Wichtig dabei ist, nicht plötzlich doch schneller zu laufen, weil die gegnerischen Mitstreiter deutlich weiter vorne sind. Erst ab der Hälfte der Strecke steigert man das Tempo und versucht sich <b>an die Spitze</b> der Läufer zu kämpfen und den Sieg oder den vorgenommen Rang auf der Bestenliste zu erreichen.</p>
		</div>
			<div style="width:100%;height:0px;"></div>
				<?php
					include("../footerSportarten.php")
				 ?>
<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
