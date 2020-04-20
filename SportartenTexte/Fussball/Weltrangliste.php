<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Fussball.js"></script>
</head>
	<body onload="" onscroll="LOAD_TX();Unterlinks();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="RESIZE_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">
		<?php
			include("../backgroundSportarten.php")
		?>
		<?php
			include("../menuSportarten.php");
		?>
		<?php
			include("Fussball_Unterlinks.php");
		?>
		<?php
			include("../../menu_MOBILE.php");
		?>
					<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Fussball</a> - Schiedsrichter</div>
					<div style="width:250px;position:absolute;top:450px" id="Untermenü">
					<div style="" class="Unterlinks_H">Tunierarten: </div>
					<div style="font-style:italic" onclick="var a = document.getElementsByTagName('h3')[5].offsetTop; window.scrollTo(0,a - 290)" class="Unterlinks">Definition</div>
					<div style="" onclick="var b = document.getElementsByTagName('h3')[6].offsetTop; window.scrollTo(0,b - 290)" class="Unterlinks">Berechung</div>
					<div style="" onclick="var c = document.getElementsByTagName('h3')[7].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Weltrangliste</div>
					<div style="height:30px;width:5px;background-color:#1473e6;transition:0.5s;position:relative;top:50px" id="Unterlinksshow"></div>
					<p  style="margin:5px; padding:0; margin-top: 150px;font-size:17px;text-align:center;width:200px;cursor:pointer"><a class="Textlinks" onclick="document.getElementById('Unterlinks').style.top= window.innerHeight - 300 + 'px'">Klicke hier für weitere Fußballthemen<br></a></p>
				</div>
				<div id="TEXT">
						<img src="Bilder/Fußball_MB.jpg" style="width:100%;position: relative" id="Background2" class="MB">
						<h1 style="" id="Topic">Die FIFA-Weltrangliste</h1>
						<div style="width:0px;height:1px;background-color:gray;margin-left:auto;margin-right:auto;transition:2s" id="STDiv1"></div>
						<h3 style="margin-top:50px">Was ist die FIFA-Weltrangliste?</h3>
						<p><span class="firstletter">D</span>ie FIFA-Weltrangliste ist eine <b>weltweite Rangliste für Fußballnationalmannschaften</b>. Sie wird vom Weltfußballverband <b>FIFA</b> geführt und wurde im Jahr 1993 veröffentlicht. Die Rangliste zeigt die <b>Stärke aller international aktiven Mannschaften</b> und kann durch bestimmte Formeln exakt berechnet werden. </p>
						<div style="width:100%;text-align:center"><img src="Bilder/Manschaftsbus.jpg" class="Textbilder"/></div>
						<h3>Wie wird die Weltrangliste berechnet?</h3>
						<p>Nach einem Länderspiel werden Punkte nach der folgenden Formel auf den bereits vorhandenen Punktestand dazu addiert.</p>
						<p style="text-decoration:underline"><b>Berechnungsmethode SUM: </b></p>
						<p style="font-size:20pt;text-align:center"><b>P (neu) = P (alt) + I (W-W(e))</b></p>
						<div style="width:100%;text-align:center;margin-top: 50px"><img id="WeltranglisteFormelPic" src="Bilder/WeltranglisteFormelPic.png" class="Textbilder2"/></div>
						<div style="width:100%;text-align:center;margin-top: 50px"><img id="WeltranglistePunktevergabe" src="Bilder/WeltranglistePunktevergabe.png" class="Textbilder2"/></div>
						<table class="Tabelle_Weltrangliste" style="text-align:left;margin-top:100px;">
							<tr style="font-family: Prosto One">
								<th style="text-align:center">Gewichtung I</th>
								<th style="text-align:center" class="table_border">Art des Spiels</th>
							</tr>
							<tr>
								<th>5</th>
								<th class="table_border">Freundschaftsspiele außerhalb internationaler Fenster im Spielkalender</th>
							</tr>
							<tr>
								<th>10</th>
								<th class="table_border">Freundschaftsspiele während internationaler Fenster im Spielkalender</th>
							</tr>
							<tr>
								<th>15</th>
								<th class="table_border">Gruppenspiele bei <a href="Weltmeisterschaft.html" class="Textlinks">Nations-League-Wettbewerb</a></th>
							</tr>
							<tr>
								<th>25</th>
								<th class="table_border">K.O.-Spiele bei Nations-League-Wettbewerb und Qualifikationsspiele für kontinentale Meisterschaften und für die WM</th>
							</tr>
							<tr>
								<th>35</th>
								<th class="table_border">Spiele bei kontinentalen Meisterschaften bis vor dem Viertelfinale</th>
							</tr>
							<tr>
								<th>40</th>
								<th class="table_border">alle Spiele des Konföderation Cups sowie bei kontinentalen Meisterschaften ab dem Viertelfinale</th>
							</tr>
							<tr>
								<th>10</th>
								<th class="table_border">WM-Endrundenspiele bis einschließlich Achtelfinale</th>
							</tr>
							<tr>
								<th>10</th>
								<th class="table_border">WM-Endrundenspiele ab Viertelfinale</th>
							</tr>
						</table>
						<h3 style="margin-top:150px">Die aktuelle Weltrangliste (Platz 1 - 20)</h3>
						<table class="Tabelle_Weltrangliste">
							<tr style="font-family: Prosto One">
								<th>Platzierung</th>
								<th>Land</th>
								<th class="table_border">Punktestand</th>
							</tr>
							<tr>
								<th>1.</th>
								<th>Belgien & Frankreich </th>
								<th class="table_border">1729</th>
							</tr>
							<tr>
								<th>3.</th>
								<th>Brasilien</th>
								<th class="table_border">1663</th>
							</tr>
							<tr>
								<th>4.</th>
								<th>Kroatien</th>
								<th class="table_border">1634</th>
							</tr>
							<tr>
								<th>5.</th>
								<th>Uruguay</th>
								<th class="table_border">1632</th>
							</tr>
							<tr>
								<th>6.</th>
								<th>England</th>
								<th class="table_border">1612</th>
							</tr>
							<tr>
								<th>7.</th>
								<th>Portugal</th>
								<th class="table_border">1606</th>
							</tr>
							<tr>
								<th>8.</th>
								<th>Schweiz</th>
								<th class="table_border">1598</th>
							</tr>
							<tr>
								<th>9.</th>
								<th>Spanien</th>
								<th class="table_border">1597</th>
							</tr>
							<tr>
								<th>10.</th>
								<th>Dänemark</th>
								<th class="table_border">1581</th>
							</tr>
							<tr>
								<th>11.</th>
								<th>Argentinien</th>
								<th class="table_border">1575</th>
							</tr>
							<tr>
								<th>12.</th>
								<th>Chile & Deutschland</th>
								<th class="table_border">1568</th>
							</tr>
							<tr>
								<th>14.</th>
								<th>Kolumbien</th>
								<th class="table_border">1567</th>
							</tr>
							<tr>
								<th>15.</th>
								<th>Schweden & Mexiko</th>
								<th class="table_border">1550</th>
							</tr>
							<tr>
								<th>17.</th>
								<th>Niederlande</th>
								<th class="table_border">1540</th>
							</tr>
							<tr>
								<th>18.</th>
								<th>Polen</th>
								<th class="table_border">1537</th>
							</tr>
							<tr>
								<th>19.</th>
								<th>Wales</th>
								<th class="table_border">1536</th>
							</tr>
							<tr>
								<th>20.</th>
								<th>Italien</th>
								<th class="table_border">1526</th>
							</tr>
						</table>
					</div>
						<?php
							include("../footerSportarten.php")
						 ?>
				<script> window.onload = function load(){PAGELOAD()}
						</script>
						<script>
						function Unterlinks(){
							if(window.pageYOffset > 350){document.getElementById('Untermenü').style.position = "fixed";document.getElementById('Untermenü').style.top = "100px"}else{document.getElementById('Untermenü').style.position = "absolute";document.getElementById('Untermenü').style.top = "450px"}
							document.getElementsByClassName('Unterlinks')[0].style.fontStyle = "normal";
							document.getElementsByClassName('Unterlinks')[1].style.fontStyle = "normal";
							document.getElementsByClassName('Unterlinks')[2].style.fontStyle = "normal";
							if(window.pageYOffset > 0 && document.getElementsByTagName("h3")[6].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "50px";document.getElementsByClassName('Unterlinks')[0].style.fontStyle = "italic"}
							if(window.pageYOffset > document.getElementsByTagName("h3")[6].offsetTop - 300 && document.getElementsByTagName("h3")[7].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "90px";document.getElementsByClassName('Unterlinks')[1].style.fontStyle = "italic"}
							if(window.pageYOffset > document.getElementsByTagName("h3")[7].offsetTop - 300){document.getElementById('Unterlinksshow').style.top = "135px";document.getElementsByClassName('Unterlinks')[2].style.fontStyle = "italic"}
						}
						</script>
	</body>
</html>
