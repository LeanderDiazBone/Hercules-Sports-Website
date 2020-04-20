<!DOCTYPE HTML>
<html style="background-color: black">
<head>
<?php
	include("../headSportarten.php");
?>
  <script src="Fussball.js"></script>
</head>
	<body onload="" onscroll="LOAD_TX();Unterlinks();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="RESIZE_TX();RESIZE()" style="overflow-x:hidden;margin:0">
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
			<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Fussball</a> - Regelwerk</div>
			<div style="width:200px;position:absolute;top:450px" id="Untermenü">
			<div style="width:100%;color:white;font-family: Syncopate;font-size:18px;float:left;cursor:pointer;margin:10px;margin-left:20px;border-bottom: solid #3d567c 1px" >INHALT: </div>
				<div style="width:100%;color:white;font-family:Quicksand;font-size:18px;border-radius:5px;float:left;cursor:pointer;margin:10px;margin-left:20px;font-style:italic" onclick="var a = document.getElementsByTagName('h3')[5].offsetTop; window.scrollTo(0,a - 290)" class="Unterlinks">Spielfeld</div>
				<div style="width:100%;color:white;font-family:Quicksand;font-size:18px;border-radius:5px;float:left;cursor:pointer;margin:10px;margin-left:20px;" onclick="var b = document.getElementsByTagName('h3')[6].offsetTop; window.scrollTo(0,b - 290)" class="Unterlinks">Spielball</div>
				<div style="width:100%;color:white;font-family:Quicksand;font-size:18px;border-radius:5px;float:left;cursor:pointer;margin:10px;margin-left:20px;" onclick="var c = document.getElementsByTagName('h3')[7].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Spieler</div>
				<div style="width:100%;color:white;font-family:Quicksand;font-size:18px;border-radius:5px;float:left;cursor:pointer;margin:10px;margin-left:20px;" onclick="var c = document.getElementsByTagName('h3')[8].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Ausrüstung</div>
				<div style="width:100%;color:white;font-family:Quicksand;font-size:18px;border-radius:5px;float:left;cursor:pointer;margin:10px;margin-left:20px;" onclick="var c = document.getElementsByTagName('h3')[9].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Schiedsrichter</div>
				<div style="width:100%;color:white;font-family:Quicksand;font-size:18px;border-radius:5px;float:left;cursor:pointer;margin:10px;margin-left:20px;" onclick="var c = document.getElementsByTagName('h3')[10].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Spieldauer</div>
				<div style="width:100%;color:white;font-family:Quicksand;font-size:18px;border-radius:5px;float:left;cursor:pointer;margin:10px;margin-left:20px;" onclick="var c = document.getElementsByTagName('h3')[11].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Spielausgang</div>
				<div style="width:100%;color:white;font-family:Quicksand;font-size:18px;border-radius:5px;float:left;cursor:pointer;margin:10px;margin-left:20px;" onclick="var c = document.getElementsByTagName('h3')[12].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Abseits</div>
				<div style="width:100%;color:white;font-family:Quicksand;font-size:18px;border-radius:5px;float:left;cursor:pointer;margin:10px;margin-left:20px;" onclick="var c = document.getElementsByTagName('h3')[13].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Fouls</div>
				<div style="width:100%;color:white;font-family:Quicksand;font-size:18px;border-radius:5px;float:left;cursor:pointer;margin:10px;margin-left:20px;" onclick="var c = document.getElementsByTagName('h3')[14].offsetTop; window.scrollTo(0,c - 290)" class="Unterlinks">Standardsituation</div>
			<div style="height:30px;width:5px;background-color:#1473e6;transition:0.5s;position:relative;top:50px" id="Unterlinksshow"></div>
			<p  style="margin:5px; padding:0; margin-top: 150px;font-size:17px;text-align:center;width:200px;cursor:pointer"><a class="Textlinks" onclick="document.getElementById('Unterlinks').style.top= window.innerHeight - 300 + 'px'">Klicke hier für weitere Fußballthemen<br></a></p>
		</div>
		<div id="TEXT">
			<img src="Bilder/Fußball_MB.jpg" style="width:100%;position: relative" id="Background2" class="MB">
			<h1 style="" id="Topic">Regelwerk</h1>
				<div style="width:0px;height:1px;background-color:gray;margin-left:auto;margin-right:auto;transition:2s;margin-bottom: 100px" id="STDiv1"></div>
				<p><span class="firstletter">F</span>ußball ist eine Ballsportart in der zwei Mannschaften gegeneinander antreten und versuchen mehr <b>Tore</b> als das gegnerische Team zu <b>erzielen</b>.</p>
				<p>Wenn beide Mannschaften nach der abgelaufenen Spielzeit die gleiche Anzahl an Toren erzielt haben, kommt es entweder zur Verlängerung und zum <b>Elfmeterschießen</b> oder das Spiel geht unentschieden aus und es gibt <b>keinen Gewinner</b>. <br>Üblicherweise gibt es 2 Halbzeiten mit jeweils 45 Minuten plus Nachspielzeit. Es wird mit 11 Personen (10 Feldspieler + 1 Torwart) gegen 11 Personen gespielt. Wir zeugen Euch, welche Regeln bei einem Fußballspiel wichtig sind.</p>
				<h3 id="ÜberschriftSpielfeld">Das Spielfeld:</h3>
				<div style="width:100%;text-align:center"><img class="Textbilder" src="Bilder/Spielfeld.jpg"/></div>
				<p><span class="firstletter">D</span>as Spiel findet auf einem frei liegenden rechteckigen Feld statt. Normalerweise ist der Bodenbelag <b>Rasen</b>, jedoch wird manchmal auf einem <b>Hartplatz</b> und auf <b>Kunstrasen</b> gespielt. </p>
				<p>Die Maße der Seiten liegen bei 45 bis 90 Meter an der kurzen Seite und bei 90 bis 120 Meter an der langen Seite. Seit 2008 gelten bei Länderspielen die Maße 68 auf 105 Meter. 	</p>
				<p id="Spielball">Das gesamte Feld wird durch weiße <b>Kalklinien</b> abgegrenzt, die maximal 12 Zentimeter breit sein dürfen. Zudem werden auch Strafraum, Torraum, Mittellinie und Anstoßkreis gekennzeichnet.</p>
				<h3>Der Spielball:</h3>
				<div class="SpielballRegel">
					<p><span class="firstletter">G</span>espielt wird im Fußball mit einem Ball, welcher…</p>
					<ul>
						<li>kugelförmig ist</li>
						<li>aus geeignetem Material besteht (Leder oder Kunststoff)</li>
						<li>einen Umfang von mindestens 68cm und höchstens 70cm hat</li>
						<li>zu Spielbeginn mindestens 410g und höchstens 450g wiegt </li>
						<li>einen Druck von 0,6-1,1 kg/cm³ hat</li>
					</ul>
				</div>
				<img id="Spielball"src="Bilder/Spielball.jpg" style="float:right;margin-right:50px;margin-left:50px;max-width:400px" class="Textbilder"/>
				<p>Bei offiziellen Spielen der <a href="Weltmeisterschaft.html" class="Textlinks">FIFA</a> oder von den anderen Verbänden, wird der Ball von dem Verband gestellt und muss einigen <b>Qualitätsmerkmalen</b> entsprechen.</p>
				<p id="Spieler">Wenn ein Ball im Spiel beschädigt wird, wird das Spiel kurzzeitig unterbrochen und mit einem <b>Ersatzball</b> an der Stelle fortgesetzt, an der der vorherige Ball beschädigt wurde. Bei <a href="Taktik.html" class="Textlinks">Standards</a> (Anstoß, Eckstoß, Strafstoß, Einwurf) wird die Aktion wiederholt. Einen solchen Austausch des Balles darf nur mit der Erlaubnis des Schiedsrichters durchgeführt werden. <br>Zudem ist es erlaubt, zusätzliche Bälle neben dem Spielfeld bereit zu halten und sie unter Aufsicht des Schiedsrichters ins Spiel zu bringen wenn kein Ball vorhanden ist.</p>
				<h3>Die Spieler:</h3>
				<p>Ein Spiel wird von zwei Teams mit jeweils <b>11 Spielern</b> bestritten, von denen einer als Torhüter agiert. Das Spiel darf nicht begonnen oder fortgesetzt werden, wenn bei einer der zwei Mannschaften <b>weniger als 7 Spieler</b> auf dem Platz stehen. <br>Wenn während des Spiels ein Spieler eines Teams nicht mehr weiterspielen kann, gibt es die Möglichkeit des <b>Auswechselns. </b> Bei Ersatz eines Spielers durch einen Auswechselspieler sind folgende Bedingungen zu beachten:</p>
				<ul>
					<li>Der Schiedsrichter muss vor der Auswechslung informiert werden.</li>
					<li>Der auszuwechselnde Spieler muss vom Schiedsrichter die Erlaubnis bekommen, das Spielfeld zu verlassen, wenn er das Feld nicht schon verlassen hat.</li>
					<li><b>Weigert sich ein Spieler</b>, der ausgewechselt werden soll, das Spielfeld zu verlassen, so läuft das Spiel ohne Auswechslung weiter.</li>
					<li>Spieler, die ausgewechselt werden müssen das Feld nicht an der Mittellinie verlassen, sondern sind dazu berechtigt an <b>jeder Außenlinie</b> das Feld zu verlassen.</li>
				</ul>
				<p><b>Betreten</b> darf das Spielfeld von dem einzuwechselnden Spieler jedoch nur an der Mittellinie und erst, wenn eine Spielunterbrechung vorliegt, nachdem der auszuwechselnde Spieler das Feld verlassen hat und er ein Zeichen des Schiedsrichters empfangen hat.</p>
				<h3>Ausrüstung der Spieler:</h3>
				<p>Grundsätzlich ist es allen Spielern verboten, ,,gefährliche“ Ausrüstung zu verwenden. Somit ist <b>Schmuck</b> (Halsketten, Ringe, Armbänder, Ohrringe, Leder- und Gummibänder usw.) verboten. Auch ist es nicht gestattet den Schmuck mit Klebeband abzudecken.	             Wenn es dennoch vorkommt, dass ein Spieler Schmuck trägt, wird dieser aufgefordert das Teil zu entfernen. Wenn er dieser Anweisung immer noch nicht nachgeht, muss der Spieler das Feld bei der nächsten Unterbrechung verlassen. </p>
				<div class="SpielballRegel">
									<img id="gezeichenterFußballspieler"src="Bilder/gezeichenterFußballspieler.png" style="width:20%;float:right;margin-right:100px;margin-left:50px;max-width:300px"/>
				<p>Pflichtausrüstung besteht im Fußball aus:</p>
				<ul>
					<li>Trikot mit kurzen Ärmeln </li>
					<li>kurze Hose</li>
					<li>Stutzen (lange Socken über den Schienbeinschonern)</li>
					<li>Schienbeinschoner (Schutzvorrichtung, welche aus schützendem Material besteht und vor dem Schienbein getragen wird)</li>
					<li>Stollenschuhe</li>
					<li>Torwärtern ist es erlaubt lange Trainingshosen zu tragen</li>
				</ul>
				</div>
				<p>Ein wichtiger Aspekt bei der Trikotwahl der beiden Mannschaften ist, dass sie <b>Trikots</b> in <b>Farben</b> tragen, die die Schiedsrichter klar voneinander <b>unterscheiden</b> können.</p>
				<p>Des Weiteren ist ungefährliche Schutzausrüstung aus <b>weichem Material</b>, wie Kopfschutz, Gesichtsmasken oder Knie- und Armschoner auch erlaubt. Torhütermützen und Sportbrillen dürfen auch getragen werden.</p>
				<h3 id="DerSchiedsrichter">Der Schiedsrichter:</h3>
				<p>Jedes Fußballspiel hat einen Schiedsrichter als 23. Mann auf dem Feld, welcher das Spiel leitet und die uneingeschränkte Befugnis hat, die Spielregeln im Spiel durchzusetzen. </p>
				<p>Jeder Schiedsrichter entscheidet basierend auf seiner eigenen Einschätzung der Spielsituation. Es liegt auch in seiner Hand, welche Maßnahmen (Verwarnungen, gelbe Karte, rote Karte) er ergreift um die Spielregeln durchzusetzen. </p>
				<p>Die Entscheidungen des Schiedsrichters sind endgültig und stets von allen anderen zu akzeptieren. Wenn das Spiel fortgesetzt wird oder eine Halbzeit beendet wurde, darf der Schiedsrichter eine Entscheidung nicht mehr ändern, wenn er feststellt, dass diese nicht korrekt ist.</p>
				<div class="InfoKastenMitte" id="InfoKasten_MB" style="max-width:1000px;width:90%;height:100px">
					<h2><span>Du willst mehr über den</span> <b>FUßBALLSCHIEDSRICHTER</b> <span>wissen?</span></h2>
					<p>Wir haben einen ausführlichen Bericht über Schiedsrichter verfasst, <a href="Schiedsrichter.html"  class="Textlinks">den du hier findest!</a></p>
				</div>
				<h3>Spieldauer:</h3>
				<p>Das Spiel besteht aus zwei <b>Halbzeiten von je 45 Minuten</b>, die nur verkürzt werden können, wenn eine Absprache zwischen Schiedsrichter und beiden Teams vorliegt und den Wettkampfbestimmungen entspricht.</p>
				<p>Zwischen den beiden Spielabschnitten steht den Spielern, Trainern und Schiedsrichtern eine <b>Halbzeitpause von 15 Minuten</b> zu Verfügung, um sich auszuruhen und sich neu zu ordnen. Oft wird die Halbzeitpause von den Trainern genutzt um die Taktik umzustellen und die Spieler zu motivieren.</p>
				<p>Der Schiedsrichter bestimmt in jeder Halbzeit die Nachspielzeit, um die Spielzeit auszugleichen, die bei folgenden Aktionen verloren ging:</p>
				<ul>
					<li>absichtliches Zeitschinden </li>
					<li>Trinkpausen (diese gibt es meist nur, wenn sich ein Spieler verletzt hat)</li>
					<li><a href="#DerSchiedsrichter"  class="Textlinks">Maßnahmen des Schiedsrichters</a> </li>
					<li>Auswechselungen</li>
					<li>Behandlung von verletzten Spielern</li>
				</ul>
				<p>Ein abgebrochenes Spiel wird im Normalfall wiederholt.</p>
				<h3>Bestimmung des Spielausgangs:</h3>
				<p>Ein Tor ist erzielt, wenn der Ball die Torlinie unter der Latte und zwischen den Pfosten <b>vollständig</b> überquert hat. Dieses Tor gilt nur, wenn das Team, das das Tor geschossen hat, kein Vergehen begangen, oder gegen die Spielregeln verstoßen hat.</p>
				<p>Der Sieger eines Spiels ist das Team, das mehr Tore erzielt hat, wenn der Schiedsrichter die <b>zweite Halbzeit</b> abpfeift. Wenn nach Ende der Spielzeit beide Teams gleich viele Tore erzielt haben, endet das Spiel unentschieden.</p>
				<p>Wenn die Wettbewerbsbestimmungen für unentschieden ausgegangene Spiele einen Sieger verlangen, sind folgende Vorgehensweisen zur Ermittlung der Sieger möglich:</p>
				<ul>
					<li>Auswärtstorregel</li>
					<li>Verlängerung (zwei Hälften mit je 15 Minuten)</li>
					<li>Elfmeterschießen</li>
				</ul>
				<p>Ein Elfmeterschießen findet auch nach einer Verlängerung statt, wenn bis dahin immer noch kein Sieger ermittelt werden konnte.</p>
				<h3>Abseits:</h3>
				<p>Prinzip: Ein Spieler befindet sich in einer<b> Abseitsposition</b>, wenn er sich mit irgendeinem Körperteil oder dem ganzen Körper in der gegnerischen Hälfte befindet und wenn er sich mit irgendeinem Körperteil oder dem ganzen Körper der gegnerischen Torlinie näher ist, als der Ball und der vorletzte Spieler.</p>
				<p class="Unterstrichen Fett Mittig">Abseitsstellung:</p>
				<div style="width:100%;text-align:center"><img class="Textbilder" src="Bilder/RegelnAbseits.png" style="max-width: 700px"/></div>
				<p class="Unterstrichen Mittig Fett">Keine Abseitsstellung:</p>
				<div style="width:100%;text-align:center"><img class="Textbilder" src="Bilder/RegelnKeinAbseits.jpg" style="max-width: 700px"/></div>
				<p>Zu dem Zeitpunkt, in dem der gespielte Pass vom Empfänger berührt wird, wird die Abseitsstellung mit einem <b>gegnerischen Freistoß</b> bestraft.</p>
				<div class="InfoKastenMitte" style="max-width:1000px;width:90%">
					<h2><b>INFO: </b></h2>
					<p><b>Wichtig! </b> Maßgebend ist der erste Kontakt beim Spielen des Balles!</p>
				</div>
				<h3>Fouls und unsportliches Verhalten:</h3>
				<p id="LinksÜStandartsituationen">Direkte und indirekte Freistöße, sowie Elfmeter werden nur dann gegeben, wenn die Vergehen und Verstöße <b>beim laufenden Spiel</b> stattfinden.</p>
				<h3>Standardsituationen:</h3>
				<p class="firstletter">Freistoß</p>
				<p class="Unterstrichen">Direkter Freistoß:</p>
				<p>Ein direkter Freistoß wird gegeben, wenn ein Spieler folgendes Vergehen begeht:</p>
				<ul>
					<li>Rempeln</li>
					<li>Anspringen</li>
					<li>Treten oder versuchtes Treten</li>
					<li>Stoßen</li>
					<li>Schlagen oder versuchtes Schlagen</li>
					<li>Tackling mit dem Fuß</li>
					<li>Beistellen oder versuchtes Beinstellen</li>
					<li>„Brutales Spiel“</li>
					<li>absichtliches Handspiel</li>
					<li>Halten des Gegners</li>
					<li>Sperren des Gegners mit Körperkontakt</li>
					<li>Beißen oder Anspucken einer anderen Person</li>
				</ul>
				<p class="Unterstrichen">Indirekter Freistoß:</p>
				<p>Ein indirekter Freistoß wird gegeben, wenn ein Spieler…</p>
				<ul>
					<li>sich unsportlich verhält (anstößige oder beleidigende Gesten)</li>
					<li>gefährlich spielt</li>
					<li>der Torhüter den Ball mehr als 6 Sekunden kontrolliert bevor er ihn freigibt</li>
				</ul>
				<p>Bei dem Empfinden des Schiedsrichters, dass das Vergehen schwer genug ist, kann er gelbe und rote Karten verteilen.</p>
				<p>Bei einem Vergehen oder Verstoß gegen die Spielregeln, wird der gegnerischen Mannschaft ein direkter oder indirekter Freistoß gegeben (siehe oben).</p>
				<p>Bei einem Freistoß muss der Ball ruhig auf dem Boden liegen, bevor er von dem Schützen berührt werden darf. Die gegnerische Mannschaft hat die Möglichkeit in einer Entfernung von 9,15 Meter eine „Mauer“, also eine Reihe von Spielern zu bilden, um den Schussweg einzuschränken und dem Ball im Falle eines Schusses abzublocken. </p>
				<p class="Mittig"><b>Finten beim Ausführen des Freistoßes sind verboten. </b></p>
				<div style="width:100%;text-align:center"><img class="Textbilder" src="Bilder/FreistoßCR7.jpg" style="max-width: 700px"/></div>
				<p class="firstletter">Strafstoß:</p>
				<p>Ein Strafstoß, auch <b>Elfmeter</b> genannt, wird gegeben, wenn ein Vergehen (z.B. ein Foul) im eigenen Strafraum begangen wird. Durch einen Strafstoß darf direkt ein Tor erzielt werden. </p>
				<p>Bei einem Strafstoß, muss der Ball auf dem <b>Elfmeterpunkt</b> liegen, welcher <b>11 Meter</b> vom Tor entfernt liegt, und der Ball darf sich nicht bewegen. </p>
				<p>Der Schütze muss klar ausgewählt sein und der Torhüter muss sich zwischen den Pfosten im Tor auf der Torlinie befinden.</p>
				<p>Alle anderen Spieler müssen…</p>
				<ul>
					<li>einen Abstand von mindestens 9,15m zum Ball einhalten</li>
					<li>sich hinter dem Elfmeterpunkt befinden</li>
					<li>sich außerhalb des Strafraums aufhalten</li>
					<li>sich innerhalb des Spielfeldes befinden</li>
				</ul>
				<p>Nachdem der Schiedsrichter den Ball mit einem Pfiff freigegeben hat, ist der Schütze dazu aufgefordert denn Ball zu schießen. Dabei ist es nicht erlaubt, nach hinten zu schießen. </p>
				<p>Sobald der Ball vom Schützen berührt wurde und sich eindeutig bewegt, dürfen auch alle anderen Spieler wieder in den Strafraum und versuchen den Ball zu erobern.</p>
				<p class="firstletter">Einwurf:</p>
				<p>Der Einwurf ist eine Standardsituation, in der ein Spieler den Ball von außerhalb der Seitenlinien des Spielfeldes, mit beiden Händen über den Kopf ins Spielfeld wirft. </p>
				<p>Ein Einwurf entsteht folgendermaßen: Wenn der Ball in der Luft oder auf dem Boden vollständig die <b>Seitenlinie</b> überschreitet, wird ein Einwurf gegen das Team gegeben, das den Ball als letztes berührt hat.</p>
				<p>Bei Einwurf muss der ausführende Spieler…</p>
				<ul>
					<li>während des Wurfes auf beiden Beinen stehen und das Gesicht dem Spielfeld zuwenden</li>
					<li>den Ball mit beiden Händen <b>über dem Kopf</b> einwerfen </li>
					<li>den Ball an dem Ort ins Spielfeld werden, wo der Ball das Spielfeld verlassen hat</li>
				</ul>
				<p>Alle gegnerischen Spieler müssen einen <b>Mindestabstand</b> von 2 Metern einhalten.</p>
				<div style="width:100%;text-align:center"><img class="Textbilder" src="Bilder/gezeichentesFeldEinwurf.jpg" style="max-width: 700px"/></div>
				<p class="firstletter">Abstoß:</p>
				<p>Ein Abstoß entsteht, wenn der Ball auf dem Boden oder in der Luft die Torlinie vollständig überquert, aber kein Tor erzielt wurde (gegnerische Spieler berührt als letztes den Ball).</p>
				<div style="width:100%;text-align:center"><img class="Textbilder" src="Bilder/gezeichnetesSpielfeldAbstoß.jpg" style="max-width: 700px"/></div>
				<p>Auf Abstoß wird entschieden, wenn ein Spieler der gegnerischen Mannschaft den Ball das letzte Mal berührt, bevor er im <b>Toraus</b> ist.</p>
				<p>Der Ball muss ruhig liegen und wird von einem <b>beliebigen Punkt</b> im Torraum von einem Spieler der verteidigenden Mannschaft mit dem Fuß ausgeführt. Der Ball ist jedoch erst im Spiel und für alle freigegeben, wenn er den Strafraum verlässt.<br>Allen anderen Gegnern ist es untersagt, den Strafraum zu betreten, solange der Ball noch nicht gespielt wurde.</p>
				<p class="firstletter">Eckstoß:</p>
				<p>Ein Eckstoß entsteht, wenn der Ball auf dem Boden oder in der Luft die Torlinie vollständig überquert, aber kein Tor erzielt wurde (eigener Spieler berührt als letztes den Ball).</p>
				<div style="width:100%;text-align:center"><img class="Textbilder" src="Bilder/gezeichentesFeldEckstoß.jpg" style="max-width: 700px"/></div>
				<p>Auf Eckstoß für die gegnerische Mannschaft wird entschieden, wenn ein Spieler der eigenen Mannschaft den Ball das letzte Mal berührt, bevor er im Toraus ist.</p>
				<p>Beim Eckstoß wird der Ball von der <b>Ecke des Spielfeldes</b>, welche am nächsten an dem Punkt ist, an dem der Ball in das Aus gespielt wurde, Richtung Strafraum gespielt. Dabei ist es wichtig, dass der Ball ruhig am Boden liegt und von einem Spieler der angreifenden Mannschaft mit dem Fuß gespielt wird. <br>Sobald der Ball mit dem Fuß berührt wurde, ist er freigegeben und alle anderen Spieler dürfen ihn berühren. Die Eckfahne darf nicht verschoben werden und alle Gegner müssen einen <b>Mindestabstand</b> von 9,15m halten. </p>
		</div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}
				</script>
				<script>
				function Unterlinks(){
					if(window.pageYOffset > 350){document.getElementById('Untermenü').style.position = "fixed";document.getElementById('Untermenü').style.top = "100px";document.getElementById("Pfad").style.display="block"}else{document.getElementById('Untermenü').style.position = "absolute";document.getElementById('Untermenü').style.top = "450px";document.getElementById("Pfad").style.display="none"}
					document.getElementsByClassName('Unterlinks')[0].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[1].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[2].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[3].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[4].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[5].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[6].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[7].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[8].style.fontStyle = "normal";
					document.getElementsByClassName('Unterlinks')[9].style.fontStyle = "normal";
					if(window.pageYOffset > 0 && document.getElementsByTagName("h3")[6].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "50px";document.getElementsByClassName('Unterlinks')[0].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h3")[6].offsetTop - 300 && document.getElementsByTagName("h3")[7].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "90px";document.getElementsByClassName('Unterlinks')[1].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h3")[7].offsetTop - 300 && document.getElementsByTagName("h3")[8].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "135px";document.getElementsByClassName('Unterlinks')[2].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h3")[8].offsetTop - 300 && document.getElementsByTagName("h3")[9].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "175px";document.getElementsByClassName('Unterlinks')[3].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h3")[9].offsetTop - 300 && document.getElementsByTagName("h3")[10].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "215px";document.getElementsByClassName('Unterlinks')[4].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h3")[10].offsetTop - 300 && document.getElementsByTagName("h3")[11].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "260px";document.getElementsByClassName('Unterlinks')[5].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h3")[11].offsetTop - 300 && document.getElementsByTagName("h3")[12].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "300px";document.getElementsByClassName('Unterlinks')[6].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h3")[12].offsetTop - 300 && document.getElementsByTagName("h3")[13].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "340px";document.getElementsByClassName('Unterlinks')[7].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h3")[13].offsetTop - 300 && document.getElementsByTagName("h3")[14].offsetTop - 300 > window.pageYOffset){document.getElementById('Unterlinksshow').style.top = "385px";document.getElementsByClassName('Unterlinks')[8].style.fontStyle = "italic"}
					if(window.pageYOffset > document.getElementsByTagName("h3")[14].offsetTop - 300){document.getElementById('Unterlinksshow').style.top = "425px";document.getElementsByClassName('Unterlinks')[9].style.fontStyle = "italic"}
				}
				</script>
	</body>
</html>
