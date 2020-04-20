<!DOCTYPE HTML>
  <html>
    <head>
      <?php
        include("head.php");
      ?>
    </head>
    <body style="width:100%;height:auto;margin:0;background-color:#3d567c" onscroll="LOAD_SP()" onload="LOAD_ALL();LOAD_SP();RESIZE();" onresize="RESIZE()">
      <div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
      </div>
      <?php
      include('menu.php');
      ?>
      <div style="height:100%;overflow:hidden;margin-top:0px;position:fixed" id="Background1_div"><img src="Bilder/ernährung_p3.jpg" id="Background1" style="width:100%;opacity:0.5;top:-300px;position:relative"></div>
      <div id="Background1_div2" style="width: 100%"></div>
      <div style="width:100%;text-align:center">
      <div style="width:100%;height: 100px;text-align:center;position:fixed;top:-225px;transition: 1s;" id="Sportarten_head"><img src="Bilder/Logo3.png" style="height:200px;width: 1400px;" onload="document.getElementById('Sportarten_head').style.top = '-25px'"></div>
      <div style="position:absolute;height:50px;width:100%;margin-left:auto;margin-right:auto;text-align:center">
        <p style="color:white;font-family:Syncopate;opacity: 1 ;transition: 0.5s;position:relative;top: -200px" id="Scrollinfo">UM WEITER ZU KOMMEN SCROLLEN</p>
      </div>
    </div>
    <?php
    include('footer.php');
    ?>
  </body>
  </html>
