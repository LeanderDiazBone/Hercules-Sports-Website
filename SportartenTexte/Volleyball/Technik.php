<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Volleyball.js"></script>
</head>
	<body onload="" onscroll="LOAD_TX();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
		<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed;width: 100%" id="Background1_div"><img src="Bilder/Beachvolleyball.jpg" id="Background1" style="width:100%;opacity:0.7;position:relative;top: -250px;min-width: 900px"></div>
		<div id="Background1_div2" style="width: 100%"></div>
		<?php
			include("../menuSportarten.php");
		?>
		<?php
			include("Volleyball_Unterlinks.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
							<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Volleyball</a> - Technik</div>
		<div id="TEXT">
			<h1>Technik</h1>
			<p><span class="firstletter">I</span>n diesem Artikel geht es um die Technik der verschiedenen Schläge im Volleyball.</p>
      <h3>1) Pritschen:</h3>
      <div class="Absatz65">
        <p>Pritschen ist auch als <b>oberes Zuspiel</b> bekannt und wird meistens dazu benutzt den Ball zum Angriff dem Mitspieler hochzulegen. Wichtig beim Pritschen ist, dass Du mit Deinen Beinen schulterbreit auf dem Boden stehst und die Hände über deiner Stirn hältst, mit denen Du ein <b>Dreieck</b> bildest.</p>
      </div>
      <img style="margin-bottom:30px;"class="Bild30"src="Bilder/Pritschen.jpg"/>
      <p>Wenn es dann zu Ballberührung kommt, drückst Du Dich nur aus den Beinen heraus in Richtung Ball, deine Arme bleiben in der Position. Der Ball wird jetzt nur mit den Fingerspitzen gespielt, denn sonst gilt die Berührung als gefangen. Zu Beginn sollte der Ball nur nach oben gespielt werden, wenn Du schon etwas mehr Übung hast, kann versucht werden den Ball nach hinten oder seitlich zu spielen.</p>
      <h3>2) Baggern:</h3>
      <p>Baggern ist auch bekannt als <b>unteres Zuspiel</b> und wir bei Bällen verwendet, die von den Schultern abwärts auf den Körper treffen. Man benutzt diese Technik meistens um <b>Aufschläge anzunehmen</b>, aber auch um einen <b>Angriff vorzubereiten</b>. Man benötigt beim Baggern <b>beide Arme</b>, die man zu einem sogenannten ,, <b>Brett</b> ‘‘ zusammen hält. Dann schiebt man die Schulten nach vorne und legt die Hände ineinander, sodass die Unterarme und Daumen <b>parallel zueinander</b> sind. Auch beim Baggern ist es am besten mit beiden Beinen am Boden du sein, aber manchmal kann es passieren, dass ein Ball nicht so gespielt wird wie gedacht. Dann muss man auch mal mit beiden Armen voraus hechten, um den Ball noch zu erreichen. Sehr wichtig ist, dass die Bewegung nicht mit den Armen gemacht wird, sondern aus den Beinen heraus.</p>
      <img class="Bild75zentrum"src="Bilder/Baggern.jpg"/>
      <h3>3) Aufschlag:</h3>
      <p>Der Aufschlag ist der Beginn eines Ballwechsels von dem Team, welches den vorigen Ballwechsel für sich entscheiden konnte. Um den Aufschlag durchzuführen, müssen Sie mit der <b>flachen Hand</b> gegen den Ball schlagen, um ihn in das gegnerische Feld zu befördern. Dabei gibt es drei verschiedene Durchführungsweisen, welche auch in verschiedene Schwierigkeitsstufen eingeteilt werden können. </p>
      <div class="Absatz65">
        <ol>
          <li>Die leichteste Variante ist der Aufschlag <b>von unten</b>. Dabei wird der Ball mit der einen Hand losgelassen und sogleich von der Schlaghand geschlagen.</li>
          <li>Die zweite Variante ist, den Ball <b>von oben</b> zu spielen, wobei man sich den Ball hochwirft und ihn dann mit der flachen Hand ins gegnerische Feld schlägt. Die Armbewegung verläuft wie bei einem Aufschlag beim <a class="TextLinkBold"href="../Tennis/Allgemein.php">Tennis</a>.</li>
          <li>Die dritte Variante ist eigentlich wie die vorherige, nur dass Sie den Aufschlag aus dem Sprung durchführen. Diese Variante ist jedoch erst sinnvoll, wenn die zweite Variante des Aufschlags einwandfrei funktioniert.</li>
        </ol>
      </div>
      <img class="Bild30"src="Bilder/Aufschlag.jpg"/>
      <h3>4) Schmetterball (Angriff):</h3>
      <p>Der Schmetterball wird am Ende eines Spielzuges einer Mannschaft durchgeführt. Er ist der dritten Variante des Aufschlages sehr ähnlich, denn man Springt am Netz hoch und versucht den Ball mit der <b>Handfläche über das Netz</b> auf den Boden zu schlagen. Dabei müssen Sie den Arm wieder so bewegen, wie bei einem Aufschlag beim Tennis.</p>
      <img class="Bild75zentrum"src="Bilder/Blocken.jpg"/>
      <h3>5) Blocken:</h3>
      <p>Blocken nennt man die <b>Verteidigung eines Schmetterballs</b>, über das Netz. Und zwar springt man gleichzeitig mit dem Angreifer am Netz hoch und versucht den Ball daran zu hindern über das Netzt zu kommen. Ein Block kann im Volleyball von einer Person durchgeführt werden, aber auch von mehreren. Ein gutes Beispiel ist das Bild über diesem Absatz, indem zwei Frauen mit rotem Trikot versuchen den Ball zu <b>blocken</b>.   </p>
  </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
