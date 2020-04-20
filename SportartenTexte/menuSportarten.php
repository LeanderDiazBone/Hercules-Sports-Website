<div id="MENÜ">
  <div id="Balken1"></div>
  <div id="Balken2"></div>
  <div id="Balken3"></div>
  <div style="" id="MENÜ_Schrift">MENÜ</div>
  <div id="MENÜ_Feld" style="height: 370px">
      <div style="width:100%;height:1px;background-color:#232a34;position:relative;top:-10px"> </div>
      <li><a href="../../sportarten.php">Sportarten</a></li>
      <li id="Sportart_Unterlinks" onclick="document.getElementById('Unterlinks').style.top= window.innerHeight - 300 + 'px'" style="color:#3d567c;margin-left:10px;list-style: none  "></li>
      <li><a href="../../training.php">Trainingspläne</a></li>
      <li><a href="../../info.php">Infos</a></li>
      <li><a href="../../uberuns.php">Über uns</a></li>
      <li><a href="../../index.php">Home</a></li>
  </div>
</div>
<div id="Searchbar" onmouseleave="resetSuche();document.getElementById('Searchbar').style.transitionDelay = '0.5s'" onmouseover="document.getElementById('Searchbar').style.transitionDelay = '0s'">
  <div id="Search" onmouseleave=";document.getElementById('Search').style.transitionDelay = '0.5s'" onmouseover="document.getElementById('Search').style.transitionDelay = '0s'">
    <div id="input" style="z-index: 5">
      <input type="text" id="eingabe" onkeyup="suchverlauf()" name="" placeholder="Suchbegriff" style="position:absolute;background: transparent;border:none;margin-left:10px;margin-top: 5px;font-family:Quicksand;font-size:22px;z-index:5">
    </div>
    <img src="../../Bilder/LUPE.png" style="height:30px;padding:5px;float:right;" id="searchIMG">
  </div>
  <div id="textfeld" style="height:0px;z-index:-5"></div>
</div>
