<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Tennis.js"></script>
</head>
<body onload="" onscroll="LOAD_TX();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">
	<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
	</div>
	<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed;width: 100%" id="Background1_div"><img src="Bilder/Tennisspielfeld.jpg" id="Background1" style="width:100%;opacity:0.7;position:relative;top: -250px;min-width: 900px"></div>
	<div id="Background1_div2" style="width: 100%"></div>
	<?php
		include("../menuSportarten.php");
	?>
	<?php
		include("Tennis_Unterlinks.php");
	?>
		<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Tennis</a> - Technik</div>
		<div id="TEXT">
      <h3>Grundtechniken im Tennis:</h3>
      <p>Die <b>Grundschlagarten</b> im Tennis sind, wie auch in anderen Schlagsportarten, Vorhand, Rückhand und Aufschlag.</p>
      <p><u>Vorhand:</u></p>
      <div class="Absatz65">
        <p>Bei dem <b>Vorhand-Grundschlag</b> wird der Ball auf der Seite der Schlaghand mit dem Schläger gespielt (bei Rechtshänder rechts, bei Linkshänder links). Normalerweise wird dieser Schlag mit einer <b>Ausholbewegung</b> begonnen, woraufhin der Ball <u>auf Hüfthöhe</u> auf die andere Seite des Netztes gespielt wird. Gelehrt wird, dass dieser Schlag einhändig durchgeführt wird, jedoch gibt es auch im Profisport Ausnahmen.</p>
      </div>
      <img style="margin-top:10px;"class="Bild30"src="Bilder/Vorhand.jpg"/>
      <p><u>Rückhand:</u></p>
      <div class="Absatz65">
        <p>Bei dem <b>Rückhand-Grundschlag</b> wird der Ball auf der von der Schlaghand ausgehend gegenüberliegenden Seite mit dem Schläger gespielt (bei Rechtshänder <u>links</u>, bei Linkshänder <u>rechts</u>). Auch dieser Schlag beginnt mit einer Ausholbewegung, woraufhin der Spieler den Ball mit der Rückseite des Schlägers(andere Seite, als bei der Vorhand) auf die andere Seite des Netztes spielt. Ausgeführt kann dieser Schlag einhändig, wie auch <b>beidhändig</b>. Im Profisport ist die beidhändige Ausführung dominierend mit Ausnahme des Slice-Rückhand-Schlages.</p>
      </div>
      <img style="margin-top:90px;"class="Bild30"src="Bilder/Rückhand.jpg"/>
      <p><u>Aufschlag:</u></p>
      <p>Der <b>Aufschlag</b> im Tennis leitet einen Ballwechsel ein. Der Ball wird von einem Spieler, welcher sich hinter der Grundlinie seines eigenen Feldes befindet, in das gegenüberliegende Aufschlagfeld geschlagen. Der aufschlagende Spieler verstößt gegen die Regeln, wenn er vor dem Treffen des Balles die Grundlinie übertritt oder berührt. Bei einem Aufschlag hat man zwei Versuche. Wenn beide fehlschlagen wird der Punkt dem Gegner zugesprochen. Nach einem Spiel wechselt das Recht des Aufschlages.</p>
      <p>Beim Aufschlag gibt es die Möglichkeit ihn mit verschiedener Ballrotation durchzuführen. Man unterscheidet zwischen Topspin, Slice und einem schnellen, flachen Aufschlag mit Vorwärtsdrall (Drive).</p>
      <p>Wichtig für einen guten Aufschlag ist, dass der Ball <b>am höchstmöglichen Punkt</b> getroffen wird, nachdem man ihn senkrecht nach oben geworfen hat. Somit besitzt der Ball den besten Schlagwinkel und auch die höchste Geschwindigkeit. Damit können Höchstgeschwindigkeiten von über 200 km/h erreicht werden.</p>
      <h3>Schläge mit Ballrotation:</h3>
      <p><u>Drive:</u></p>
      <p>Ein Drive ist ein Grundschlag (Vorhand, Rückhand, Aufschlag) mit nur geringer <b>Balleigenrotation</b>. Er ist sehr intuitiv und technisch nicht sehr anspruchsvoll. </p>
      <p>Bei einem Drive fliegt der Ball sehr <u>flach über das Netz</u>, was den Nachteil hat, dass bei zu großer Stärke der Ball nicht mehr im gegnerischen Feld landet. Ein weiterer Nachteil ist, dass es für den Gegner nicht besonders schwer ist den Ball anzunehmen und zurückzuschlagen. </p>
      <p>Topspin:</p>
      <p>Der Topspin ist die meistbenutzte Art des <b>Anschnitts</b> im Tennis. Beim Topspin wird der Ball mit dem Schläger so geschlagen, dass er eine <b>Vorwärtsrotation</b> erfährt. Dieser ist für den Gegner besonders schwer einzuschätzen da der Ball eine <b>veränderte Flugbahn</b> besitzt und auch das Absprungverhalten verändert und <u>nahezu unberechenbar</u> ist. </p>
      <p>Ein großer Vorteil im Gegensatz zum Drive ist, dass der Ball sehr stark und dadurch auch schnell gespielt werden kann, ohne dass die Gefahr besteht, dass der Ball nicht mehr im Feld aufkommt. Wichtig bei dem Topspin ist die richtige Technik und ein gutes Maß an Kraft, da der Schlag viel Kraft erfordert.</p>
      <p><u>Slice:</u></p>
      <p>Der Slice ist das <b>Gegenteil des Topspins</b>. Der Ball erfährt hierbei eine starke <b>Rückwärtsrotation</b>, was zur Folge hat, dass der Ball sehr flach über das Netzt fliegt und es somit, wegen sehr variierenden Absprungverhalten, schwer ist, den Ball zurückzuschlagen. Hierbei ist auch aufzupassen den Slice nicht zu stark und schnell spielen zu wollen, da er sonst nicht mehr in dem Feld des Gegners landet, sondern durch die flache Flugbahn im Aus landet. </p>
      <p>Diese Art des Anschnittes des Balls kann taktisch vielfältig benutzt werden um das Spiel zu seinem eigenen Vorteil zu verändern. Beispielsweise wird ein langsam gespielter Slice häufig als Vorlage für einen Volley, also einen Angriff nahe am Netz benutzt. Außerdem ist es möglich das Spieltempo durch einen langsam gespielten Slice zu manipulieren, da es für den Gegner nicht sehr einfach ist, einen schnellen Konter zu spielen. Häufig ist er dazu gezwungen einen ebenso sehr langsamen Ball zurückzuspielen.</p>
      </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
