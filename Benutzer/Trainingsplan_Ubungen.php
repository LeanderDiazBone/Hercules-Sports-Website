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
    <body style="width:100%;height:auto;margin:0;background-color:#3d567c" onscroll="scroll();LOAD_SP();" onload="LOAD_ALL();LOAD_SP();RESIZE();" onresize="RESIZE()">
      <div style="background-image: url(Bilder/Trainingsplan_back.jpg);width:100%;height:100%;background: cover" id="background">
      </div>
      <div style="width:100%;text-align:center">
        <h1 style="color: black">Dein Trainingsplan</h1>
        <content>
          <div id="TR_Ubungen">
            <h2 style="width:100%;margin-bottom: 5px;margin-top: 5px;border:none; color: #b1b1b1">Hier findest du verschiedene Übungen, die du in dein Trainingsplan einfügen kannst.</h2>
            <div>
              <h2>Beine</h2>
            </div>
            <div>
              <h2>Rücken</h2>
            </div>
            <div>
              <h2>Schultern</h2>
            </div>
            <div>
              <h2>Brust</h2>
            </div>
            <div>
              <h2>Bauch</h2>
            </div>
            <div>
              <h2>Arme</h2>
            </div>
            <div>
              <h2>Stabilität</h2>
            </div>
            <div>
              <h2>Ausdauer</h2>
            </div>
          </div>
          <div id="Beine" onclick="window.location.href='Trainingsplan.php?activeTraining=' + activeTraining + '&activeÜbung=,02153'">
            <h2>Übung 1</h2>
            <p></p>
          </div>
        </content>
    </div>
  </body>
  <script>
  var activeTraining = '<?php echo $_SESSION["activeTraining"] ?>';
  </script>
  </html>
