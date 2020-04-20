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

        $sql = "SELECT * FROM anmeldeformular";
        $res = $con->query($sql);
        $userMail_form = $_POST['userMail'];
        $userPassword_form = $_POST['userPassword'];

        if($res->num_rows > 0){
          while($i = $res->fetch_assoc()){
            if($i["userMail"] == $userMail_form){
              if(password_verify($userPassword_form, $i["userPassword"])){
                session_start();
                $_SESSION["userName"] = $i["userName"];
                $_SESSION["firstview"] = 'true';
                $_SESSION["userMail"] = $userMail_form;
                if(isset($i["userTraining"])){$_SESSION["userTraining"] = $i["userTraining"];}
                header("Location: Trainingsplan_Menu.php");
                break;
              }else {
                header("Location: formular.php?user=invalid");
              }
            }else {
              header("Location: formular.php?user=invalid");
            }
          }
        }

        $con->close();
       ?>
    </body>
  </html>
