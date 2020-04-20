<?php
  session_start();
 ?>
<!DOCTYPE HTML>
  <html>
    <head>
      <?php
        include("../head.php");
      ?>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <script src="../Javascript/Trainingsplan.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
      <link href="../Stylesheets/style.css" rel=stylesheet type="text/css" id="style">
      <link href="../Stylesheets/style_resize.css" rel=stylesheet type="text/css">
    </head>
    <body style="width:100%;height:auto;margin:0;background-color:#3d567c;overflow:hidden" onscroll="scroll();LOAD_SP();" onload="LOAD_ALL();LOAD_SP();RESIZE();" onresize="RESIZE()" onunload="alert('stopp')">
      <div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;height:100%;background: cover" id="background">
      </div>
      <?php
      include('../menu.php');
      ?>
      <div id="logout">
        <?php
            if(isset($_SESSION["userName"])){
            echo "<p><span>Angemeldet als </span>" .$_SESSION["userName"];
          }else{header("Location: formular.php?user=invalid");}
         ?>
       </p><a href="formular.php?logout=true">A b m e l d e n</a>
      </div>
      <div style="width:100%;text-align:center">
        <h1 style="color: white">Verwalte deine Trainingspläne</h1>
        <content>
          <div id="neuerTrainingsplan" onclick="document.getElementById('TR_MN_Name').style.display='block';">
            <p>Trainingsplan hinzufügen</p>
            <h2>+</h2>
          </div>
          <div style="width:100%;text-align:center;position:absolute;top:30vh"><div id="TR_MN_Name" style="display:none;">
            <p>Gebe deinem neuen Trainingsplan einen Namen</p>
            <input placeholder="Name" class="form_input" id="TR_MN_input" maxlength="20"></input>
            <p>Diesen Trainingsplan festlegen für:</p>
            <select id="week">
              <option value="zum festlegen klicken">---</option>
              <option value="" id="week0">Diese Woche</option>
              <option value="" id="week1">Nächste Woche</option>
              <option value="" id="week2">Übernächste Woche</option>
            </select>
            <div style="position:relative;top:-20px;margin-bottom:20px;">Der Trainingszeitraum kann später noch verändert werden</div>
            <button onclick="if(userTraining.search(document.getElementById('week').value) > -1){alert('Dieser Trainingszeitraum wurde schon für ein anderen Trainingsplan bestimmt')}else{createTR(succes + 1, document.getElementById('TR_MN_input').value, new Date().getDate() + '.' + (new Date().getMonth() + 1) + '.' + new Date().getFullYear(), num + 1, 1, document.getElementById('week').value);num++;succes++;document.getElementById('TR_MN_Name').style.display='none';}">Bestätigen</button>
            <div onclick="document.getElementById('TR_MN_Name').style.display='none';">Abbrechen</div>
          </div></div>
          <div>
            <div id="TR_MN_bearbeiten" style="display:none">
              <p>Diesen Trainingsplan festlegen für:</p>
              <select id="week.2">
                <option value="zum festlegen klicken">noch nicht festlegen</option>
                <option id="week0.2">Diese Woche</option>
                <option id="week1.2">Nächste Woche</option>
                <option id="week2.2">Übernächste Woche</option>
              </select>
              <button onclick="TR_activeDatebearbeiten(document.getElementById('week.2').value)">Bestätigen</button>
              <div onclick="window.location.href='Trainingsplan_Menu.php'">Abbrechen</div>
            </div>
          </div>
          <div id="TR_Liste">
          </div>
        </content>
    </div>
    <div id="Willkommensnachricht">
      <?php
          if(isset($_SESSION["userName"]) AND $_SESSION["firstview"] == 'true'){
            echo "<h2>Hallo " . $_SESSION["userName"];
            echo "<p>Du wurdest erfolgreich angemeldet</p>";
            echo '<p id="Willkommensnachricht_besch">Nun kannst du deinen eigenen Trainingsplan zusammenstellen. Wir stellen dir Übungen vor, die du für dein Training nutzen kannst.</p>';
            echo '<button onclick="document.getElementById(`Willkommensnachricht`).style.display = `none`">SCHLIEßEN</button>';
            $_SESSION["firstview"] = 'false';
          }
       ?>
    </div>
    <div id="Übungenauswählen" onclick="">
      <p>Meine Statistiken</p>
    </div>
    <div id="Removeauswahl" onclick="window.location.href='Trainer.php?activeÜbungen=' + activeweekTRname4 + '&Übung_Num=0' ">
      <p id="RemoveauswahlP" style="top:-15px;">Starte dein Training<span id="StarteTraining"></span></p>
    </div>
    <div id="Trainingend" style="display:none">
      <p>Herzlichen Glückwunsch du hast dein heutiges Training abgeschlossen.</p>
    </div>
  </body>
  <script>
  		var userTraining = '<?php echo $_SESSION["userTraining"] ?>';
      var TR_activeDatebearbeitenvar = '<?php if(isset($_GET["activeDatetrid"])){echo $_GET["activeDatetrid"];}else{echo "0";} ?>';
      var TrainerError = '<?php if(isset($_GET["Übung_num"])){echo $_GET["Übung_num"];}else{echo "";} ?>';
      if(TrainerError == "error"){alert('Du hast für heute keine Übungen ausgewählt')}
      if(TR_activeDatebearbeitenvar !== "0"){document.getElementById("TR_MN_bearbeiten").style.display = "block"}
      var Trainingend = '<?php if(isset($_GET["Trainingend"])){echo $_GET["Trainingend"];}else{echo "";} ?>';
      if(Trainingend == 'true'){document.getElementById('Trainingend').style.display = 'block'}
      var num = 0;
      var Trainingspläne_Anzahl = userTraining.substr(1,1);
      var succes = -1;
        if(Trainingspläne_Anzahl !== "-"){  TR_load();}
      document.getElementById("week0").innerHTML = "Diese Woche (" + getWeek(0) + ")";
      document.getElementById("week1").innerHTML = "Nächste Woche (" + getWeek(1) + ")";
      document.getElementById("week2").innerHTML = "Übernächste Woche (" + getWeek(2) + ")";
      document.getElementById("week0").value = getWeek(0);
      document.getElementById("week1").value = getWeek(1);
      document.getElementById("week2").value = getWeek(2);
      document.getElementById("week0.2").innerHTML = "Diese Woche (" + getWeek(0) + ")";
      document.getElementById("week1.2").innerHTML = "Nächste Woche (" + getWeek(1) + ")";
      document.getElementById("week2.2").innerHTML = "Übernächste Woche (" + getWeek(2) + ")";
      document.getElementById("week0.2").value = getWeek(0);
      document.getElementById("week1.2").value = getWeek(1);
      document.getElementById("week2.2").value = getWeek(2);
      var activeweekTRname = userTraining.search(getWeek(0));
      var activeweekTRname2 = userTraining.slice(activeweekTRname - 12,activeweekTRname - 11);
      var activeweekTRname3 = userTraining.slice(userTraining.search(activeweekTRname2 + "N=")+3,userTraining.search(activeweekTRname2 + "Date"))
      var activeweekTRname4 = userTraining.slice(userTraining.search("TR" + activeweekTRname2), userTraining.search("_" + activeweekTRname2 + ";") + 3)
      if(activeweekTRname3.length > 20){activeweekTRname3 = "kein Trainingsplan ausgewählt"}
      document.getElementById("StarteTraining").innerHTML = "<br>Du trainierst zurzeit mit Trainingsplan:<b> " + activeweekTRname3 + "</b>";
      document.getElementById("logout").style.left = document.getElementById("Searchbar").offsetLeft + "px";
      document.getElementById("logout").style.top = document.getElementById("Searchbar").offsetTop + "px";
      document.getElementById("logout").style.position = "absolute";
      document.getElementById("Searchbar").style.transition = "0s";
      document.getElementById("Searchbar").style.opacity = "0";
      document.getElementById("Searchbar").style.zIndex = -5;
      if(document.getElementById("logout").innerHTML.search("Notice") > 0){window.location.href = "formular.php?user=invalid"}

      function TR_load(){
        var search = "TR" + num;
        var pos1 = userTraining.search(search);
        if(pos1 > -1){
          console.log(num);
          var pos2 = userTraining.search(num + "N=") + 3;
          var pos3 = userTraining.search(num + "Date=");
          var pos4 = userTraining.search(num + "Date=") + 6;
          var pos5 = userTraining.search(num + "activeDate=");
          var pos6 = userTraining.search(num + "activeDate=") + 12;
          var pos7 = userTraining.search(num + "ID=");
          var pos8 = userTraining.search(num + "ID=") + 4;
          var pos9 = userTraining.search("_" + num + ";");
          var TR_Name = userTraining.slice(pos2 , pos3);
          var TR_Date = userTraining.slice(pos4 , pos5);
          var TR_activeDate = userTraining.slice(pos6 , pos7);
          var TR_Id = userTraining.slice(pos8 , pos9);

          console.log(TR_Name);
          console.log(TR_Date);
          console.log(TR_activeDate);
          console.log(TR_Id);

          succes++;
          createTR(succes, TR_Name, TR_Date, num, 0, TR_activeDate);

          }
          if(succes !== parseInt(Trainingspläne_Anzahl)){num++;TR_load()}

    }
      //2TR00N=Test0Date=20000ID=asfjhsahfdadufhalfbasfhdgsuadfbl_0;TR11N=Test21Date=20011ID=hafahbnsudpfbhasiuldbasilud_1;TR44N=Test44Date=20014ID=hafahbnsudpfbhasiuldbasilud_4;
  </script>
  </html>
