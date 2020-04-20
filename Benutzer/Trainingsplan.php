<?php
    session_start();
 ?>
<!DOCTYPE HTML>
  <html>
    <head>
      <?php
        include("../head.php");
      ?>
      <script src="../Javascript/Trainingsplan.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
      <link href="../Stylesheets/style.css" rel=stylesheet type="text/css" id="style">
      <link href="../Stylesheets/style_resize.css" rel=stylesheet type="text/css">
    </head>
    <body style="width:100%;height:auto;margin:0;background-color:#3d567c;overflow:hidden" onscroll="scroll();LOAD_SP();" onload="LOAD_ALL();LOAD_SP();RESIZE();" onresize="RESIZE()" onmousemove="showCoords(event)">
      <div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0;height: 100%" id="background">
      </div>
      <?php
      include('../menu.php');
      ?>
      <div id="logout" onclick="window.location.href='formular.php?logout=true'">
        <?php
            if(isset($_SESSION["userName"])){
            echo "<p><span>Angemeldet als </span>" .$_SESSION["userName"];
          }else{header("Location: formular.php?user=invalid");}
          if(isset($_GET["activeTraining"])){
            $_SESSION["activeTraining"] = $_GET["activeTraining"];
          }
         ?>
       </p><a href="formular.php?logout=true">A b m e l d e n</a>
      </div>
      <div style="width:100%;text-align:center">
        <h1 style="text-align: left; padding-left: 50px;border-bottom: 1px solid white;font-style: italic" id="Name">TRAININGSPLAN:</h1>
        <p style="text-align: left; margin-top:0; position: relative; top: -30px;font-size: 17px;text-transform: uppercase; font-style: italic; text-decoration:none;width:100%;text-align:right;max-width:100%;padding-right:100px;"><a href="Trainingsplan_Menu.php" style="text-decoration:none;color:white">Zurück zur Übersicht</a></p>
        <content>
          <div id="table">
            <div id="day1" class="day" onclick="if(catchactive == 1){catchend('day1','day2')}; if(remove == 1){removeblock('day1')}">
              <h2>Montag</h2>
            </div>
            <div id="day2" class="day" onclick="if(catchactive == 1){catchend('day2','day3')}; if(remove == 1){removeblock('day2')}">
              <h2>Dienstag</h2>
            </div>
            <div id="day3" class="day" onclick="if(catchactive == 1){catchend('day3','day4')}; if(remove == 1){removeblock('day3')}">
              <h2>Mittwoch</h2>
            </div>
            <div id="day4" class="day" onclick="if(catchactive == 1){catchend('day4','day5')}; if(remove == 1){removeblock('day4')}">
              <h2>Donnerstag</h2>
            </div>
            <div id="day5" class="day" onclick="if(catchactive == 1){catchend('day5','day6')}; if(remove == 1){removeblock('day5')}">
              <h2>Freitag</h2>
            </div>
            <div id="day6" class="day" onclick="if(catchactive == 1){catchend('day6','day7')}; if(remove == 1){removeblock('day6')}">
              <h2>Samstag</h2>
            </div>
            <div id="day7" class="day" onclick="if(catchactive == 1){catchend('day7','day8')}; if(remove == 1){removeblock('day7')}">
              <h2>Sonntag</h2>
            </div>
            <div id="day8" style="position:absolute; margin-left: 99vw"></div>
          </div>
          <div id="Übungenauswählen" onclick="window.location.href='Trainingsplan_Ubungen.php'">
            <p>Klicke hier um weitere Übungen auszuwählen</p>
          </div>
          <div id="Removeauswahl" onclick="document.getElementById('RemoveauswahlP').innerHTML = 'Klicke hier um Tage zurückzusetzen<br><section>klicke auf den Tag, an dem du die letzte Übung zurücksetzen willst</section>';remove=1;catchactive=0;document.getElementById('RemoveauswahlP').style.top = '-20px'">
            <p id="RemoveauswahlP" style="top:0">Klicke hier um Übungen zu entfernen</p>
          </div>
        </content>
        <div id="move" onclick="catchactive = 1">Kraftsport<br><section>hier steht eine kurze beschreibung</section></div>

    </div>
  </body>
  <script>
  var catchactive = 0;
      function showCoords(event){
        if(catchactive == 1){
        var x = event.screenX;
        var y = event.screenY;
        document.getElementById("move").style.top = y - 70 + "px";
        document.getElementById("move").style.left = x + "px";
      }
      }
    var remove = 0;
    document.getElementById("logout").style.left = window.innerWidth - document.getElementById("logout").style.width - 50 + "px";
    document.getElementById("logout").style.top = document.getElementById("Searchbar").offsetTop + "px";
    document.getElementById("Searchbar").style.display = "none";
    document.getElementById("MENÜ").style.display = "none";
    var activeÜbung = '<?php echo $_GET["activeÜbung"] ?>';
    var activeTraining = '<?php echo $_SESSION["activeTraining"] ?>';
    var userTraining = '<?php echo $_SESSION["userTraining"] ?>';
    var activeTrainingName = activeTraining.slice(activeTraining.search("N=")+2, activeTraining.search("Date=")-1);
    document.getElementById("Name").innerHTML = "Trainingsplan: " + activeTrainingName;
    Übunghinzufügen();
    Trainingsplan_load();
  </script>
  </html>
