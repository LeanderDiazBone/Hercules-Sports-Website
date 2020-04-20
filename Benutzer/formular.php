<?php
session_start();
 ?>
<!DOCTYPE HTML>
  <html>
    <head>
      <?php
        include("../head.php");
      ?>
      <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
      <link href="../Stylesheets/style.css" rel=stylesheet type="text/css" id="style">
      <link href="../Stylesheets/style_resize.css" rel=stylesheet type="text/css">
    </head>
    <body style="width:100%;height:auto;margin:0;background-color:#3d567c" onscroll="scroll();LOAD_SP();" onload="LOAD_ALL();LOAD_SP();RESIZE();" onresize="RESIZE()">
      <div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0;height: 100%" id="background">
      </div>
      <?php
      include('../menu.php');
      ?>
      <div style="width:100%;text-align:center">
        <h1>Anmeldeformular</h1>
        <form style="text-align: center" method="post" action="Anmelden.php" id="anmelden">
          <input name="userMail" placeholder="E-Mail" autocomplete="off" class="form0_input"></input><br>
          <input name="userPassword" style="margin-top:0" type="password" placeholder="Passwort" class="form0_input"></input><br>
          <p id="form_select_p" style="z-index:5;cursor:pointer;top:-50;" onclick="document.getElementById('anmelden').style.display = 'none';document.getElementById('registrieren').style.display = 'block'">Noch nicht registriert ? Klicke hier ...</p>
          <button type="submit" id="form0_submit">Anmelden</button>
        </form>
        <form style="text-align: center;display:none" method="post" action="Registrieren.php" id="registrieren">
          <input name="userName" placeholder="Benutzername" class="form_input" onkeyup="if(document.getElementsByClassName('form_input')[0].value.length != 0 ){document.getElementById('form_input_activ1').style.width = '402px';form_vaild()}else{document.getElementById('form_input_activ1').style.width = '0px';form_vaild()}"></input><br>
          <div id="form_input_activ1" class="form_input_activ"></div><br>
          <input name="userMail" id="form_mail" placeholder="E-Mail" autocomplete="off" class="form_input" onkeyup="if(document.getElementsByClassName('form_input')[1].value.length != 0 ){document.getElementById('form_input_activ2').style.width = '402px';form_vaild()}else{document.getElementById('form_input_activ2').style.width = '0px';form_vaild()};document.getElementById('form_mail_test').value = document.getElementById('form_mail').value;"></input><br>
          <div id="form_input_activ2" class="form_input_activ"></div><br>
          <input  type="email" placeholder="E-Mail" id="form_mail_test" required><p id="form_mail_invalid" style="">Diese E-Mail ist ungültig</p></input><br>
          <input name="userPassword" style="margin-top:0" type="password" placeholder="Passwort" class="form_input" onkeyup="if(document.getElementsByClassName('form_input')[2].value.length != 0 ){document.getElementById('form_input_activ3').style.width = '402px';form_vaild()}else{document.getElementById('form_input_activ3').style.width = '0px';form_vaild()};if(document.getElementsByClassName('form_input')[2].value.length < 5){document.getElementById('form_password_invalid').innerHTML = 'Bitte mindestens 5 Zeichen eingeben';document.getElementById('form_password_invalid').style.opacity = 1}else if(document.getElementsByClassName('form_input')[2].value.length > 20){document.getElementById('form_password_invalid').innerHTML = 'Bitte maximal 20 Zeichen eingeben';document.getElementById('form_password_invalid').style.opacity = 1}else{document.getElementById('form_password_invalid').innerHTML = '';document.getElementById('form_password_invalid').style.opacity = 0}"></input><br>
          <div id="form_input_activ3" class="form_input_activ"></div><br>
          <p id="form_password_invalid"></p>
          <div id="form_select_div"><select id="form_select" name="userSport" placeholder="Wähle deine Sportart">
            <option value="">-- Wähle hier deine Sportart --</option>
            <option value="Triathlon">Triathlon</option>
            <option value="Handball">Handball</option>
            <option value="Fußball">Fußball</option>
            <option value="Tennis">Tennis</option>
            <option value="Tischtennis">Tischtennis</option>
            <option value="Calisthenics">Calisthenics</option>
            <option value="Mountainbiking">Mountainbiking</option>
            <option value="Leichtathletik">Leichtathletik</option>
            <option value="Basketball">Basketball</option>
            <option value="Hockey">Hockey</option>
            <option value="Krafttraining">Krafttraining</option>
            <option value="Laufsport">Laufsport</option>
            <option value="Volleyball">Volleyball</option>
          </select></div>
          <p id="form_select_p">Dieses Feld muss nicht ausgewählt werden.<br> Wählst du dennoch eine Sportart aus, wird dein Inhalt auf diese Sportart angepasst.</p>
          <button type="submit" id="form_submit">Bitte fülle alle Felder aus!</button>
        </form>
        <div id="Fehlermeldung">
          <?php
              if(isset($_GET["user"])){if($_GET["user"] == 'invalid'){echo "Die Angegebenen Daten sind ungültig. Bitte überprüfe deine E-Mail oder dein Passwort.";echo '<button onclick="window.location.href = `formular.php`">OKAY</button>';}}
              if(isset($_GET["userMail"])){if($_GET["userMail"] == 'invalid'){echo "Die angegebene E-Mail wurde schon einmal verwendet.";echo '<button onclick="window.location.href = `formular.php`">OKAY</button>';}}
              if(isset($_GET["logout"])){if($_GET["logout"] == 'true'){echo "Du wurdest erfolgreich abgemldet";echo '<button onclick="window.location.href = `formular.php`">OKAY</button>';session_destroy();}}
           ?>
        </div>
    </div>
  </body>
  <script>
    function form_vaild(){
      if(document.getElementsByClassName('form_input')[0].value.length == 0 || document.getElementsByClassName('form_input')[2].value.length < 5 || document.getElementsByClassName('form_input')[2].value.length > 20 || document.getElementsByClassName('form_input')[1].value.length == 0)
      {document.getElementById('form_submit').style.cursor = "not-allowed";document.getElementById('form_submit').innerHTML = "Bitte fülle alle Felder aus!"; document.getElementById('form_submit').disabled = true}
      else{document.getElementById('form_submit').style.cursor = "pointer";document.getElementById('form_submit').innerHTML = "Bestätigen"; document.getElementById('form_submit').disabled = false}
    }
    document.getElementById("Search").style.display = "none";
  </script>
  </html>
