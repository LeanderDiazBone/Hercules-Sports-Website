<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<!--<script src="Fussball.js"></script>-->
</head>
<body onload="" onscroll="LOAD_TX();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">
	<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
	</div>
	<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed;width: 100%" id="Background1_div"><img src="Bilder/Banner2.png" id="Background1" style="width:100%;opacity:0.7;position:relative;top: -250px;min-width: 900px"></div>
	<div id="Background1_div2" style="width: 100%;height:30vh"></div>
	<?php
		include("../menuSportarten.php");
	?>
		<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Handball</a> - Technik</div>
		<div id="Sportarten_TextContainer" style="padding-top: 50px">
			<div id="TEXT">
	      <h3>Grundtechniken im Handball:</h3>
	      <h4>Sprungwurf</h4>
				<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/WVARtXPt9LU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<h4>Schlagwurf</h4>
				<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/j07dNoGGQIk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<h4>Fallwurf</h4>
				<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/SJo2Q3_wKso" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
					<?php
						include("../footerSportarten.php")
					 ?>
		</div>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>
