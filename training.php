<!DOCTYPE HTML>
  <html>
    <head>
      <?php
        include("head.php");
      ?>
    </head>
    <body style="width:100%;height:auto;margin:0;background-color:#3d567c" onload="LOAD_ALL();LOAD_SP();" onscroll="Sportarten_head_visible()">
      <div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
      </div>
      <?php
      include('menu.php');
      ?>
      <?php
      include('menu_MOBILE.php');
      ?>
      <div style="height:100%;overflow:hidden;margin-top:0px;position:fixed" id="Background1_div"><img src="Bilder/training_p1.jpg" id="Background1" style="min-height:100vh;width: 100vw;min-width: 1500px;opacity:0.5;position:relative"></div>
      <div id="Background1_div2" style="width: 100%; height: 100vh"></div>
      <div style="width:100%;text-align:center; background-image: radial-gradient(#232a34 40%,#3d567c 150%); z-index: 3; position: relative">
        <div style="width:100%;height: 100px;text-align:center;position:fixed;top:-225px;transition: 1s;" id="Sportarten_head"><img src="Bilder/Logo4.png" style="max-width: 1400px;width: 100%" onload="document.getElementById('Sportarten_head').style.top = '-25px'"></div>
        <div style="position:absolute;height:50px;width:100%;margin-left:auto;margin-right:auto;text-align:center">
          <p style="color:white;font-family:Syncopate;opacity: 1 ;transition: 0.5s;position:relative;top: -100px" id="Scrollinfo">UM WEITER ZU KOMMEN SCROLLEN</p>
        </div>
        <div id="AdvancedTrainingsplan">
          <h1>Advanced Trainingsplan</h1>
          <p>Du willst das Maximum aus deinem Training herausholen und den Sporteignungstest so gut es geht meistern? Dann bist du hier genau richtig! Mit dem personalisierten Trainingsplan von uns kannst Du dein Training so effektiv wie möglich gestalten, um das beste Resultat beim Sporteignungstest an deiner gewählten Hochschule zu erreichen. Dazu musst du nur noch die folgenden Schritte befolgen und bist daher auf dem besten Weg zu deinem Erfolg!  </p>
          <li class="TrainingsplanLiNum">Schreibe uns eine E-Mail an herculescompanies@gmail.com und hänge die Informationen an, die wir brauchen, um dir einen persönlichen Trainingsplan zu erstellen (stehen unten) </li>
          <li class="TrainingsplanLiNum">Spezielle Fragen oder Wünsche können wir auch in einem Telefonat beantworten, dafür können wir einen Termin über E-Mail vereinbaren </li>
          <p style="margin-bottom: 10px;"><i>Informationen, die wir für die Erstellung deines persönlichen Trainingsplan brauchen:</i></p>
          <li class="TrainingsplanLi">Namen</li>
          <li class="TrainingsplanLi">Zeit bis zum Test </li>
          <li class="TrainingsplanLi">Verfügbare Zeit pro Woche für das Training </li>
          <li class="TrainingsplanLi">Trainingsbedarf (welche Sportarten müssen noch trainiert werden) </li>
          <li class="TrainingsplanLi">Trainingsmöglichkeiten (wie oft kann man in das Schwimmbad gehen oder wann gibt es Möglichkeiten Leichtathletik ) </li>
        </div>
        <?php
        include('footer.php');
        ?>
      </div>
    <script type="text/javascript">

    function Sportarten_head_visible(){
      if(window.pageYOffset > 0.5 * window.innerHeight && window.innerWidth > 600){
        document.getElementById("Sportarten_head").style.display = "none";
      }else if(window.pageYOffset > 0 && window.innerWidth < 600){
        document.getElementById("Sportarten_head").style.display = "none";
      }else{
        document.getElementById("Sportarten_head").style.display = "block";
      }
    }
    </script>
  </body>
  </html>
