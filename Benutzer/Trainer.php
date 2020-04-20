<?php
  session_start();
 ?>
<!DOCTYPE HTML>
  <html>
    <head>
      <?php
        include("../head.php");
      ?>
      <script src="../Javascript/Übungen.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
      <link href="../Stylesheets/style.css" rel=stylesheet type="text/css" id="style">
      <link href="../Stylesheets/style_resize.css" rel=stylesheet type="text/css">
    </head>
    <body style="width:100%;height:auto;margin:0;background-color:black;overflow:hidden" onscroll="scroll();LOAD_SP();" onload="LOAD_ALL();LOAD_SP();RESIZE();" onresize="RESIZE()" onunload="alert('stopp')">
        <img src="../Bilder/training_p2.jpg" style="width:100vw;position:absolute; z-index: -1;opacity:0.2;transition:1s" id="background">
      </div>
      <?php
      include('../menu.php');
      ?>
      <div id="logout" >
        <?php
            if(isset($_SESSION["userName"])){
            echo "<p style='color:white'><span>Angemeldet als </span>" .$_SESSION["userName"];
          }else{header("Location: formular.php?user=invalid");}
          $_SESSION["Übung_Num"] = $_GET["Übung_Num"];
          if(isset($_GET["Übung_rate"]) && isset($_SESSION["Übung_rate"])){
            $Übung_Id = substr($_GET["Übung_rate"], 0, -13);
            $pos = strpos($_SESSION["Übung_rate"], $Übung_Id);
            if ($pos === false) {
              $_SESSION["Übung_rate"] = $_SESSION["Übung_rate"] . $_GET["Übung_rate"];
              echo $_SESSION["Übung_rate"];
            } else {
              $_SESSION["Übung_rate"] = str_replace(substr($_SESSION["Übung_rate"], $pos, $pos + 16),$_GET["Übung_rate"],$_SESSION["Übung_rate"]);
            }
          }elseif(isset($_GET["Übung_rate"])){
            $_SESSION["Übung_rate"] = $_GET["Übung_rate"];
          }
         ?>
       </p><a href="formular.php?logout=true">A b m e l d e n</a>
      </div>
      <div style="width:100%;text-align:center">
        <h1 style="text-align: left; padding-left: 50px;border-bottom: 1px solid white;font-style: italic" id="TR"></h1>
        <p style="text-align: left; margin-top:0; position: relative; top: -30px;font-size: 17px;text-transform: uppercase; font-style: italic; text-decoration:none;width:100%;text-align:right;max-width:100%;margin-right:100px;"><a href="Trainingsplan_Menu.php" style="text-decoration:none;color:white;position:relative;right:20px;">Zurück zur Übersicht</a></p>
        <p style="text-align: left; margin-top:0; position: relative; top: -120px;font-size: 17px;text-transform: uppercase; font-style: italic; text-decoration:none;width:100%;text-align:left;max-width:100%;margin-left:50px;z-index:-1" id="TR_Info"></p>
    </div>
    <content>
    <div id="Info">
      <div id="Feld">
      </div>
      <h2 id="Übung"></h2>
      <p>Liegestützen sind eine ,,Allrounder-Übung‘‘; überall und ohne Ausrüstung sind sie zu machen und trainieren dabei den gesamten Körper. Je nachdem wie weit die Hände voneinander entfernt sind, desto stärker wird Trizeps oder Brust belastet; einarmig oder zweiarmig, oder mit Anheben eines Beines. Die große Varietät der Liegestütze macht sie zu einer erstklassigen Übung.</p>
      <video src="../Bilder/Trainingsplan/Liegestütz.mp4" autoplay loop></video>
      <p id="Übungzahl"></p>
    </div>
      <div id="rate" style="opacity:0;transition:1s;transition-delay: 1s;">
        <h2 style="font-style:italic;text-transform:uppercase;text-shadow:2px 2px 2px black" id="rateName">Wie ist dir die Übung gelungen?</h2>
        <div>
          <div class="rate">
            <img id="rate1" src="../Bilder/Trainingsplan/smiley4.png" onclick="Übung_rate = 0;document.getElementById('rate1').style.backgroundColor = '#1581c2';document.getElementById('rate2').style.backgroundColor = 'transparent';document.getElementById('rate3').style.backgroundColor = 'transparent';document.getElementById('rate4').style.backgroundColor = 'transparent';document.getElementById('rate5').style.backgroundColor = 'transparent';document.getElementById('rateName').innerHTML='Zu leicht'">
          </div>
          <div class="rate">
            <img id="rate2" src="../Bilder/Trainingsplan/smiley2.png" onclick="Übung_rate = 1;document.getElementById('rate1').style.backgroundColor = 'transparent';document.getElementById('rate2').style.backgroundColor = '#1581c2';document.getElementById('rate3').style.backgroundColor = 'transparent';document.getElementById('rate4').style.backgroundColor = 'transparent';document.getElementById('rate5').style.backgroundColor = 'transparent';document.getElementById('rateName').innerHTML='Leicht'">
          </div>
          <div class="rate">
            <img id="rate3" src="../Bilder/Trainingsplan/smiley3.png" onclick="Übung_rate = 2;document.getElementById('rate1').style.backgroundColor = 'transparent';document.getElementById('rate2').style.backgroundColor = 'transparent';document.getElementById('rate3').style.backgroundColor = '#1581c2';document.getElementById('rate4').style.backgroundColor = 'transparent';document.getElementById('rate5').style.backgroundColor = 'transparent';document.getElementById('rateName').innerHTML='Völlig ok'">
          </div>
          <div class="rate">
            <img id="rate4" src="../Bilder/Trainingsplan/smiley5.png" onclick="Übung_rate = 3;document.getElementById('rate1').style.backgroundColor = 'transparent';document.getElementById('rate2').style.backgroundColor = 'transparent';document.getElementById('rate3').style.backgroundColor = 'transparent';document.getElementById('rate4').style.backgroundColor = '#1581c2';document.getElementById('rate5').style.backgroundColor = 'transparent';document.getElementById('rateName').innerHTML='Anspruchsvoll'">
          </div>
          <div class="rate">
            <img id="rate5" src="../Bilder/Trainingsplan/smiley1.png" onclick="Übung_rate = 4;document.getElementById('rate1').style.backgroundColor = 'transparent';document.getElementById('rate2').style.backgroundColor = 'transparent';document.getElementById('rate3').style.backgroundColor = 'transparent';document.getElementById('rate4').style.backgroundColor = 'transparent';document.getElementById('rate5').style.backgroundColor = '#1581c2';document.getElementById('rateName').innerHTML='Zu schwer'">
          </div>
        </div>
        <h2 style="border:0;border-top:1px solid white"></h2>
        <button id="InfoButton" onclick="Übungrate(Übung_rate);activeÜbung_num++">Bestätigen</button>
      </div>
    </content>
    <div id="Übungenauswählen" onclick="document.getElementById('Info').style.left = -1 * window.innerWidth + 'px';document.getElementById('rate').style.opacity = 1;document.getElementById('background').style.opacity = 0.2">
      <p>Zur nächsten Übung</p>
    </div>
    <div id="Removeauswahl" onclick="if('<?php echo $_SESSION["Übung_Num"]?>' > 0){window.location.href='Trainer.php?activeÜbungen=' + activeÜbungen + '&Übung_Num=' + '<?php echo $_SESSION["Übung_Num"] - 1 ?>;activeÜbung_num--'}">
      <p id="RemoveauswahlP" style="">Zurück zur letzten Übung<span id="StarteTraining"></span></p>
    </div>
    <div id="TR_MN_Name" style="display:none">
      <p>Du hast nicht mehr Übungen in deinem Trainingsplan.</p>
      <p>Willst du dein heutiges Trainings abschließen oder zurück zu den Übungen?</p>
      <button style="width:40%;margin-left:5%;margin-top:20px;" onclick="window.location.href='Trainingsplan_Menu.php?Trainingend=true'">Training abschließen</button>
      <button style="width:40%;margin-left:10%;margin-top:20px;" onclick="window.location.href='Trainer.php?activeÜbungen=' + activeÜbungen + '&Übung_Num=0'">Zu den Übungen</button>
    </div>
  </body>
  <script>
      var userTraining = '<?php echo $_SESSION["userTraining"] ?>';
      var activeÜbungen = '<?php if(isset($_GET["activeÜbungen"])){echo $_GET["activeÜbungen"];} else {echo "";} ?>';
      var Übung_rate = 0;
      document.getElementById("logout").style.left = document.getElementById("Searchbar").offsetLeft + "px";
      document.getElementById("logout").style.top = document.getElementById("Searchbar").offsetTop + "px";
      document.getElementById("logout").style.position = "absolute";
      document.getElementById("Searchbar").style.transition = "0s";
      document.getElementById("Searchbar").style.opacity = "0";
      document.getElementById("Searchbar").style.zIndex = -5;
      document.getElementById("MENÜ").style.display = "none";
            var activeÜbung_num = '<?php echo $_SESSION["Übung_Num"] ?>';
      if(document.getElementById("logout").innerHTML.search("Notice") > 0){window.location.href = "formular.php?user=invalid"}
      document.getElementById("Übung").innerHTML = getÜbungName('<?php echo $_SESSION["Übung_Num"] ?>', 'Name');
      var pos2 = activeÜbungen.search("N=") + 4;
      var pos3 = activeÜbungen.search("Date=") +1;
      var TR_Name = userTraining.slice(pos2 , pos3);
      if(new Date().getMonth() + 1 < 10){var month = "0" + (new Date().getMonth() + 1);}else{var month = new Date().getMonth() + 1;}
      document.getElementById("TR_Info").innerHTML = "Trainingstag: " + new Date().getDate() + "." + month + "." + new Date().getFullYear();
      var tag = new Date().getDate() + "." + month + "." + new Date().getFullYear();
      document.getElementById("Info").style.left = "15vw";
      document.getElementById('background').style.opacity = 0.4;
      document.getElementById('TR').innerHTML = "Trainingsplan: <span style='text-transform:none'>" + TR_Name;

      var test = '<?php if(isset($_SESSION["Übung_rate"])){echo $_SESSION["Übung_rate"];} else {echo "";} ?>';
  </script>
  </html>
