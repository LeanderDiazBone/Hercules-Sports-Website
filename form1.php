<?php
if(trim($_POST['text']) != ""){
$text = $_POST['text'];
$datum = date("d.m.Y - H:i");
$zeile = "Am $datum: $text\r\n";
file_put_contents("beispiel.txt", $zeile, FILE_APPEND);
}
?>
<div style="height:100%;width:100%;background-color:#555555"></div>
<img src="Bilder/LUPE.png" onload="window.location = 'index.php'">
