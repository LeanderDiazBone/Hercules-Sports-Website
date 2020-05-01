<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
</head>
	<body onload="" onscroll="LOAD_Al();RESIZE_TX();RESIZE()" onresize="RESIZE_TX();LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">

		<?php
			include("../menuSportartenAl.php");
		?>
		<?php
			include("../../menu_MOBILE.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
		<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed" id="Background1_div"><img src="Bilder/Banner2.png" id="Background1" style="width:100%;opacity:0.7"></div>
		<h1 id="Background_H1" style="">Fußball</h1>
		<div id="Background1_div2" style="width: 100%"></div>
			<div style="width:100%;height:0px;"></div>
			<img src="Bilder/MB_Banner2.jpg" style="width:100%;position: relative" id="Background2" class="MB">
			<div style="width: 100%; margin-top: 50px; text-align: center" class="MB"><h4 style="margin-bottom: 0; position: relative; top: 20px">Was du hier findest ...</h4></div>
			<div style="width:100%;text-align:center;height:300px;margin-bottom: 200px">
				<div style="margin-left:0%" class="UnterlinksSportarten3">
					<h3 style="" class="UnterlinksSportarten_h">Training</h3>
					<div  class="UnterlinksSportarten_li">
						<li><a href="Taktik.php">TAKTIK</a></li>
						<li><a href="Technik">TECHNIK</a></li>
						<li><a href="Tricks.php">TRICKS</a></li>
						<li><a href="Übungen.php">ÜBUNGEN</a></li>
					</div>
					<img src="Bilder/Unterlink_5.png" width="40px" style="margin-top:50px"></img>
				</div>
				<div style="margin-left:20%" class="UnterlinksSportarten3">
					<h3 style="" class="UnterlinksSportarten_h">Turniere & Verbände</h3>
					<div style=""  class="UnterlinksSportarten_li">
						<li><a href="Weltmeisterschaft.php">TURNIERARTEN</a></li>
						<li><a href="Weltrangliste.php">WELTRANGLISTE</a></li>
						<li><a href="VereineundVerbande.php">VEREINE & VERBÄNDE</a></li>
						<li></li>
					</div>
					<img src="Bilder/Unterlink_1.png" width="40px" style="margin-top:75px"></img>
				</div>
				<div style="margin-left:40%" class="UnterlinksSportarten3">
					<h3 style="" class="UnterlinksSportarten_h">Trainer & Schiedsrichter</h3>
					<div  class="UnterlinksSportarten_li">
						<li style="padding-top:15px"><a href="Trainer.php">ARTEN VON TRAINER</a></li>
						<li><a href="Schiedsrichter.php">SCHIEDSRICHTER</a></li>
					</div>
					<img src="Bilder/Unterlink_2.png" width="40px" style="margin-top:120px"></img>
				</div>
				<div style="margin-left:60%" class="UnterlinksSportarten3">
					<h3 style="" class="UnterlinksSportarten_h">Regelwerk</h3>
					<div  class="UnterlinksSportarten_li">
						<li style="padding-top:15px"><a href="Regelwerk.php#ÜberschriftSpielfeld">DAS SPIELFELD</a></li>
						<li><a href="Regelwerk.php#Spielball">DER SPIELBALL</a></li>
						<li><a href="Regelwerk.php#Spieler">DIE SPIELER</a></li>
					</div>
					<img src="Bilder/Unterlink_3.png" width="40px" style="margin-top:90px"></img>
				</div>
				<div style="border-right: none;margin-left:80%" class="UnterlinksSportarten3" onclick="window.location.href = '../Homeshop.html'">
					<h3 style="" class="UnterlinksSportarten_h">Equipment</h3>
					<div class="UnterlinksSportarten_li">
						<li style="padding-top:15px"><a>SCHUHE</a></li>
						<li><a>TRIKOTS</a></li>
						<li><a>HOSEN</a></li>
						<li><a>...</a></li>
					</div>
					<img src="Bilder/Unterlink_4.png" width="40px" style="margin-top:50px"></img>
				</div>
			</div>
			<div id="TEXT">
				<p>Fußball - Eine der wohl berühmtesten und weitverbreitesten Sportart in Deutschland. Ob profesionnell im Verein oder nur auf einer Wiese mit einem Ball und einem provesorischen Tor. Fast jeder von uns hat schon einmal Fußball gespielt.</p>
								<img src="Bilder/Kind.jpg" style="width:100%;max-width: 300px;float:right;margin: 100px;margin-top:0px" class="Textbilder">
				<p>Man kann Fußball zusammen mit Freunden, um Spaß zu haben und sich gleichzeitig noch sportlich zu betätigen spielen. Kann sich aber auch Vereinen anschließen um professionel zu spielen und so gegen andere Vereine in verschiedenen Liegen kämpfen. Schon im Kindesalter beginnen viele mit dem Vereinssport, um später ganz oben mitzuspielen. </p>
				<p>Auch der Fußball, bei dem Profispieler in der Nationalmaschaft oder Bundesligamanschaften spielen, wird in Deutschland stark verfolgt. Ist wiedermal eine EM oder sogar WM, dann schaut jeder mit Freunden der deutschen Mannschaft zu und fiebert mit. Nicht nur solch große Turniere können mitverfolgt werden. Fans verschiedener Mannschaften unterstützen diese in der Bundesliga oder der Championsleague. </p>
								<div style="width:100%;text-align:center"><img src="Bilder/Fan.jpg" style="width:100%;max-width: 500px;margin:50px" class="Textbilder"></div>
				<p> Damit du dich perfekt im Thema Fußball auskennst haben wir für dich verschiedenste Artikel, über zum Beispiel Turniere oder die Regeln des Fußballspiels bereit gestellt. In der oben dargestellten Tabelle sind alle Artikel im Überblick dargestellt.</p>
			</div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){
				LOAD_ALL();
				LOAD_Al();
				RESIZE_TX();
				RESIZE();
				}
		</script>
	</body>
</html>
