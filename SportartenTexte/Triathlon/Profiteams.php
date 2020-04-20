<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Triathlon.js"></script>
</head>
	<body onload="" onscroll="LOAD_TX();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="RESIZE_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
		<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed;width: 100%" id="Background1_div"><img src="Bilder/Triathlon.jpg" id="Background1" style="width:100%;opacity:0.7"></div>
		<div id="Background1_div2" style="width: 100%"></div>
		<?php
			include("../menuSportarten.php");
		?>
		<?php
			include("Triathlon_Unterlinks.php");
		?>
					<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Triathlon</a> - Profiteams</div>
		<div id="TEXT">
			<h1>Triathlon- Profiteams</h1>
			<h3>Pro Team Mohrenwirt</h3>
			<p>Marc Dülsen, Markus Fachbach, Carolin Lehrieder, Markus Liebelt, Michael Rünz</p>
			<p>(Das Hotel Mohrenwirt liegt in einer super Trainingsregion für Radsportler und Triathleten. Nach der Gründung dieses Teams sind die Nachwuchstalente Dauergäste am Fuschlsee im Hotel. Sie erhalten finanzielle Unterstützung und gesponserte Trainingslager.)</p>
			<h3>BMC-Vifit Sport Pro Triathlon Team</h3>
			<p>Bart Aernouts, Liz Blatchford, Chris Leiferman, Emma Pallent, Will Clarke, Ronnie Schildknecht, Maurice Clavel, Patrik Nilsson</p>
			<p>(Die jungen Nachwuchstalente wurden von BMC und anderen Sponsoren mit hochwertigen, sehr gutem Material ausgestattet und richten alle den Blick auf das große Ziel: den Sieg beim Ironman Hawaii. Dass das Team eigene Sponsoren heißt aber nicht, dass die Athleten keine eigenen Partnerverträge unterschreiben dürfen. Solange diese Firmen nicht große Konkurrenten sind geht alles in Ordnung.)</p>
			<h3>Team Erdinger Alkoholfrei</h3>
			<p>Eva Wutti, Florian Angert, Patrick Lange, Nils Frommhold, Lucy Gossage, Andreas Realert, Michael Realert, Daniela Sämmler, Laura Philipp, Andreas Dreitz, Julia Gajer, Michael Göhner</p>
			<p>(Team Erdinger Alkoholfrei ist das bekannteste und präsenteste Team im deutschsprachigen Raum.  Sie verpflichten nicht nur schon bestehende Top Triathleten wie den IIronman Hawaii Sieger Patrick Lange, Nils Frommhold oder die Raelert Brüder, sondern leisten auch hervorraangende Nachwuchsförderung. Kennzeichen des Teams sind nicht nur ihre typische blaue Kleidung, sondern auch ihre nachhaltige Strategie, dass sie auch bei längeren Ausfällen von Sportlern, die Athleten sind abschieben.)</p>
			<h3>Bahrain Endurance 13</h3>
			<p>Jan Frodeno, Daniela Ryf, Alistair Brownlee, Jodie Cunnama, Javier Gomez, Ben Hoffman, Holly Lawrence, Sheikh Nasser bin Hamad Al Khalifa, Terenzo Bozzone, Ashleigh Gentle, Ben Kanute, Brent McMahon, David Plese</p>
			<p>(Das Team besteht aus 13 Toptriethleten um Jan Frodeno, Daniela Ryf und Javier Gomez. Das Hauptziel der Gründung des Teams „Bahrain Endurance 13“ war, Bahrain sportlich und gesund darzustellen. Finanziert wird alles durch den König und Schaich Hamad bin Isa Al Khalifa. Auch finanziell lohnt es sich dem Team beizutreten. Es gibt zwar keine gemeinsamen Sponsoren, weil jeder Profi eigene Verträge besitzt, jedoch existiert ein Prämiensystem sowie eine Aufteilung auf die Triathleten der Gewinne.)</p>
			<p style="cursor: pointer; font-size: 30px; text-align: center" onclick="document.getElementById('Unterlinks').style.top= window.innerHeight - 300 + 'px'">Du interessierst dich für Triathlon ? <br> Dann klicke hier für noch mehr Berichte und Tipps zum Thema Triathlon.</p>
		</div>
		<!--		<?php
					include("XMenu.Ende.php")
				 ?> -->
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}
				</script>
	</body>
</html>
