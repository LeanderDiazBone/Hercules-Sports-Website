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
      <div style="height:100%;overflow:hidden;margin-top:0px;position:fixed" id="Background1_div"><img src="Bilder/ernährung_p3.jpg" id="Background1" style="min-height:100vh;width: 100vw;min-width: 1500px;opacity:0.5;position:relative"></div>
      <div id="Background1_div2" style="width: 100%; height: 100vh"></div>
      <div style="width:100%;text-align:center">
      <div style="width:100%;height: 100px;text-align:center;position:fixed;top:-225px;transition: 1s;z-index: 4" id="Sportarten_head"><img src="Bilder/Logo3.png" style="max-width: 1400px;width: 100%" onload="document.getElementById('Sportarten_head').style.top = '-25px'"></div>
      <div style="position:absolute;height:50px;width:100%;margin-left:auto;margin-right:auto;text-align:center">
        <p style="color:white;font-family:Syncopate;opacity: 1 ;transition: 0.5s;position:relative;top: -200px" id="Scrollinfo">UM WEITER ZU KOMMEN SCROLLEN</p>
      </div>
      <div style="width:100%;text-align:center; background-image: radial-gradient(#232a34 40%,#3d567c 150%); z-index: 3; position: relative; padding-top: 100px">
        <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.

Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer</p>
<?php
include('footer.php');
?>
      </div>
    </div>
  </body>
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
  </html>
