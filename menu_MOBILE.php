<div style="width:100%;height:100%;background-color: black;opacity: 0;position: fixed;top:0;z-index:3;" id="MENU_MOBILE_gray" onclick="Mobile_menu_end()">
</div>
<div style="width: 100%; height: 50px; background-color: #3d567c; position: fixed; top:0px; z-index: 4 ;box-shadow: 2px 2px 5px black" class="MB">
  <img src="Bilder/Schriftzug_Home_MB.png" style="width: 50%; position: fixed; left: 25%; top: 20px;margin: 0" id="Schrift_Menu" onload="menu_MOBILE_load()">
</div>
<div id="MENÜ_MOBILE">
  <div onclick="Mobile_menu_start()">
  <div id="Balken1"></div>
  <div id="Balken2"></div>
  <div id="Balken3"></div>
  <div style="" id="MENU_Schrift">MENÜ</div>
</div>
  <div id="MENU_Feld">
    <li><a href="training.php" id="MenuA1">Trainingspläne</a></li>
    <li><a href="info.php"id="MenuA2">Infos</a></li>      
    <li><a href="sportarten.php" id="MenuA3">Sportarten</a></li>
      <!--<li><a href="" id="MenuA2">Ernährung</a></li>
      <li id="MenuA3">Shop</li>-->
    <li><a href="uberuns.php" id="MenuA4">Über uns</a></li>
    <li><a href="index.php" id="MenuA5">Home</a></li>
      <!--<li class="recht"><a href="impressum.php" id="MenuA7">Impressum</a></li>
      <li class="recht"><a href="datenschutz.php" id="MenuA8">Datenschutz</a></li>
      <li class="recht"><a href="nutzungsbedingungen.php" id="MenuA9">Nutzungsbedingungen</a></li>-->
  </div>
</div>
<script>function Mobile_menu_start(){
  var str = location.href;
  var n = str.search("SportartenTexte");
  if(n > -1){document.getElementById("MenuA1").href = "training.php";document.getElementById("MenuA2").href = "info.php";document.getElementById("MenuA3").href = "../../sportarten.php";document.getElementById("MenuA4").href = "uberuns.php";document.getElementById("MenuA5").href = "index.php";document.getElementById("MenuA6").href = "../../index.php";document.getElementById("MenuA7").href = "../../impressum.php";document.getElementById("MenuA8").href = "../../datenschutz.php";document.getElementById("MenuA9").href = "../../nutzungsbedingungen.php";document.getElementById("Schrift_Menu").style.margin = '0'}
  document.getElementById("MENU_Feld").style.left = "-40px";
  document.getElementById("MENU_Feld").style.height = window.innerHeight + 100 + "px";
  document.getElementById("MENU_MOBILE_gray").style.height = window.innerHeight + 100 + "px";
  document.getElementById("MENU_MOBILE_gray").style.width = window.innerWidth + "px";
  document.getElementById("MENU_MOBILE_gray").style.left = "0px";
  document.getElementById("MENU_MOBILE_gray").style.opacity = 0.3;
  document.getElementById("MENU_Schrift").style.opacity = "1";
  document.getElementById("MENU_Schrift").style.left = "0px";
}
function Mobile_menu_end(){
  document.getElementById("MENU_Feld").style.left = "-500px";
  document.getElementById("MENU_MOBILE_gray").style.height = "0px";
  document.getElementById("MENU_MOBILE_gray").style.width = "0px";
  document.getElementById("MENU_MOBILE_gray").style.opacity = 0;
  document.getElementById("MENU_Schrift").style.left = "-1000px";
}
function menu_MOBILE_load(){
  document.getElementsByClassName("recht")[0].style.top = screen.height - 200 + "px";
  document.getElementsByClassName("recht")[1].style.top = screen.height - 170 + "px";
  document.getElementsByClassName("recht")[2].style.top = screen.height - 140 + "px";
}
</script>
