<!DOCTYPE HTML>
  <html>
    <head>
      <?php
        include("head.php");
      ?>
    </head>
    <body style="width:100%;height:auto;margin:0;background-color:#3d567c" onscroll="LOAD_SP()" onload="LOAD_SP();RESIZE();" onresize="RESIZE()">
      <div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
      </div>
      <?php
      include('menu.php');
      ?>
      <div style="height:100%;overflow:hidden;margin-top:0px;position:fixed" id="Background1_div"><img src="Bilder/uns_p1.jpg" id="Background1" style="width:100%;opacity:0.7"></div>
      <div id="Background1_div2" style="width: 100%"></div>
      <div style="width:100%;height: 100px;text-align:center;position:absolute;top:-225px;transition: 1s;" id="Sportarten_head"><img src="Bilder/HerculesSports.png" style="height:130px;width: 1400px;" onload="document.getElementById('Sportarten_head').style.top = '10px'"></div>
      <h1>Was man über uns wissen sollte ...</h1>
<div style="width: 100%;text-align: center;">
      <h3>Unser Motto</h3>
      <h4>START DOING:</h4>
      <p>Beginne etwas zu tun. Gerade in unserer heutigen Zeit, in der das gesunde Leben in den Hintergrund gerückt ist, sollte man anfangen für sich selbst etwas zu tun. - Mache Sport, Ernähre dich gesund und fühle dich dadurch viel besser.</p>
      <h4>START DOING:</h4>
      <p>Fang einfach an ! Überlege nicht ob es sinnvoll ist jetzt etwas zu tun oder ob du es erst später machst. Überlege nicht sondern fang einfach an.</p>
      <h4>START DOING:</h4>
      <p>Beginne besser zu werden. (Start doing better) Versuche jeden Tag besser zu werden, egal ob im Sport oder im Alltag, beginn einfach besser zu sein als gestern.</p>
      <h3>Wer wir sind</h3>
      <p>Hercules-Sports bietet viele Informationen, Tipps und vieles mehr zu verschiedensten Sportarten. Anfänger sowie Profis finden bei uns vielfältige Artikel zu Sportarten, Training und Ernährung, welche ihnen in ihrer Sportart weiterhelfen können. Zudem bietet Hercules-Sports eine viele Möglichkeiten für motivierte Menschen, die eine Sportart anfangen möchten, sich in jeweiligen Bereichen zu orientieren und zu informieren.</p>
      <img src="Bilder/Löwenkopf.png" style="width: 100%; max-width: 700px">
</div>
<?php
include('footer.php');
?>
  </body>
  </html>
