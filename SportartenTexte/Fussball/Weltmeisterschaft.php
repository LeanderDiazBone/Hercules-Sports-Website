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
					<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Fussball</a> - Turniere</div>
				<div style="width:250px;position:absolute;top:450px" id="Untermenü">
				<div style="" class="Unterlinks_H">Tunierarten: </div>
				<div style="font-style:italic" onclick="window.scrollTo(0,450)" class="Unterlinks">Weltmeisterschaft</div>
				<div style="" onclick="window.scrollTo(0,3700)" class="Unterlinks">Europameisterschaft</div>
				<div style="" onclick="window.scrollTo(0,5900)" class="Unterlinks">Nations League</div>
				<div style="" onclick="window.scrollTo(0,8200)" class="Unterlinks">Europa League</div>
				<div style="" onclick="window.scrollTo(0,11900)" class="Unterlinks">DFB-Pokal</div>
				<div style="height:30px;width:5px;background-color:#1473e6;transition:0.5s;position:relative;top:50px" id="Unterlinksshow"></div>
				<p  style="margin:5px; padding:0; margin-top: 250px;font-size:17px;text-align:center;width:200px;cursor:pointer"><a class="Textlinks" onclick="document.getElementById('Unterlinks').style.top= window.innerHeight - 300 + 'px'">Klicke hier für weitere Fußballthemen<br></a></p>
			</div>
			<div id="TEXT">
				<img src="Bilder/Fußball_MB.jpg" style="width:100%;position: relative" id="Background2" class="MB">
				<h1 style="" id="Topic">Turniere</h1>
					<div style="width:0px;height:1px;background-color:gray;margin-left:auto;margin-right:auto;transition:2s" id="STDiv1"></div>
					<h2 style="margin-top:150px">FIFA Fußball-Weltmeisterschaft (WM)</h2>
	        <div class="Weltmfirstp">
						<p class="InfoKasten20" style="width:500px;float:right;margin-left:10px;position:relative; left: 100px">Besonders in fußballbegeisterten Ländern, wie Brasilien oder Deutschland ist die WM alle vier Jahre für viele Menschen das Highlight des Sommers, da viele Fans jedes Spiel gespannt im Fernsehen, oder wenn möglich im Stadion verfolgen.</p>
	          <p><span class="firstletter">D</span>ie Weltmeisterschaft ist ein Wettbewerb der <b>Nationalmannschaften</b>. Alle vier Jahre können sich Mannschaften der ganzen Welt für eine vierwöchige Endrunde qualifizieren, in der dann der Weltmeister des Fußballs erspielt wird.</p>
						<p>Veranstaltet wird das Turnier vom <b>Weltfußballverband FIFA</b>, jedoch ist für die Organisation (Stadionbereitstellung,) immer das Gastgeberland verantwortlich. </p>
	        </div>
	        <p>Durch die sehr hohen TV-Zuschauerquoten, wird die Endrunde der FIFA Fußball-Weltmeisterschaft (WM) als die <b>größte Sportveranstaltung weltweit</b> angesehen und ist neben den olympischen Spielen das wichtigste Sportereignis im internationalen Sport.</p>
	        <p>Das letzte Turnier fand 2018 in Russland statt. Den Sieg brachte die <b>Nationalmannschaft der Franzosen</b> heim, die das Turnier zum zweiten Mal gewinnen konnten.</p>
	        <h3>Ablauf:</h3>
					<p class="InfoKasten20" style="width:500px;float:right;margin-left:50px;position:relative; left: 100px">Wusstest du, dass  die Nationalmannschaft  des Teilnehmerlandes automatisch qualifiziert ist?<p>
	        <div class="Weltmfirstp"><p ><span class="firstletter">N</span>ach der Qualifikation, bei der jede Nationalmannschaft der Welt teilnehmen darf, werden die qualifizierten Mannschaften für das anschließende Turnier in Vierergruppen gelost.</p></div>
	        <p>Die darauf folgende Phase wird als <b>Gruppenphase</b> bezeichnet, bei der jede Mannschaft gegen alle drei Konkurrenten der Gruppe spielt. Hier kommen nur die beiden besten Mannschaften jeder einzelnen Gruppe weiter (also 2 von 4) und gelangen so in das Achtelfinale.</p>
					<div style="width:100%;text-align:center"><img class="Textbilder" src="Bilder/Deutschland2014.jpg" style="max-width: 400px;float:right;margin: 50px"/></div>
					<p class="Weltmfirstp">Ab diesem Zeitpunkt ist von der <b>K.O-Phase</b> die Rede, was heißt, dass ab sofort jede Mannschaft, die ein Spiel gegen eine andere Mannschaft verliert, aus dem Turnier ausscheidet. Dieses Schema zieht sich weiter über das Viertelfinale und Halbfinale, bis nur noch zwei Mannschaften übrig sind, die im darauf folgenden Finale um den Pokal kämpfen.</p>
					<p>Die jeweiligen Verlierer der Halbfinalspiele bestreiten das <b>Spiel um Platz 3</b>. Der Gewinner der WM wird als Weltmeister bezeichnet und bekommt einen goldenen Pokal. Der Rang des Weltmeisters ist die <b>am höchsten angesehene Auszeichnung im internationalen Fußball.</b></p>
					<h3>Weltmeister aller Weltmeisterschaften:</h3>
					<div style="width:100%;text-align:center"><img src="Bilder/Weltmeisterschaften.png" class="Textbilder2"/></div>
					<div style="width:100%;text-align:center;margin-top: 100px;margin-bottom: 100px"><img class="Textbilder" src="Bilder/Rasensprenger.jpg"/></div>
					<h2>UEFA Fußball-Europameisterschaft (EM)</h2>
					<p><span class="firstletter">D</span>ie UEFA Fußball-Europameisterschaft (EM), ist ein Turnier in Europa welches alle vier Jahre im Wechsel mit der WM (siehe oben)stattfindet. Organisiert wird dieses Turnier von der <b>UEFA</b>, dem europäischem Fußballverband und dient zur Ermittlung der besten Nationalmannschaft auf dem <b>Kontinent Europa.</b></p>
					<p class="Weltmfirstp">Der Europameister qualifiziert sich automatisch für den FIFA-Konferadtionen-Pokal (Confed-Cup). Der amtierende Europameister ist Portugal.</p>
					<p class="InfoKastenMitte"><b>Rekordsieger:</b> Deutschland, Spanien (je 3 Titel)<br><b>Rekordspieler: </b>Christiano Ronaldo (21 Spiele)<br><b>Rekordtorschütze: </b>Christiano Ronaldo, Michel Platini (je 9 Tore)</p>
					<h3>Ablauf:</h3>
					<p><span class="firstletter">Ä</span>hnlich, wie bei der Weltmeisterschaft, wird das Turnier wieder in eine Gruppenphase und in eine K.O-Phase aufgeteilt. In der K.O-Phase gilt das gleiche Prinzip wie in der WM: Wer einmal verliert ist ausgeschieden!</p>
					<p>Die Gruppenersten und Gruppenzweiten aus jeder Gruppe, sind automatisch im Achtelfinale. Ab dann geht es für die gewinnenden Mannschaften weiter ins Viertelfinale, ins Halbfinale und abschließend ins Finale. Die beiden Verlierer der Halbfinalspiele treten in einem Spiel um Platz drei gegeneinander an (dieses Spiel um Platz 3 findet jedoch seit dem Jahr 1984 nicht mehr statt).</p>
					<h3>Europameister aller Europameisterschaften:</h3>
					<div style="width:100%;text-align:center"><img id="Europameister"src="Bilder/Europameister.png" class="Textbilder2"/></div>
					<div style="width:100%;text-align:center;margin-top: 100px;margin-bottom: 100px"><img id="Eu2016"src="Bilder/Eu2016.jpg" class="Textbilder2"/></div>
					<h2 id="UEFA-NationsLeague">UEFA-Nations League</h2>
					<div id="firstdivUEFAL">
					<p><span class="firstletter">D</span>ie UEFA-Nations League ist ein <b>Turnier der Nationalmannschaften</b> einzelner Länder, dessen Erstaustragung vom 6. September 2018 bis zum 9. Juni 2019 stattfinden wird.</p>
					<p>Organisiert wird dieses Turnier von dem größten <b>europäischen Fußballverbund</b>, der <b>, UEFA</b>,. Die UEFA-Nations League wurde als <b>, neuer Spielmodus</b>,  neben den großen internationalen Turnieren, <a href="Weltmeisterschaft.html" class="Textlinks">WM und EM</a> eingeführt. </p>
					</div>
					<div class="InfoKastenMitte" style="height: 170px;max-width: 1000px">
						<h2>Info:</h2>
						<p>Die <b>UEFA</b> (Union of European Football Associations) ist ein gemeinnütziger Verein, welcher Teil des <b>Weltfußballvereins FIFA</b> ist. </p>
					</div>
					<h3>Ablauf:</h3>
					<p><span class="firstletter">D</span>er Ablauf des Turniers basiert auf einem komplexen System. Grundlegen zu beachten ist, dass <b>alle 55 Mitglieder der UEFA</b> teilnehmen. Die gesamte Gruppenphase findet in 4 Ligen statt: </p>
					<img src="Bilder/Nationsleague_Tabelle.jpg" style="width:100%" id="NationsLeague_Tabelle_pic">
					<table class="Tabelle" id="NationsLeague_Tabelle">
						<tr class="h1">
							<th>Liga A</th>
							<th>Liga B</th>
							<th>Liga C</th>
							<th style="border-right:none">Liga D</th>
						</tr>
						<tr>
							<th>4 Gruppen mit je 3 Nationalmannschaften</th>
							<th>4 Gruppen mit je 3 Nationalmannschaften</th>
							<th>1 Gruppe <br>(3 Mannschaften) <br>und 3 Gruppen <br>(4 Mannschaften)</th>
							<th style="border:none">4 Gruppen mit je 4 Nationalmannschaften</th>
						</tr>
					</table>
					<p>Jede Mannschaft muss zwischen September und November 2018 jeweils 2 Mal gegen alle Gruppengegner antreten.</p>
					<div style="width:100%;text-align:center"><img class="Textbilder" src="Bilder/Stadion.jpg"/></div>
					<p>In der <b>Endrunde im Juni 2019</b> spielen dann alle Gruppengewinner der ersten Liga (Liga A) gegeneinander, um den UEFA-Nations League Gewinner unter sich zu entscheiden. Dies geschieht in einer K.O.- Runde.  </p>
					<p>Eine Möglichkeit, sich für die <a  class="Textlinks">UEFA-Europaleague</a> zu qualifizieren, ist die Teilnahme an den Play-Offs. Bei diesen Play-Offs zugelassen sind die vier besten, <b>nicht-qualifizierten Mannschaften</b> aus jeder der vier Nations-League Ligen.</p>
					<p>Wo die <b>Endrunde</b>, also das Finale stattfindet ist zum jetzigen Zeitpunkt noch nicht festgelegt. Nur, dass es in einem der vier qualifizierten Nationen ausgetragen wird. Entschieden wird dies im Dezember 2018 vom <b>UEFA-Exekutivkomitee</b> ausgewählt. </p>
					<div class="InfoKastenMitte" style="height: 170px;max-width: 1000px">
					<h2>Info:</h2>
					<p>Ein <b>Play-Off</b>, auch Stichkampf genannt, ist ein Ausscheidungskampf im <a href="Fußball.html" class="Textlinks">Fußball</a>. Meistens basieren die Play-Offs auf dem K.O.- System.</p>
					</div>
					<h2>UEFA Europa-League</h2>
					<div class="AbsatznebenInfo">
						<p><span class="firstletter">D</span>ie UEFA Europa League ist nach der <a  class="Textlinks">UEFA Champions League</a> der zweithöchste und zweitwichtigste <b>Fußball-Wettbewerb</b> für Liga Mannschaften. Das Turnier umfasst eine Qualifikationsphase, eine Play-off-Runde und den Hauptwettbewerb (Gruppenphase + K.O.Runde), indem der Sieger des Turniers ausgespielt wird.</p>
						<p>Mit 5 Titeln ist der FC Sevilla <b>Rekordsieger</b>. <a href="#RanglisteEuL" class="Textlinks">(Hier kommst du sofort zur Rangliste!)</a> </p>
				  </div>
					<div style="width:100%;text-align:center"><img id="EuropaLeague"src="Bilder/EuropaLeague.png" class="Textbilder2"/></div>
					<h3>Ablauf:</h3>
					<p><span class="firstletter">D</span>as Turnier beginnt damit, dass alle 80 Mannschaften zwei <b>Qualifikationsrunden</b> mit Hin- und Rückspiel bestreiten. In der anschließenden <b>Gruppenphase</b>, ziehen dann die 40 Sieger der Qualifikation in acht Gruppen von je fünf Mannschaften ein. Die ersten 3 Mannschaften jeder Gruppe, kommen zusammen mit den acht dritten der <a class="Textlinks">Champions League</a> in die nächste Runde, dem <b>Sechzehntelfinale</b>. </p>
					<p>Diese Runde ist die letzte Runde bei der es Beschränkungen gibt, welche Mannschaften in welchen Gruppen sind. Gruppensieger treffen auf Gruppendritte, Gruppenzweite treffen auf dritte der <a class="Textlinks">Champions League</a>. </p>
					<p>Ab jetzt läuft die anschließende <b>K.O.- Phase</b> über Achtel-, Viertel und Halbfinale bis zum Finale, indem der Gewinner ermittelt wird.</p>
					<p><span class="firstletter">T</span>eilnahmeberechtigt für die UEFA Europa League sind alle <b>54 Mitglieder</b> der <a class="Textlinks" href="#UEFA-NationsLeague">UEFA</a>, dem <b>größten europäischen Fußballverband</b>. Zusätzlich dürfen noch bis zu drei Mannschaften aus jedem Verband in Europa teilnehmen, die in der Tabelle ihrer Liga die Plätze hinter den Champions - League - Slots, belegen. </p>
					<div class="InfoKasten20" style="height: 110px;float:right;margin-left:20px;margin-right: 200px">
						<h2>Info:</h2>
						<p style="text-align:center">Königsklasse ≙ Champions League</p>
					</div>
					<div class="AbsatznebenInfo">
						<p>Die Europa League ist eine gute Möglichkeit für Vereine, die es nicht schaffen sich für das größere Event, die <a class="Textlinks">UEFA Champions League</a>, zu qualifizieren. Durch den Gewinn der Europa League, können sich die Vereine einen Startplatz für die <b>Königsklasse</b> sichern.</p>
					</div>
					<div style="width:100%;text-align:center"><img class="Textbilder" src="Bilder/EuLStadion.jpg"/></div>
					<div style="width:100%;text-align:center;margin-bottom: 100px"><img id="RanglisteEuL"src="Bilder/RanglisteEuL.png" class="Textbilder2"/></div>
					<h2>DFB-Pokal</h2>
					<p class="AbsatznebenInfo"><span class="firstletter">D</span>er <b>DFB-Pokal</b> ist ein <b>Fußballwettbewerb für deutsche Ligamannschaften</b>. Dieser Pokalwettbewerb wird jährlich vom <b>DFB (Deutscher Fußball-Bund) </b> organisiert und ist nach der deutschen Meisterschaft der zweitwichtigste Titel im deutschen Vereinsfußball. </p>
					<div style="width:100%;text-align:center"><img src="Bilder/DFBnet.png" class="Textbilder2"/></div>
					<h3>Ablauf:</h3>
					<p><span class="firstletter">Z</span>ugelassen für die erste Hauptrunde sind alle 18 Mannschaften der 1. Bundesliga, alle 18 Mannschaften der 2. Bundesliga und die ersten 4 Mannschaften der 3. Liga. Hinzu kommen noch 24 Mannschaften aus unteren Ligen, welche meist aus den <b>Verbandspokalsieger</b> bestehen. </p>
					<p>Somit ist es in der ersten Runde gut möglich, dass <b>Amateurmannschaften</b> gegen attraktive Gegner wie <b>Erstligamannschaften</b> antreten können.</p>
					<div style="width:100%;text-align:center;"><img id="DFBPokal"src="Bilder/DFBPokal.png" class="Textbilder2"/></div>
					<p>Der Sieger des DFB-Pokals wird nun nach dem Prinzip des K.O.-Systems ausgespielt. Das bedeutet auch, dass es wenn es nach der regulären Spielzeit Unentschieden steht, der Sieger durch eine Verlängerung und gegebenenfalls ein Elfmeterschießen bestimmt wird. Das Finale wird traditionell in der deutschen Hauptstadt Berlin, im Olympiastadion ausgetragen.</p>
					<p>Der aktuelle <b>DFB-Pokal Titelträger</b> ist Eintracht Frankfurt, welche im Finale gegen <b>Bayern München</b> gewonnen haben. </p>
					<p id="lastpDFB">Der DFB-Pokal <b>Sieger</b> ist automatisch für die <a href="#EuropaLeague" class="Textlinks">Europa League</a> qualifiziert.</p>
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
						document.getElementsByClassName('Unterlinks')[3].style.fontStyle = "normal";
						document.getElementsByClassName('Unterlinks')[4].style.fontStyle = "normal";
						if(window.pageYOffset > -1 && 2700 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "50px";document.getElementsByClassName('Unterlinks')[0].style.fontStyle = "italic"}
						if(window.pageYOffset > 2700 && 5500 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "90px";document.getElementsByClassName('Unterlinks')[1].style.fontStyle = "italic"}
						if(window.pageYOffset > 5500 && 8000 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "135px";document.getElementsByClassName('Unterlinks')[2].style.fontStyle = "italic"}
						if(window.pageYOffset > 8000 && 11800 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "175px";document.getElementsByClassName('Unterlinks')[3].style.fontStyle = "italic"}
						if(window.pageYOffset > 11800){document.getElementById('Unterlinksshow').style.top = "220px";document.getElementsByClassName('Unterlinks')[4].style.fontStyle = "italic"}
					}
					</script>
	</body>
</html>
