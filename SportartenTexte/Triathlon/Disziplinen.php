<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Triathlon.js"></script>
</head>
	<body onload="" onscroll="LOAD_TX();Unterlinks();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="RESIZE_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">
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
					<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Triathlon</a> - Disziplinen</div>
			<div style="width:250px;position:absolute;top:450px" id="Untermenü">
				<div style="" class="Unterlinks_H">INHALT: </div>
				<div style="font-style:italic" onclick="var a = document.getElementsByTagName('h2')[0].offsetTop; window.scrollTo(0,a - 290)" class="Unterlinks">Schwimmen</div>
				<div style="" onclick="var b = document.getElementsByTagName('h2')[1].offsetTop; window.scrollTo(0,b - 290)" class="Unterlinks">Radfahren</div>
				<div style="" onclick="var c = document.getElementsByTagName('h2')[2].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Laufen</div>
				<div style="height:30px;width:5px;background-color:#1473e6;transition:0.5s;position:relative;top:50px" id="Unterlinksshow"></div>
				<p  style="margin:5px; padding:0; margin-top: 150px;font-size:17px;text-align:center;width:200px;cursor:pointer"><a class="Textlinks" onclick="document.getElementById('Unterlinks').style.top= window.innerHeight - 300 + 'px'">Klicke hier für weitere Triathlonthemen<br></a></p>
		</div>
		<div id="TEXT">
			<h1>Triathlon Disziplinen</h1>
			<p class="TXCenter">Das besondere beim Sport Triathlon ist die Abwechslung. Man hat drei einzelne Sportarten, die man trainieren und ausüben kann – <a href="#Schwimmen" class="Textlinks">Schwimmen</a>, <a href="#Laufen" class="Textlinks">Laufen</a> und <a href="#Radfahren" class="Textlinks">Radfahren</a>. Somit trainiert man auch nicht nur einen bestimmten Muskel oder eine bestimmte Muskelgruppe, sondern den ganzen Körper(Oberkörper sowie Beine).</p>
			<h2>Schwimmen:</h2>
			<p>Schwimmen ist die Hassdisziplin von vielen Athleten. Dadurch, dass man beim Schwimmen sich im Wasser befindet und nicht einfach anhalten kann haben viele Leute Angst bzw. Bammel vor dieser Disziplin. Ein weiterer Punkt, der dazu kommt und sehr angsteinflößend sein kann, ist die Tatsache, dass  man theoretisch ertrinken kann und in Atemnot geraten kann. Außerdem ist es beim Schwimmen extrem wichtig eine gute Technik zu beherrschen und somit auch die einzige Möglichkeit wirklich schnell voran zu kommen.</p>
			<div style="width:100%;text-align:center"><img class="Textbilder" class="Tria"src="Bilder/1.jpg"/></div>
			<h3>Bewegungsanalyse:</h3>
			<p>Beim Schwimmen ist der ganze Körper in Aktion. Rumpf und Glieder befördern den Körper gemeinsam durchs Wasser, das ihn trägt, ihm aber auch Widerstand bietet. Eine stromlinienförmige Bewegung und ein kräftiger Armzug bringen einen effizient vorwärts.</p>
			<h4>Ein paar Tipps:</h4>
			<p style="color:red;margin-bottom:0">Ein kleiner Beinschlag bei dem kaum Wasser spritzt, bedeutet den geringsten Wasserwiderstand. Die Fußgelenke bleiben locker.</p>
			<p style="color:red;margin-bottom:0">Am effizientesten ist es, das Wasser nach hinten zu drücken und nicht nach unten, während sich der Körper in der Zug- und Druckphase des Armzugs über die Hand vorwärts bewegt.</p>
			<p style="color:red;margin-bottom:0">Es ist sehr wichtig, den Kopf tief zu halten und mit dem Gesicht im Wasser zu sein um den Widerstand möglichst gering zu halten. Zum Luftholen den Kopf drehen, nicht heben.</p>
			<p style="color:red">Die Hüften drehen um die Längsachse um den Körper Vortrieb zu geben.</p>
			<div style="width:100%;text-align:center"><img class="Textbilder" class="Tria" src="Bilder/2.jpg"/></div>
			<p>Eine gute Schwimmtechnik zeichnet sich durch effiziente Fortbewegung im Wasser aus. Grundlegend für die perfektionierte Ausführung der Technik sind drei Faktoren maßgeblich. Eine korrekte Kopf- und Körperhaltung verbessert die Dynamik und verringert den Widerstand, ebenso ein lockerer, kompakter Beinschlag. Präzises Eintauchen der Hand gibt soliden Halt und ein koordinierter Armzug sorgt für Vortrieb. </p>
			<h4>Man unterscheidet zwischen vier Phasen der Durchführung:</h4>
			<p><b><i>1. Eintauchen und Strecken</i></b></p>
			<p>In der ersten Phase taucht der vordere Arm in das Wasser ein. Der Deltamuskel und weitere Schultermuskeln liefern die Kraft für die vollständige Streckung des Arms.</p>
			<p><b><i>2. Hand anstellen und Drücken</i></b></p>
			<p>Der Ellenbogen ist seitlich in der Luft. Die Hand wird ins Wasser getaucht und zur Stabilisierung nach unten gedrückt. Gleichzeitig wird ein leichter Beinschlag durchgeführt und die Hüften und Schultern gedreht. Die Hand drückt den Körper gleitend nach vorne.</p>
			<p><b><i>3. Schieben und Ziehen</i></b></p>
			<p>Der Unterarm schiebt gegen den Wasserwiderstand nach hinten  und zieht so den Körper nach vorn. Gesäßmuskeln und Oberschenkelrückenseiten liefern Kraft für den Beinschlag und sorgen für Gleichgewicht und Vortrieb.</p>
			<p><b><i>4. Abschluss und Rückholphase</i></b></p>
			<p>Während der Arm aus dem Wasser und über den Kopf gezogen wird, beschleunigt der Körper maximal und sollte möglichst entspannt sein, bereit für den nächsten Armzug. Während der Rückholarm nach oben gezogen wird, taucht der vordere Arm in das Wasser ein.</p>
			<h3>Biomechanik:</h3>
			<p>Da man beim Kraulen Arme und Beine kräftig gegen den Wasserwiderstand bewegt und dabei relativ rasch vorankommt und mit ein wenig Übung dieses Tempo auch für einen gewissen Zeitraum halten kann, ist es einer der besten Mischungen aus Kraft und Ausdauer. Man trainiert Rumpf-, Arm-, und Beinmuskulatur und natürlich vor allem die Schultermuskeln. Beim Triathlon allgemein findet das Schwimmen großteils in freien Gewässern statt(Meer, See, Fluss,…). So ist der Start oft auch ein Massenstart, das heißt dass alle oder viele Triathleten in mehreren Gruppen in das Gewässer rein springen und im Getümmel losschwimmen. Solche Starts sind sehr unangenehm und es ist keine Seltenheit auch  mal Tritte oder Schläge abzubekommen.</p>
			<h3>Wichtig für das Ergebnis? </h3>
			<p id="Radfahren">Normalerweise gilt der Satz: „Beim Schwimmen kann man das Rennen verlieren aber nicht gewinnen“. Damit ist gemeint, dass wenn man im Schwimmen nicht so gut ist, dass man dann, besonders bei kurzen Distanzen, zu viel Abstand auf die Führenden verliert, dass die Chance, das Rennen noch zu gewinnen sehr gering ist. Bei  größeren Wettkämpfen, wie Lang oder Mitteldistanzen kann man diesen Rückstand noch relativ gut durch Radfahren und Laufen ausgleichen. Das Gewinnen eines Rennens nur durch eine herausragende Schwimmleistung ist allerdings nur sehr unwahrscheinlich, da es durch den so geringen Abstand, den man sich erschwimmen kann, zu Duellen auf dem Rad und beim Laufen kommt. Somit ist es  sehr schwer bis unmöglich ein Wettkampf nur durch die Schwimmleistung zu gewinnen.</p>
			<h2>Radfahren:</h2>
			<p>Das Radfahren ist beim Triathlon die Disziplin, die am meisten Zeit beansprucht und bei der man auch am meisten Strecke zurücklegt. Der wichtigste Grundsatz dabei ist, dass man mit möglichst geringem Kraftaufwand möglichst viel Strecke zurücklegt. Man muss auf dem Fahrrad die bestmöglich aerodynamische Position erreichen um schneller zu sein. Alle Triathlonräder haben einen Aero-Lenker. Dieser ist primär für die Liegeposition gedacht, sehr dünn und aerodynamisch gebaut und wiegt sehr wenig. Somit kann man(siehe Bild) eine perfekte, windschnittige Liegeposition einnehmen, bei der man die Arme auf die Extensions(Aeroauflieger) legt und den Kopf möglichst tief hält. Weitere Bestandteile des Zeitfahrens sind auch Aerohelm, Hochprofil-carbon-laufräder, Scheiben, Klickpedale, enger, meist einteiliger Anzug und ein Rahmen mit aerodynamischen Optimierungen.    </p>
			<div style="width:100%;text-align:center"><img class="Textbilder" class="Tria" src="Bilder/3.jpg" /></div>
			<h3>Biomechanik: </h3>
			<p id="Laufen">Radfahren beansprucht Quadrizeps, Gesäßmuskeln, Hüftbeuger, Oberschenkelrückseite und Wadenmuskeln. In der Druckphase sind Quadrizeps(Oberschenkelvorderseite), Gesäß- und Wadenmuskeln aktiv, die anderen sorgen für einen geschmeidigen Ablauf des Tretzyklus.</p>
			<h2>Laufen: </h2>
			<p>Das Laufen ist die dritte und letzte Sportart beim Triathlon. Bei dieser finalen Disziplin verbringt man die zweitmeiste Zeit und legt die zweitmeiste Strecke zurück.  Außerdem zieht  man sich hier auch die meisten Verletzungen zu, die nicht durch Unfälle zustande kommen. Das liegt voll und ganz daran, dass das Laufen die einzige Disziplin im Triathlon ist, bei der der Körper sein Gewicht selber tragen muss. So müssen alle Glieder der kinetischen Kette intakt sein, um den Aufprall abzufangen und somit die Belastung der Knochen und Gelenke zu reduzieren. Wenn dies nicht der Fall ist oder der Bewegungsablauf nicht stimmt, kann es schnell zu Verletzungen und zu Schmerzen beim Laufen kommen. Wenn Sie im Wettkampf von Rad steigen fühlen sich die Beine als erstes wie Pudding an. Mit trainierten Muskeln entlang des gesamten Körpers, ist es einfacher den Lauf bis zur Ziellinie durchzuhalten.</p>
			<div style="width:100%;text-align:center"><img class="Textbilder" class="Tria" src="Bilder/4.jpg" /></div>
			<h3>Die Lauftechnik:</h3>
			<p>Der Laufzyklus besteht aus vier verschiedenen Prozessen: Abdrücken, Schwingen, Aufkommen und Stützen. Mit einer optimierten und guten Lauftechnik hat der Fuß weniger als ein halbe Sekunde Bodenkotakt. Mit einem besseren Laufstil lässt es sich auch schneller laufen.</p>
			<h3>Die Laufstile:</h3>
			<h4>Fersenlauf:</h4>
			<p>Beim Fersenlauf landet der Fuß mit der Fersenaußenkante zuerst auf dem Boden. Anschließend rollt er sich über die Fuß nach vorne ab bis er sich mit den Zehen wieder abdrückt. In den letzten 30-40 Jahren hat sich dieser Laufstil als den beliebtesten und am meisten benutzen herausgestellt, weshalb heutzutage fast alle Laufschuhe auf den Stil ausgerichtet sind.</p>
			<h4>Mittelfußlauf: </h4>
			<p>Beim Mittelfußlauf kommt der Fuß genau in der Mitte auf dem Boden auf, wobei der Fuß nahezu parallel zum Boden gehalten wird. Der Kraftaufwand bei dieser Technik sehr hoch weshalb die sie nur bedingt ökonomisch ist.</p>
			<h4>Vorfußlauf: </h4>
			<p>Beim Vorfußlauf landet man mit der Außenkante des Fußballens. Anschließend setzt der Fuß kurz mit der Ferse auf, womit dir Aufprallkraft verringert wird. Nach leichtem Rollen nach innen, wird die Kraft wider gesammelt und der Fuß drückt sich wieder ab. Vorfußläufer verbessern nicht nur ihre Laufleistung, sondern laufen sehr ökonomisch und risikofrei.   </p>
			<div style="width:100%;text-align:center"><img class="Textbilder" class="Tria" src="Bilder/5.jpg"/></div>
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
				<script>
				function Unterlinks(){
					if(window.pageYOffset > 350){document.getElementById('Untermenü').style.position = "fixed";document.getElementById('Untermenü').style.top = "100px"}else{document.getElementById('Untermenü').style.position = "absolute";document.getElementById('Untermenü').style.top = "450px"}
					document.getElementsByClassName('Unterlinks')[0].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[1].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[2].style.fontStyle = "normal";
					if(window.pageYOffset > 0 && document.getElementsByTagName("h2")[1].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "50px";document.getElementsByClassName('Unterlinks')[0].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h2")[1].offsetTop - 300 && document.getElementsByTagName("h2")[2].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "90px";document.getElementsByClassName('Unterlinks')[1].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h2")[2].offsetTop - 300){document.getElementById('Unterlinksshow').style.top = "130px";document.getElementsByClassName('Unterlinks')[2].style.fontStyle = "italic"}
				}
				</script>
	</body>
</html>
