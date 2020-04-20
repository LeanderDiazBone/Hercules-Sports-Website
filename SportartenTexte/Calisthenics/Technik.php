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
		<h1 id="Background_H1" style="left:-70px;font-size: 100px">Technik</h1>
		<div id="Background1_div2" style="width: 100%"></div>
		<div id="TEXT">
      <h3>Muscle-Up</h3>
      <p><span class="firstletter">D</span>er Muscle-Up ist eine der schwierigsten Übungen im Calisthenics. Nur wie muss man trainieren, um den Muscle-Up zu schaffen?</p>
      <p>Wichtig zu wissen ist, dass der Muscle-Up aus mehreren Schritten besteht:</p>
      <ol>
        <li>Klimmzug</li>
        <li>Umgreifen</li>
        <li>Dip</li>
      </ol>
      <p>Jeden Schritt kann man in einzelnen Übungen trainieren:</p>
      <h4>1. Klimmzug</h4>
      <p>Um einen Muscle-Up schaffen zu können, ist es sehr wichtig einen Klimmzug explosiv durchführen zu können, da beim Muscle-Up der <b>Schwung sehr wichtig</b> ist um das folgende Umgreifen leichter zu machen.</p>
      <h4>2. Umgreifen</h4>
      <p>Das Umgreifen kann man besonders gut mit Fitnessbändern trainieren, welche an der Stange befestigt und unter den Füßen des Sportlers gebunden werden. So unterstützt das Band von unten und gibt die Möglichkeit die Technik des Umgreifens zu üben.</p>
      <h4>3. Dip</h4>
      <p>Der letzte Schritt beim Muscle-Up ist das Hochdrücken nach dem Umgreifen. Dies kann durch Dips trainiert werden. </p>
      <img class="Bild75zentrum"src="Bilder/Muscle-up2.jpg"/>    
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
