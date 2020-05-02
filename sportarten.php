<!DOCTYPE HTML>
  <html>
    <head>
      <?php
        include("head.php");
      ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    </head>
    <body style="width:100%;height:auto;margin:0;background-color:#3d567c" onload="LOAD_ALL();LOAD_SP();" onresize="ResizeSportarten()">
      <div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0; height: 100vh" id="background">
      </div>
      <?php
      include('menu.php');
      ?>
      <?php
      include('menu_MOBILE.php');
      ?>
      <div style="height: 0px" id="Background1_div"><img src="Bilder/test5.jpg" id="Background1" style="min-height:100vh;width: 100vw;min-width: 1500px;opacity:0.5;position:relative"></div>
      <div id="Background1_div2" style="width: 100%"></div>
      <div style="" id="Sportarten_head"><img src="Bilder/Logo2.png" style="max-width: 1400px;width:100%;max-height: 200px" onload="if(screen.width > 600){document.getElementById('Sportarten_head').style.top = '-25px'}else{document.getElementById('Sportarten_head').style.display = 'none'}"></div>
      <div style="position:absolute;height:50px;width:100%;margin-left:auto;margin-right:auto;text-align:center">
        <p style="color:white;font-family:Syncopate;opacity: 1 ;transition: 0.5s;position:relative;top: -100px" id="Scrollinfo">UM WEITER ZU KOMMEN SCROLLEN</p>
      </div>
      <div style="z-index: 3;position: relative; background-image: radial-gradient(#232a34 40%,#3d567c 150%);padding-top: 50px">
      <h1 style="margin-top:40px">Unsere Sportberichte</h1>
      <p class="Sportarten_intro">Hier findest du Informationen über verschiedenste Sportarten, Tipps und Fakten.</p>
      <div style="width:100%;height:1px;background-color:#3d567c;margin-bottom:100px" class="Sportarten_intro"> </div>
      <div style="display:flex;flex-wrap:wrap;justify-content:space-around;width:100%">
        <a href="SportartenTexte/Fussball/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">FUßBALL</h2><img src="Bilder/Sportart_1.jpg" style="" class="Sportart_Bilder"></div></a>
        <a href="SportartenTexte/Laufsport/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">LAUFSPORT</h2><img src="Bilder/Sportart_12.jpg" style="" class="Sportart_Bilder"></div></a>
        <a href="SportartenTexte/Handball/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">HANDBALL</h2><img src="Bilder/Sportart_2.jpg" style="" class="Sportart_Bilder"></div></a>
        <a href="SportartenTexte/Calisthenics/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">CALISTHENICS</h2><img src="Bilder/Sportart_3.jpg" style="" class="Sportart_Bilder"></div></a>
        <a href="SportartenTexte/Hockey/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">HOCKEY</h2><img src="Bilder/Sportart_4.jpg" style="" class="Sportart_Bilder"></div></a>
        <a href="SportartenTexte/Krafttraining/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">KRAFTTRAINING</h2><img src="Bilder/Sportart_5.jpg" style="" class="Sportart_Bilder"></div></a>
        <a href="SportartenTexte/Leichtathletik/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">LEICHTATHLETIK</h2><img src="Bilder/Sportart_6.jpg" style="" class="Sportart_Bilder"></div></a>
        <a href="SportartenTexte/Mountainbiking/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">MOUNTAINBIKE</h2><img src="Bilder/Sportart_7.jpg" style="" class="Sportart_Bilder"></div></a>
        <a href="SportartenTexte/Tennis/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">TENNIS</h2><img src="Bilder/Sportart_8.jpg" style="" class="Sportart_Bilder"></div></a>
        <a href="SportartenTexte/Tischtennis/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">TISCHTENNIS</h2><img src="Bilder/Sportart_9.jpg" style="" class="Sportart_Bilder"></div></a>
        <a href="SportartenTexte/Triathlon/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">TRIATHLON</h2><img src="Bilder/Sportart_10.jpg" style="" class="Sportart_Bilder"></div></a>
        <a href="SportartenTexte/Volleyball/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">VOLLEYBALL</h2><img src="Bilder/Sportart_11.jpg" style="" class="Sportart_Bilder"></div></a>
        <a href="SportartenTexte/Basketball/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">BASKETBALL</h2><img src="Bilder/Sportart_13.jpg" style="" class="Sportart_Bilder"></div></a>
        <a href="SportartenTexte/Schwimmen/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">SCHWIMMEN</h2><img src="Bilder/Sportart_14.jpg" style="" class="Sportart_Bilder"></div></a>
        <a href="SportartenTexte/Turnen/Allgemein.php"><div class="Sportart_Bilder_div"><h2 class="Sportart_Bilder_h2">TURNEN</h2><img src="Bilder/Sportart_15.jpg" style="" class="Sportart_Bilder"></div></a>
      </div>
      <div style="width:100%;height:1px;background-color:#3d567c;margin-top:100px"> </div>
      <p>Und viele weitere werden folgen.</p>
      <?php
      include('footer.php');
      ?>
      </div>
      <script>
      function Mobile_menu_start(){
        document.getElementById("MENU_Feld").style.left = "-40px";
        document.getElementById("MENU_Feld").style.height = window.innerHeight + "px";
        document.getElementById("MENU_MOBILE_gray").style.height = window.innerHeight + "px";
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

      function ResizeSportarten(){
        if(window.innerWidth < 600){
          document.getElementById("Background1_div").style.display = "none";
        }else{
          document.getElementById("Background1_div").style.display = "block";
        }
      }
      </script>
  </body>
  </html>
