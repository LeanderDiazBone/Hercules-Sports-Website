<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Tischtennis.js"></script>
</head>
	<body onload="" onscroll="LOAD_TX();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
		<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed;width: 100%" id="Background1_div"><img src="Bilder/Banner2.jpg" id="Background1" style="width:100%;opacity:0.7;position:relative;top: -250px;min-width: 900px"></div>
		<div id="Background1_div2" style="width: 100%"></div>
		<?php
			include("../menuSportarten.php");
		?>
		<?php
			include("Tischtennis_Unterlinks.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
							<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Tischtennis</a> - Regeln</div>
		<div id="TEXT">
			<h1>Regeln</h1>
      <h3>Satz</h3>
      <ul>
        <li>Ein Satz wird von dem Spieler gewonnen, der zuerst <b>11 Punkte</b> erzielt hat.</li>
        <li>Haben beide Spieler 10 Punkte erreicht, geht es in die <b>Satzverlängerung</b>.</li>
        <li>Es gewinnt derjenige den Satz, der zuerst mit 2 Punkten Vorsprung führt (Beispiel: 12:10, 13:11 etc.).</li>
        <li>Nach jedem Satz werden die Seiten gewechselt. Im entscheidenden letzten Satz findet der Seitenwechsel statt, sobald einer der Spieler 5 Punkte erreicht</li>
      </ul>
      <h3>Spiel</h3>
      <ul>
        <li>Im Mannschaftsspielbetrieb wird ein Spiel solange gespielt, bis ein Spieler zuerst <b>drei Sätze</b> gewonnen hat.</li>
        <li>Im Höchstfall können also fünf Sätze gespielt werden. Bei einem 2:2 Satzgleichstand bringt der fünfte Satz die Entscheidung.</li>
        <li>Bei anderen Veranstaltungen, z.B. <b>Turnieren</b>, können aber auch zwei oder vier Gewinnsätze gespielt werden.</li>
      </ul>
      <h3>Aufschlag</h3>
      <ul>
        <li>Das Recht der Aufschlag-, Rückschlag- und Seitenwahl wird durch das Los entschieden.</li>
        <li>Der Gewinner des Loses kann sich für Auf- oder Rückschlag entscheiden oder eine Seite wählen.</li>
        <li>Der Aufschlag beginnt damit, dass der Ball frei auf der geöffneten Hand liegt.</li>
        <li>Der Ball muss <u>hinter dem Tisch</u>, oberhalb der Spielfläche, mindestens 16 cm senkrecht hochgeworfen werden.</li>
        <li>Bevor der Ball geschlagen wird, darf er nichts berühren (z.B. Boden oder Körper).</li>
        <li>Der Aufschläger muss den Ball mit dem Schläger so spielen, dass er zuerst auf der eigenen und dann auf der gegnerischen Tischhälfte aufspringt.</li>
        <li>Hierbei darf der Ball nicht von einem Körper-, Kleidungsteil oder vom Doppelpartner verdeckt sein.</li>
        <li>Berührt der Ball dabei das Netz, so ist dies ein "Netzaufschlag" und muss wiederholt werden.</li>
        <li>Voraussetzung ist aber, dass der Aufschlag ansonsten regelgerecht ist.</li>
        <li>Berührt der Ball beispielsweise erst das Netz und geht dann ins Aus, bekommt der Rückschläger einen Punkt.</li>
        <li>Wird der hochgeworfene Ball beim Aufschlag nicht getroffen, ist dies ein Fehler, und der Gegner erhält einen Punkt.</li>
        <li>Beim Einzel darf der Aufschläger entscheiden, ob er den Aufschlag mit der Rückhand oder der Vorhand und von welcher Seite er den Aufschlag ausführt. Ebenfalls gibt es <u>keine Vorschriften auf welcher gegnerischen Hälfte der Aufschlag aufkommen muss! </u></li>
        <li>Es muss gewartet werden, bis der Gegner zum Rückschlag bereit ist. Ansonsten muss der Aufschlag wiederholt werden.</li>
        <li>Jeder Spieler schlägt je zweimal auf, dann wechselt das Aufschlagrecht zum Gegner.</li>
        <li>Eine Ausnahme gibt es in der Satzverlängerung: Ab einem Spielstand von 10 zu 10 wird abwechselnd aufgeschlagen.</li>
      </ul>
      <h3>Ballwechsel</h3>
      <ul>
        <li>Anders als beim Aufschlag, muss der Ball direkt auf die gegnerische Tischhälfte gespielt werden.</li>
        <li>Bevor der Ball gespielt wird, darf er nur einmal auf der eigenen Tischhälfte aufgesprungen sein.</li>
        <li>Es ist <u>nicht erlaubt</u>, den Ball wie beim Tennis "volley" aus der Luft anzunehmen.</li>
        <li>Bevor der Ball auf die gegnerische Tischhälfte auftrifft, darf er nur das Netz oder den Netzpfosten berühren. Berührt der Ball hingegen andere Gegenstände wie Kleidung, die Decke oder die Wand, gilt dies als Fehler.</li>
        <li>Ein Ball zählt nur dann, wenn er die gegnerische Spielhälfte, inkl. Oberkante, trifft. Als Fehler gilt es, wenn er die Seite des Tisches berührt.</li>
        <li>Es ist nicht erlaubt, den Ball zu spielen und sich gleichzeitig mit der anderen Hand auf der Platte abzustützen.</li>
      </ul>
      <h3>Besonderheiten beim Doppel</h3>
      <ul>
        <li>Das Doppelpaar, das zuerst den Aufschlag ausführt, darf entscheiden, welcher Partner aufschlägt.</li>
        <li>Anschließend stellen sich die Rückschläger auf.</li>
        <li>Bei jedem Aufschlagwechsel schlägt der bisherige Rückschläger auf, und der Partner des bisherigen Aufschlägers wird Rückschläger.</li>
        <li>Im danach folgenden Satz entscheidet dann das Paar, das im Satz zuvor zunächst den Rückschläger stellte, welcher Spieler aufschlägt. Rückschläger ist dann derjenige, von dem im Satz zuvor die Aufschläge angenommen wurden.</li>
        <li>Beim Aufschlag muss der Ball zuerst die rechte Spielfeldhälfte des Aufschlägers berühren und dann in der diagonal gegenüberliegenden gegnerischen Hälfte aufkommen.</li>
        <li>Die Doppelpartner schlagen immer <u>abwechselnd</u>. Ein Punktgewinn für den Gegner erfolgt, wenn die Reihenfolge nicht eingehalten wird.</li>
        <li>Muss ein Entscheidungssatz gespielt werden, werden die Seiten gewechselt, sobald ein Doppel fünf Punkte erreicht hat. Hierbei wird auch die Rückschlagreihenfolge geändert.</li>
        <li>Passiert ein Irrtum während des Wechsels und er wird erst nach dem Ballwechsel bemerkt, so zählen die gespielten Punkte trotzdem.</li>
      </ul>
      </div>

      </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
