<!DOCTYPE HTML>
<html>
<?php
	include("../headSportarten.php");
?>
	<body onload="" onscroll="LOAD_Al();RESIZE()" onresize="LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">

		<?php
			include("../menuSportartenAl.php");
		?>
		<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
		</div>
		<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed" id="Background1_div"><img src="Bilder/Banner2.png" id="Background1" style="width:100%;opacity:0.7"></div>
		<h1 id="Background_H1" style="left:-50px;font-size: 90px">Übungen</h1>
		<div id="Background1_div2" style="width: 100%"></div>
		<div id="TEXT">
      <h1>Unterkörper - Übungen</h1>
      <p><span class="firstletter">N</span>eben Übungen für den Oberkörper, wollen wir nun auch Übungen für den Unterkörper darstellen. Den Beckenbereich, sowie die Ober- und Unterschenkel zu trainieren ist wichtig für einen stabilen und physikalisch ausgewogenen Körper. Im Folgenden möchten wir einige Übungen erläutern.</p>
      <h3>Die Kniebeuge</h3>
      <div class="Absatz65">
        <p>Die Kniebeuge ist meist die erste aller Übungen für das Unterkörpertraining. Sie ist selbst für Einsteiger leicht auszuführen und bietet unglaublich viele Variationsmöglichkeiten. Ein paar unterschiedliche Ausführmöglichkeiten finden sie auf folgender Internetseite: <a class="TextLinkBold"href="https://www.runtastic.com/blog/de/6-kniebeugen-variationen-fuer-deinen-leg-day">Sechs Kniebeugen Variationen</a></p>
      </div>
      <img class="Bild30"src="Bilder/Kniebeugen1.png"/>
      <img class="Bild100"src="Bilder/Kniebeugen2.png"/>
      <p>Beanspruchte Muskelgruppen:</p>
      <ul>
        <li>Oberschenkel</li>
        <li>Waden</li>
        <li>Becken</li>
        <li>Knie</li>
        <li>Stabilität in den Füßen</li>
      </ul>
    </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){
				LOAD_ALL();
				LOAD_Al();
				RESIZE();
				}
				</script>
	</body>
</html>
