<!DOCTYPE HTML>
  <html>
    <head>
      <?php
        include("head.php");
      ?>
    </head>
    <body style="width:100%;height:auto;margin:0;background-color:#3d567c" onload="LOAD_ALL();LOAD_SP();" onscroll="Sportarten_head_visible()" onresize="RemoveHead()">
      <div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
      </div>
      <?php
      include('menu.php');
      ?>
      <?php
      include('menu_MOBILE.php');
      ?>
      <div style="height:100%;overflow:hidden;margin-top:0px;position:fixed" id="Background1_div"><img src="Bilder/uns_p1.jpg" id="Background1" style="min-height:100vh;width: 100vw;min-width: 1500px;opacity:0.5;position:relative"></div>
      <div id="Background1_div2" style="width: 100%; height: 100vh  "></div>
      <div style="width:100%;height: 100px;text-align:center;position:absolute;top:-225px;transition: 1s;z-index: 4;" id="Sportarten_head"><img src="Bilder/HerculesSports.png" style="max-width: 1400px;width: 100%; z-index: 5" onload="document.getElementById('Sportarten_head').style.top = '10px'"></div>
<div style="width:100%;text-align:center; background-image: radial-gradient(#232a34 40%,#3d567c 150%); z-index: 3; position: relative">
  <h1 style="padding-top: 100px ">Was man über uns wissen sollte ...</h1>
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
      <?php
      include('footer.php');
      ?>
</div>

  </body>
  <script type="text/javascript">
   RemoveHead()

  function Sportarten_head_visible(){
    if(window.pageYOffset > 0.5 * window.innerHeight && window.innerWidth > 600){
      document.getElementById("Sportarten_head").style.display = "none";
    }else if(window.pageYOffset > 0 && window.innerWidth < 600){
      document.getElementById("Sportarten_head").style.display = "none";
    }else{
      document.getElementById("Sportarten_head").style.display = "block";
    }
  }

  function RemoveHead(){
    if(window.innerWidth < 600){
      document.getElementById("Sportarten_head").style.display = "none";
    }else{
      document.getElementById("Sportarten_head").style.display = "block";
    }
  }
  </script>
  </html>
