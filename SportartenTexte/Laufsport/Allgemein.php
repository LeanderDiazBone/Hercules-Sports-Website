<!DOCTYPE HTML>
<html>
<?php
	include("../headSportarten.php");
?>
	<body onload="" onscroll="LOAD_Al();RESIZE()" onresize="RESIZE_TX();LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">

		<?php
			include("../menuSportartenAl.php");
		?>
		<?php
			include("../../menu_MOBILE.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
		<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed" id="Background1_div"><img src="Bilder/Banner2.png" id="Background1" style="width:100%;opacity:0.7"></div>
		<h1 id="Background_H1" style="left:-30px">Laufsport</h1>
		<div id="Background1_div2" style="width: 100%"></div>
		<img src="Bilder/MB_Banner2.jpg" style="width:100%;position: relative" id="Background2" class="MB">
		<div style="width: 100%; margin-top: 50px; text-align: center" class="MB"><h4 style="margin-bottom: 0; position: relative; top: 20px">Was du hier findest ...</h4></div>
		<div style="width:100%;text-align:center;height:300px;margin-bottom: 200px">
			<a href="Training.php" style="text-decoration:none"><div style="margin-left:0%;width:25%" class="UnterlinksSportarten3">
				<h3 style="" class="UnterlinksSportarten_h">Training</h3>
				<div  class="UnterlinksSportarten_li">
					<li><a href="Training.php#LF_H1">Langsamer Dauerlauf</a></li>
					<li><a href="Training.php#LF_H2">Tempodauerlauf</a></li>
					<li><a href="Training.php#LF_H3">Intervalltraining</a></li>
					<li><a href="Training.php#LF_H4">Bergsprints</a></li>
				</div>
				<img src="Bilder/Unterlink_4.png" width="20px" style="margin-top:50px"></img>
			</div></a>
			<a href="Technik.php" style="text-decoration:none"><div style="margin-left:25%;width:25%" class="UnterlinksSportarten3">
				<h3 style="" class="UnterlinksSportarten_h">Technik</h3>
				<div style=""  class="UnterlinksSportarten_li">
					<li><a href="Technik.php#LF_H5">Laufstil</a></li>
					<li><a href="Technik.php#LF_H6">Oberkörperrotation</a></li>
					<li><a href="Technik.php#LF_H7">Pacing</a></li>
					<li></li>
				</div>
				<img src="Bilder/Unterlink_3.png" width="40px" style="margin-top:75px"></img>
			</div></a>
			<a href="Ubungen.php" style="text-decoration:none"><div style="margin-left:50%;width:25%" class="UnterlinksSportarten3">
				<h3 style="" class="UnterlinksSportarten_h">Übungen</h3>
				<div  class="UnterlinksSportarten_li">
					<li style="padding-top:15px"><a href="Ubungen.php">Anfersen</a></li>
					<li><a href="Ubungen.php">Kniehebelauf</a></li>
					<li><a href="Ubungen.php">Fußgelenksarbeit</a></li>
					<li><a href="Ubungen.php">...</a></li>
				</div>
				<img src="Bilder/Unterlink_2.png" width="20px" style="margin-top:40px"></img>
			</div></a>
			<a href="Wettkampfe.php" style="text-decoration:none"><div style="margin-left:75%;width:25%" class="UnterlinksSportarten3">
				<h3 style="" class="UnterlinksSportarten_h">Wettkämpfe</h3>
				<div  class="UnterlinksSportarten_li">
					<li><a href="Wettkampfe.php#LF_H8">5 Kilometerlauf</a></li>
					<li><a href="Wettkampfe.php#LF_H9">10 Kilometerlauf</a></li>
					<li><a href="Wettkampfe.php#LF_H10">Halbmarathon</a></li>
					<li><a href="Wettkampfe.php#LF_H11">Marathon</a></li>
					<li><a>...</a></li>
				</div>
				<img src="Bilder/Unterlink_1.png" width="40px" style="margin-top:10px"></img>
			</div></a>
		</div>
		<div id="TEXT"/>
		<p><span class="firstletter">H</span>äufig wird das Laufen als sehr simpler Sport angesehen und dementsprechend, ohne viel Nachdenken, ausgeführt. Jedoch gibt es auch beim, oft sehr einfach aussehenden Joggen, einige Dinge zu beachten. </p>
		<p>Welcher <a class="TextLinkBold" href="Technik.php">Laufstil</a> ist der effizienteste, auf welchem Gelände sollte ich meine Laufrunden ausführen, brauche ich spezielle <a class="TextLinkBold"href="../../shop.php">Laufschuhe</a> und wie lange sollten meine Runden sein?</p>
		<img id="HighwayJogger"src="Bilder/HighwayJogger.jpg"/>
		<p>All diese Fragen hängen von vielen Faktoren ab. Direkt zu Beginn ist klarzustellen, dass all diese Fragen von jedem selbst geklärt werden müssen. Es gibt keinen für alle Sportler perfekten Laufstil, es gibt auch nicht die perfekten <a class="TextLinkBold"href="../../shop.php">Laufschuhe</a>, mit denen jeder die besten Zeiten erreicht.</p>
		<p>Jeder Läufer, egal ob ,,Ab und Zu‘‘- Jogger, Hobbysportler, oder <a class="TextLinkBold"href="../Triathlon/Allgemein.php">Triathlet</a>, muss für sich die passenden Faktoren zusammenlegen. Denn niemand hat die gleichen Voraussetzungen und muss daher lernen, seine eigene/n Umgebung und Möglichkeiten optimal für sich  nutzen.</p>
		</div>
			<div style="width:100%;height:0px;"></div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){
				RESIZE_TX();
				LOAD_ALL();
				LOAD_Al();
				}
				function Sportartentextscroll(){
	//				document.getElementById('Unterlinks').style.left = window.innerWidth - 250 + window.pageYOffset + 'px';
					document.getElementById('Scrollinfo').style.opacity = 1-window.pageYOffset;
					if(window.pageYOffset>window.innerHeight*0.3){document.getElementById('STDiv1').style.width='1000px'}
				}
				var a = 0;
				function ErfahreMehrScroll(){
					if(window.pageYOffset < window.innerHeight - 50){
						a = a + 50;
						window.scrollTo(0,a);
//						document.getElementById("Unterlinks").style.left = window.innerWidth - 250 + window.pageYOffset + 'px';
						setTimeout("ErfahreMehrScroll()", 20);
					}else{a = 0}
				}
				setTimeout("Scrollinfo()", 3000);
				function Scrollinfo(){setTimeout(document.getElementById('Scrollinfo').style.top = window.innerHeight - 100 + 'px', 5000);}
				function Styleswitch(){
					if(window.innerWidth < 1100 && window.innerWidth > 800){document.getElementById('resizeStyle').href = '../Stylesheets/Sportarten_Allgemein_Resize_1.css'}else{document.getElementById('resizeStyle').href = '#'}
					if(window.innerWidth < 800 && window.innerWidth > 0){document.getElementById('resizeStyle2').href = '../Stylesheets/Sportarten_Allgemein_Resize_2.css'}else{document.getElementById('resizeStyle2').href = '#'}
				}
				</script>
	</body>
</html>
