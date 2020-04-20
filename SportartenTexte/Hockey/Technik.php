<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<script src="Hockey.js"></script>
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
			include("Hockey_Unterlinks.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
							<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Hockey</a> - Technik</div>
		<div id="TEXT">
			<h1>Technik</h1>
      <p><span class="firstletter">I</span>n diesem Artikel zeigen wir Euch einige Schlagtechniken im Hockey und in welcher Situation sie am geeignetsten sind.</p>
      <p>Allgemein gilt, den Schläger immer in beiden Händen zu halten und nicht höher als seine Knie zu schwingen, da es sonst als Foul geahndet werden würde. Auch darf man den Gegner mit dem Stock nicht berühren oder am Vorwärtskommen hindern. </p>
      <h3>Der Kurzgriffschlag:</h3>
      <p>Beide Hände greifen den Schläger in der Mitte, wodurch man eine sehr kurze Ausholdauer hat und schnell schlagen kann. Jedoch kann man nicht viel Kraft auf den Ball ausüben und deswegen wird dieser Schlag in engen Situationen, bei denen man schnell reagieren muss, angewandt.</p>
      <h3>Der klassische Schlag:</h3>
      <p>Beide Hände befinden sich weit oben am Schläger, womit die Ausholbewegung sehr groß ist (<u>Vorsicht!</u>). Man kann viel Kraft auf den Ball ausüben und <b>lange Pässe</b> spielen oder einen <b>starken Schuss</b> abschließen. In engen Situationen ist diese Technik aber nicht zu empfehlen, da es zum einen zu lange dauert und zum anderen besteht die Gefahr, dass Sie einen Gegenspieler treffen und somit ein Foul verursachen. </p>
      <h3>Das „Schrubben“:</h3>
      <p>Auch bei diesem Schlag sind die Hände eng beieinander, aber dieser Technik unterscheidet sich vor allem in der Ausführung von den anderen. Denn man holt nicht aus wie bei den anderen beiden Schlägen, sondern „schrubbt“ mit dem Schläger über den Boden. Somit kann man den Ball präziser Schlagen und verhindern, dass der Ball zu sehr hüpft.</p>
      <img class="Bild75zentrum"src="Bilder/Grätsche.jpg"/>

    </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
