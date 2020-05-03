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
      <div style="height:100%;overflow:hidden;margin-top:0px;position:fixed" id="Background1_div"><img src="Bilder/test6.jpg" id="Background1" style="min-height:100vh;width: 100vw;min-width: 1500px;opacity:0.5;position:relative"></div>
      <div id="Background1_div2" style="width: 100%; height: 100vh"></div>
      <div style="width:100%;text-align:center">
      <div style="width:100%;height: 100px;text-align:center;position:fixed;top:-225px;transition: 1s;z-index: 4" id="Sportarten_head"><img src="Bilder/InfoHead.png" style="max-width: 700px;width: 100%; margin-top: 50px; " onload="document.getElementById('Sportarten_head').style.top = '-25px'"></div>
      <div style="position:absolute;height:50px;width:100%;margin-left:auto;margin-right:auto;text-align:center">
        <p style="color:white;font-family:Syncopate;opacity: 1 ;transition: 0.5s;position:relative;top: -200px" id="Scrollinfo">UM WEITER ZU KOMMEN SCROLLEN</p>
      </div>
      <div style="width:100%;text-align:center; background-image: radial-gradient(#232a34 40%,#3d567c 150%); z-index: 3; position: relative; padding-top: 100px">
        <h1>Sporteigungstest Anforderungen</h1>
        <p>Der Sporteigungstest als Zulassungsprüfungen für Sporthochschulen in Deutschland ist kein einheitliches Prüfungsverfahren. Die konkreten Anforderungen und Disziplinen sind häufig sehr unterschiedlich bei verschiedenen Hochschulen und Universitäten.</p>
        <p>Allgemein gilt: Man darf von allen Übungen nur eine einzige nicht bestehen. Bei dem zweiten Defizit (=erreichen der Leistungsanforderungen fehlgeschlagen) fällt man durch.</p>
        <h3>Leistungsanforderungen Sporthochschule Köln:</h3>
        <h4>Leichtathletik: </h4>

        <table style="margin-left: auto; margin-right:auto;width:50%;text-align: center;color:white;font-size:20pt;">
        <tr><th>Disziplinen</th><th>Frauen</th><th>Männer</th></tr>
        <tr><td>100m Sprint</td><td>15,5s</td><td>13,4s</td></tr>
        <tr><td>Hochsprung</td><td>1,2m</td><td>1,4m</td></tr>
        <tr><td>Kugelstoßen</td><td>4kg 6,75m</td><td>7,25kg 7,6m</td></tr>
        </table>
        <h4>Turnen:</h4>
        <table style="margin-left: auto; margin-right:auto;width:70%;text-align:center;color:white;font-size:15pt;">
        <tr><th>Bereiche</th><th>Prüfungsübung</th></tr>
        <tr><td>Sprung</td><td>Sprunghocke Pferd seit gestellt  (Höhe: Frauen: 1,20 m,  Männer: 1,25 m;  Brettabstand 1,10 m)</td></tr>
        <tr><td>Boden</td><td>Rolle vorwärts, Strecksprung mit ½ Drehung • Rolle rückwärts durch den Hockstütz oder Handstand  • Aufschwingen in den Handstand (abrollen erlaubt)  • Anlauf, Anhüpfer und Rad</td></tr>
        <tr><td>Reck</td><td>Aufschwung • Rückschwung in den freien Stütz • Umschwung vorlings rückwärts  • Unterschwung aus dem Stütz oder Stand</td></tr>
        <tr><td>Frauen:  Schaukeln im Beugehang  (2)  (kopfhohe Ringe und  40 cm hoher Kasten im Abstand von 2,50 m vom Aufhängepunkt)</td><td>Aus dem Stand auf dem niedrigen Kasten (Ringe gefasst), Sprung in den Beugehang gehockt, vor- und rückschaukeln, Landung auf dem Kasten  </td></tr>
        <tr><td>Männer:  Klimmzüge  (2)  (Reck, sprunghoch</td><td>Fünf (5) Klimmzüge</td></tr>
        </table>
        <h4>Schwimmen:</h4>
        <table style="margin-left: auto; margin-right:auto;width:50%;text-align: center;color:white;font-size:15pt;">
        <tr><th>Disziplin</th><th>Frauen</th><th>Männer</th></tr>
        <tr><td>Zeitschwimmen Brust (100m)</td><td>02:00:00</td><td>01:50:00</td></tr>
        <tr><td>Zeitschwimmen Kraul(100m)</td><td>01:48:00</td><td>01:40:00</td></tr>
        </table>
        <table style="margin-left: auto; margin-right:auto;width:70%;text-align:center;color:white;font-size:12pt;">
        <tr><th>Disziplin</th><th>Ausführungsempfehlung / Leistungsminimum</th></tr>
        <tr><td>Kopfsprung  (2)  mit Anlauf vom 1-m-Brett</td><td>• mind. 3 Schritte Anlauf (Empfehlung: ruhiges Angehen!)  • beidbeiniger Absprung  • Kopfsprung mit einer Flugkurve in der Ausführung gestreckt, gehockt oder gehechtet  • Eintauchwinkel mit gestreckten parallel geschlossenen Beinen im Winkel zwischen 45° und 90° zur Wasseroberfläche

 Nicht akzeptiert werden z. B.  - Sprünge aus dem Stand  - weite Sprünge mit flachem Eintauchen (ähnlich einem Startsprung)  - Überschlagen des Körpers  - gegrätschte oder gescherte Beinhaltungen oder gebeugte Hüft- bzw. Kniegelenke beim Eintauchen
 </td></tr>
        <tr><td>20–m-Streckentauchen  (2)  </td><td>• Startsprung vom Startblock oder Abstoßen von der Beckenwand  • Tauchen deutlich unterhalb der Wasseroberfläche  • am Ende der Tauchstrecke einen Tauchring in ca. 2 m Tiefe dicht übertauchen

 Empfehlung:  - ruhig ablaufende Arm- und Beinbewegungen  - vor dem Tauchgang höchstens 2- bis 3-mal ruhige Normalatmung - Hyperventilation ist nicht gestattet

 Nicht akzeptiert wird  - Schwimmen ohne Atmung dicht an/unterhalb der Wasseroberfläche
 </td></tr>
        <tr><td>Bewegungsdemonstration (2) 25-m-Kraulschwimmen </td><td>Wechselzug der Arme und Wechselschlag der Beine bei flacher und gestreckter Position des Körpers an der Wasseroberfläche • Schwimmen mit Gesicht im Wasser, regelmäßige, rhythmische Atmung, Einatmung im 2er- oder 3er Rhythmus seitlich zum passenden Zeitpunkt der Armbewegung

 Nicht akzeptiert werden z. B.: - Stoß-/Tretbewegungen der Beine (ähnliche der Brustschwimm-Beinbewegung) - keine oder unregelmäßige Atmung  Frontalatmung (d.h. Kopf nach vorn zur Einatmung angehoben) - längere Teilstrecken ohne Atmung
 </td></tr>
        <tr><td>25-m-Brustschwimmen</td><td>• Wechselzug der Arme und Wechselschlag der Beine bei flacher und gestreckter Position des Körpers an der Wasseroberfläche • Schwimmen mit Gesicht im Wasser, regelmäßige, rhythmische Atmung, Einatmung im 2er- oder 3er Rhythmus seitlich zum passenden Zeitpunkt der Armbewegung

 Nicht akzeptiert werden z. B.: - Stoß-/Tretbewegungen der Beine (ähnliche der Brustschwimm-Beinbewegung) - keine oder unregelmäßige Atmung  Frontalatmung (d.h. Kopf nach vorn zur Einatmung angehoben) - längere Teilstrecken ohne Atmung

 • Spiegelsymmetrischer Verlauf von Arm- und Beinbewegung • Dorsalflexion (Rückwärtsbeugung) im Fußgelenk während der Antriebsphase der Beinbewegung gemäß internationalem Regelwerk • flache, gestreckte Körperlage nach jedem Zyklus  dem Armzug zugeordnete rhythmische Atmung frontal

 Nicht akzeptiert werden z. B.: - Asymmetrien der Beine (umgangssprachlich „Schere“) - Plantarflexion im Fußgelenk während der Schwunggrätsche (sogen. „Spitzfuß“ oder „Ballettfuß“) - Schulter- oder Hüftquerachse nicht parallel zur Wasseroberfläche - deutliche Disharmonie in der Koordination von Arm- und Beinbewegung
 </td></tr>
        </table>
<h4>Ausdauer:</h4>
<table style="margin-left: auto; margin-right:auto;width:70%;text-align:center;color:white;font-size:15pt;">
<tr><th>Disziplin</th><th>Frauen</th><th>Männer</th></tr>
<tr><td>2000m/3000m Ausdauerlauf</td><td>2000m: 10:00 min</td><td></td><td>3000m: 13:00 min</td></tr>
</table>
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
