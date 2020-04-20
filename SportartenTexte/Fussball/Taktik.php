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
					<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Fussball</a> - Taktik</div>
						<div style="width:250px;position:absolute;top:450px" id="Untermenü">
						<div style="" class="Unterlinks_H">Taktiken: </div>
							<div style="font-style:italic" onclick="var a = document.getElementsByTagName('h2')[0].offsetTop; window.scrollTo(0,a - 290)" class="Unterlinks">Spielsysteme/<br>Mannschaftstaktiken</div>
							<div style="" onclick="var b = document.getElementsByTagName('h2')[1].offsetTop; window.scrollTo(0,b - 290)" class="Unterlinks">Standartsituationen</div>
						<div style="height:50px;width:5px;background-color:#1473e6;transition:0.5s;position:relative;top:50px" id="Unterlinksshow"></div>
						<p  style="margin:5px; padding:0; margin-top: 150px;font-size:17px;text-align:center;width:200px;cursor:pointer"><a class="Textlinks" onclick="document.getElementById('Unterlinks').style.top= window.innerHeight - 300 + 'px'">Klicke hier für weitere Fußballthemen<br></a></p>
					</div>
					<div id="TEXT">
							<img src="Bilder/Fußball_MB.jpg" style="width:100%;position: relative" id="Background2" class="MB">
							<h1 style="" id="Topic">Taktik</h1>
							<div style="width:0px;height:1px;background-color:gray;margin-left:auto;margin-right:auto;transition:2s;margin-bottom: 100px" id="STDiv1"></div>
							<h2 style="">Spielsysteme / Mannschaftstaktiken</h2>
							<p><span class="firstletter">E</span>in Spielsystem im Fußball meint die <b>taktische Ausrichtung</b>, welche die <b>Positionen der verschiedenen Spieler</b> festlegt. Diese taktische Ausrichtung wird auch als Mannschaftstaktik bezeichnet. An ihr kannst Du auch sehen ob die Mannschaft offensiv oder defensive gestellt ist.
								Außerdem kann man die <b>Aufstellung an den Spielverlauf anpassen</b>, um somit besser auf das aktuelle Spiel zu reagieren. </p>
							<p>Die meist verwendete Schreibweise der Taktiken ist eine Vierer-Zahlenkombination, zum Beispiel <b>1-4-4-2</b>.<br> Die erste Zahl steht für den <b>Torhüter</b>, die zweite für die <b>Abwehrspieler</b>. Die dritte Zahl stellt die Spieler im <b>Mittelfeld</b> dar und die vierte die <b>Stürmer</b>. Da immer mit einem Torwart ge-spielt wird lässt man zu meist die 1 weg:  also 4-4-2.
								Zusätzlich gibt es auch Fünfer-Zahlenkombinationen wie zum Beispiel 1-5-2-2-1 oder in den seltensten Fällen Sechser-Kombinationen.</p>
							<p>Folgend haben wir mehrere Formationen aufgelistet und diese kurz anhand unterschiedli-cher Grafiken erläutert: </p>
							<h3>(1)-4-4-2</h3>
							<p><span class="firstletter">D</span>iese Aufstellung hatte zwischen den Jahren 1980 und 1990 seine populärste Phase und war sogar so populär, dass englische Fußballmagazine nach ihr benannt wurden: „FourFourTwo“.</p>
							<p>Man spielt mit zwei <b>Innenverteidigern</b>, welche den Kern der Abwehr bilden. Rechts und links von ihnen befinden sich die <b>Außenverteidiger</b>, welche den Innenverteidi-gern helfen sich zu stabilisieren und über die Außenseiten das Mittelfeld bei Angriffen unter-stützen. <br>
								Im Mittelfeld sind meistens zwei zentrale <b>Mittelfeldspieler</b> positioniert und zwei äußere Mittelfeldspieler, welche das Spielfeld in der Breite abdecken. Alle vier Mittelfeld-spieler unterstützen die Abwehr und den Sturm und müssen dabei viel Laufarbeit leisten. Folglich werden auf diesen Positionen nur konditionsstarke Spieler eingesetzt.
								Ganz vorne sind die <b>Stürmer</b> positioniert, welche hauptsächlich bei Angriffen in Ak-tion treten. Zusätzlich müssen diese aber auch mit nach hinten arbeiten um die Mannschaft auch dort zu unterstützen.
								</p>
							<div style="width:100%;text-align:center"><img class="Taktikpic Textbilder"src="Bilder/Taktik1.jpg"/></div>
							<h3>(1)-4-2-4</h3>
							<p><span class="firstletter">D</span>iese Aufstellung ist sehr offensiv und arbeitet mit einer <b>Viererkette als Verteidigung. </b> Die Aufgabe der Innen- und Außenverteidiger ähneln den Aufgaben der Verteidiger der 4-4-2 Formation. <br>
								Die Mittelfeldspieler müssen einiges an Laufarbeit leisten, da sie nur zu zweit sind. Zusätz-lich spielen sie sehr aggressiv und ballsicher. <br>
								Der Sturm wiederum besteht aus vier Spielern, welche hohen Druck auf die Verteidiger der gegnerischen Mannschaft ausüben.
								</p>
							<p>Mannschaften die diese Taktik praktizieren, sollten sehr ballsicher sein, das <b>Spiel domi-nieren</b> können und das ,,Umschaltspiel‘‘ gut beherrschen. Wichtig ist auch, dass dem Gegner kaum <b>Chancen zum Kontern</b> bleiben. </p>
							<div style="width:100%;text-align:center"><img class="Taktikpic Textbilder"src="Bilder/Taktik2.jpg"/></div>
							<h3>(1)-3-4-3</h3>
							<p><span class="firstletter">D</span>ie nächste Taktik wird nur sehr selten und in Spielsituationen genutzt, in denen die eigene Mannschaft zurück liegt. Sie dient hauptsächlich der Ballgewinnung und erfordert hohe Konzentration aller Spieler.</p>
							<p>In der Aufstellung ist nur ein <b>einzelner Verteidiger</b> eingeplant, was den Grund hat, möglichst viele, bis alle Spieler in der vorderen Hälfte des Spielfeldes stehen zu haben.</p>
							<p>Diese Art von Formation birgt dadurch natürlich ein <b>hohes Risiko</b>, wurde also nur in der finalen Phase eines Spiels angewendet, um einen <b>Rückstand auszugleichen</b>.</p>
							<p>Allerdings ist das <b>Mittelfeld sehr flexibel</b>, da man mit vier Spielern sowohl mit der Raute (einer defensive, einer offensive, einer rechts und einer links), als auch mit der Form eines Quadrates (zwei defensive und zwei offensive) spielen kann. Mit drei Stürmern kann man <b>starken Druck auf die Abwehr des Gegners</b> ausüben und somit auch schon im Angriff verteidigen, um den Ball nicht in die eigene Spielhälfte zu lassen.</p>
							<div style="width:100%;text-align:center"><img class="Taktikpic Textbilder"src="Bilder/Taktik3.jpg"/></div>
							<h3>(1)-4-3-3</h3>
							<p><span class="firstletter">E</span>ine ebenfalls <b>sehr offensive</b> Mannschaftstaktik ist die 4-3-3 Aufstellung. Die Viererkette der Abwehr scheint auf den ersten Blick ganz und gar nicht offensiv. Allerdings ist das Mittelfeld nur zu dritt, was bedeutet, dass die Mittelfeldspieler <b>große Laufarbeiten</b> vollbringen müssen, um den Sturm mit der Abwehr zu verbinden. Bei den drei Stürmern handelt es sich meistens um <b>zwei Flügelspieler</b> und einen zentralen Stürmer. Die Flügelspieler sollten schnell, trickreich und Flankenstark sein. Der Stürmer hingegen sollte Kopfballstark und Abschlusssicher sein. </p>
							<p>Diese Aufstellung wird ebenfalls häufig genutzt wenn die <b>Mannschaft in Rückstand</b> liegt.</p>
							<div style="width:100%;text-align:center"><img class="Taktikpic Textbilder"src="Bilder/Taktik4.jpg"/></div>
							<h3>(1)-5-3-2</h3>
							<p><span class="firstletter">D</span>iese sehr <b>defensive Aufstellung</b> verfügt über eine <b>Fünfer-Abwehrkette</b>, welche drei Innenverteidiger besitzt. Die Aufgabe der Außenverteidiger ist es die wenigen Mittelfeldspieler und Stürmer <b>über die Außen zu unterstützen</b>. Somit benötigen sie eine gute Kondition und müssen für ein ordentliches <b>Umschaltspiel</b> trainiert sein.</p>
							<div style="width:100%;text-align:center"><img class="Taktikpic Textbilder"src="Bilder/Taktik5.jpg"/></div>
							<h3>(1)-3-5-2</h3>
							<p><span class="firstletter">S</span>ehr vergleichbar mit der vorherigen Aufstellung ist die 3-5-2 Taktik. Diese besteht aus einer Abwehr von drei Innenverteidigern und zwei Außenverteidigern. Die beiden Außenverteidiger arbeiten in diesem Spielsystem sehr stark nach vorne mit um starke <b>Präsenz im Mittelfeld</b> aufzubauen. Außerdem sind sie dafür zuständig die Bälle möglichst früh abzufangen. </p>
							<p>Durch ordentliches Umschaltspiel, kann zusätzlich eine deutliche Überzahl im Mittelfeld auf die gegnerische Mannschaft einwirken.</p>
							<div style="width:100%;text-align:center"><img class="Taktikpic Textbilder"src="Bilder/Taktik6.jpg"/></div>
							<h3>(1)-5-4-1</h3>
							<p><span class="firstletter">D</span>ie 5-4-1 Taktik ist eine der <b>defensivsten Spielsysteme</b> im Fußball. <b>Neben fünf Abwehrspielern</b> sind zusätzlich <b>vier Mittelfeldspieler</b> auf dem Feld positioniert, wodurch der gegnerischen Mannschaft wenig Raum für Angriffe und dem Passspiel bleibt. </p>
							<p>Diese Aufstellung wird häufig von Mannschaften genutzt, die den aktuellen Spielstand zu ihren Gunsten halten wollen. Ist dies der Fall, so kann die Mannschaft mit der Fünfer-Abwehrkette und den vier Mittelfeldspielern die Schüsse des Gegners frühzeitig abblocken und das Durchkommen des Gegners deutlich erschweren, um somit das Risiko auf ein Gegentor weitgehend zu verringern.</p>
							<div style="width:100%;text-align:center"><img class="Taktikpic Textbilder"src="Bilder/Taktik7.jpg"/></div>
							<h3>(1)-4-2-3-1</h3>
							<p><span class="firstletter">D</span>ieses Spielsystem wird auch als <b>4-5-1</b> benannt. Die Fünferkombination im Mittelfeld stellt dabei die Aufteilung der Spieler einfacher und klarer dar: </p>
							<p>Es gibt zwei <b>defensive Mittelfeldspieler</b>, welche die Abwehrspieler im Aufbauspiel unterstützen. Sie können mit jedem Verteidiger ein <b>Dreieck bilden</b> um eine Überzahlsituation in der eigenen Spielhälfte zu erzeugen. Diese Abwehrspieler werden auch als <b>,,Doppel-Sechser‘‘</b> bezeichnet. </p>
							<p>Die anderen drei Mittelfeldspieler beteiligen sich meistens offensiv und unterstützen die Stürmer im Angriff. </p>
							<p>Durch dieses Spielsystem kann die Mannschaft sehr flexibel im Mittelfeld agieren und somit einen hohen Ballbesitz erlangen.</p>
							<div style="width:100%;text-align:center"><img class="Taktikpic Textbilder"src="Bilder/Taktik8.jpg"/></div>
							<h2>Standartsituationen</h2>
							<h3>1)    Der Freistoß (1.Variante)</h3>
							<p><span class="firstletter">B</span>ei einem indirekten Freistoß, der als Flanke gedacht ist, müssen sich vier Spieler an der Strafraumgrenze aufstellen. Zwei von ihnen sprinten sobald der Freistoß geschlagen wurde zum ersten Pfosten und versuchen dort zum Kopfball zu kommen. Die anderen zwei wiederrum, versuchen am zweiten Pfosten zum Kopfball zu kommen, so hat man beide Pfosten bedeckt. </p>
							<p>Vor dem Strafraum positioniert sich ein weiterer Spieler um Bälle auf das Tor zu bringen, die von den gegnerischen Verteidigern aus dem Strafraum herausgeköpft wurden. Außerdem positioniert sich jeweils ein Spieler an dem rechten und linken Strafraumeck, um die kurzen Abpraller abzufangen. </p>
							<p>Mit diesen Techniken hat man einen großen Raum im und um den Strafraum abgedeckt und hat somit gute Chancen auf ein Tor.</p>
							<div id="StandfirstInfo">
								<p>Wusstest Du, dass das Freistoßspray in Deutschland das erste Mal im Jahr 2014 genutzt wurde?</p>
							</div>
							<h3>2)   Der Freistoß (2. Variante)</h3>
							<p><span class="firstletter">D</span>iese Freistoßtaktik kann man bei einem Freistoß etwas näher am Tor des Gegners (16m-26m) benutzen. Ein Spieler positioniert sich in der Mauer des Gegners und wartet auf die Ausführung des Freistoßschützen. Dieser Schießt den Ball nicht wie alle erwarten direkt auf das Tor, sondern spielt einen strammen Pass senkrecht an der Mauer vorbei. Der Spieler, der sich in der Mauer positioniert hat sprintet dem Ball hinterher, versucht vor allen anderen gegnerischen Spielern an den Ball zu kommen und ihn in das Tor des Gegners zu Schießen.       </p>
							<div style="width:100%;text-align:center"><img class="Textbilder" src="Bilder/FreistoßFrauen.jpg" max-width="1200px"/></div>
							<h3>3)   Der Eckball (1.Variante)</h3>
							<p><span class="firstletter">B</span>ei einem Eckball können sich vier Spieler zwischen Elfmeterpunkt und Strafraumgrenze positionieren. Wenn der Eckball ausgeführt wird, sprinten drei der vier Spieler an den vorderen Bereich des Fünfmeterraums. Der letzte der vier begibt sich an das hintere Eck des Fünfmeterraums, wodurch die Aufmerksamkeit auf die drei vorderen Spieler gelenkt wird und der Flankengeber auf das hintere Eck des Fünfmeterraums flanken kann. An dieser Stelle befindet sich der einzelne Spieler, welcher freier steht als die drei vorderen. </p>
							<p>Natürlich kann der Flankengeber auch auf einen der drei vorderen flanken und dieser kann dann die Flanke verlängern oder selbst verwandeln. Außerdem wird noch jeweils ein Spieler an jedes Strafraumeck gestellt um Abpraller abzufangen und auf das Tor zu bringen.</p>
							<div style="width:100%;text-align:center"><img class="Textbilder" src="Bilder/Eckfahne.png" max-width="1000px"/></div>
							<h3>4)   Der Eckball (2.Variante)</h3>
							<p><span class="firstletter">B</span>ei dieser Eckballvariante positionieren sich fünf Spieler in der Mitte der oberen 16ner Linie und warten darauf, dass der Ball in den Strafraum gebracht wird. Wenn dies passiert, sprinten alle fünf Spieler an verschiedene Positionen im Strafraum um eine möglichst große Fläche abzudecken und somit eine größere Chance zu haben an den Ball zu kommen. </p>
							<p>Ein Spieler versucht am vorderen Eck des Fünfmeterraums an den Ball zu kommen, einer am hinteren Eck, wiederum einer positioniert sich vor dem Torwart und die restlichen zwei sprinten zur Mitte der vorderen Linie des Fünfmeterraums. Durch das plötzliche Lossprinten der Stürmer erhofft man sich Verwirrtheit in der Abwehrreihe des Gegners und somit bessere Chancen für das Tor.</p>
							<div style="width:100%;text-align:center"><img class="Textbilder" src="Bilder/Eckstoß.jpg" max-width="1000px"/></div>
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
								if(window.pageYOffset > 0 && document.getElementsByTagName("h2")[1].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "50px";document.getElementsByClassName('Unterlinks')[0].style.fontStyle = "italic";document.getElementById('Unterlinksshow').style.height = "50px"}
								if(window.pageYOffset > document.getElementsByTagName("h2")[1].offsetTop - 300){document.getElementById('Unterlinksshow').style.top = "110px";document.getElementsByClassName('Unterlinks')[1].style.fontStyle = "italic";document.getElementById('Unterlinksshow').style.height = "30px";}
							}
							</script>
	</body>
</html>
