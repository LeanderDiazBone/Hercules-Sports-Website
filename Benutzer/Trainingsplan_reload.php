<!DOCTYPE HTML>
  <html>
    <body>
        <?php
          $username = "127.0.0.1";
          $user = "root";
          $pw = "";
          $datenbank = "test";

          $con = new mysqli($username, $user, $pw, $datenbank);

          if($con->connect_error){
            die("Fehler".$con->connect_error);
          }

          session_start();
          $userMail = $_SESSION["userMail"];

          $sql = "SELECT * FROM anmeldeformular";
          $res = $con->query($sql);

        if(isset($_GET["userTraining"])){
          $userTraining = $_GET["userTraining"];
          $_SESSION["userTraining"] = $userTraining;

          $sql = "UPDATE anmeldeformular SET userTraining='$userTraining' WHERE userMail= '$userMail'";
            if($con->query($sql) === TRUE){
              echo "aktualisiert";
              header("Location: Trainingsplan_Menu.php");
              }else {
                echo 'fehler';
              }
          }
          if(isset($_GET["activeTrainingreload"])){
            $userTraining = $_GET["activeTrainingreload"];
            $_SESSION["userTraining"] = $userTraining;

            $sql = "UPDATE anmeldeformular SET userTraining='$userTraining' WHERE userMail= '$userMail'";
              if($con->query($sql) === TRUE){
                echo "aktualisiert";
                header("Location: Trainingsplan.php?activeTraining=" .$_GET["activeTraining"] ."&activeÜbung=none");
                }else {
                  echo 'fehler';
                }
            }

          $con->close();
         ?>
    </body>
  </html>
