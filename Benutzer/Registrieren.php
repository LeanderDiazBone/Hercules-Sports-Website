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
          $userMail_form = $_POST['userMail'];

          $sql = "SELECT * FROM anmeldeformular";
          $res = $con->query($sql);
          if($res->num_rows > 0){
            while($i = $res->fetch_assoc()){
              if($i["userMail"] == $userMail_form){
                header("Location: formular.php?userMail=invalid");
                $con->close();
              }
            }
          }
          $userName_form = $_POST['userName'];
          $userPassword_form = $_POST['userPassword'];
          $userSport_form = $_POST['userSport'];
          $userPassword_hash = password_hash($userPassword_form, PASSWORD_DEFAULT);
          $sql = "INSERT INTO anmeldeformular (userName, userMail, userPassword, userSport) VALUES ('$userName_form', '$userMail_form', '$userPassword_hash' , '$userSport_form')";
            if($con->query($sql) === TRUE){
              session_start();
              $_SESSION["userName"] = $userName_form;
              $_SESSION["firstview"] = 'true';
              $_SESSION["userMail"] = $userMail_form;
              $_SESSION["userTraining"] = ".-1";
              header("Location: Trainingsplan_Menu.php");
              }else {
                echo '<meta http-equiv=refresh content="0; url=formular.php">';
              }


          $con->close();
         ?>
    </body>
  </html>
