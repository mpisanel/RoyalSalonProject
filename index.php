<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        if (isset($_GET["btnLogin"]))
            {
                getLog();
            }
        else if(isset($_GET["btnSignUp"]))
        {
             require("regpage.php");
        }
       /* else if(isset ($GET["btnLogout"]))
        {
            $doc = new DOMDocument();
            $doc->loadHTMLFile("LoginPage.html");
            echo $doc->saveHTML();
            exit;

        }*/
        function getLog()
        {
        $email = $_GET["email"];
        $password = $_GET["password"];
        $conn = new mysqli("localhost","root","root","rsp_db");

        $query = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";

        if ($conn->connect_error)
        {
            die('Could not connect to database!');
	}
	else {

            if($query_run=$conn->query($query)) {

                $valID = null;
                $valEmail= null;
                $valPass = null;
      
                while ($query_row = $query_run->fetch_assoc()) {

                    $valID = $query_row["login_id"];
                    $valEmail = $query_row["email"];
                    $valPass = $query_row["password"];
                }

                if($valEmail == $email && $valEmail!=null && $valPass == $password && $valPass!=null) {

                    require("servicespage.php");
                    exit;
                }
                else if($email == "admin@gmail.com" && $email!=null && $password == "a" && $password!=null) {

                      require 'adminhome.php';
                      exit();
                    ?>
                    <script>
                        alert('You are logging in as Admin!!');
                     </script>
                     <?php

                    exit;
                }
                 else if($email == "" || $password == "") {
                 
                      require("regpage.php");
                    ?>
                    <script>
                        alert('No data in the field!!');
                     </script>
                     <?php
                    exit;
                }

                else {

                     require("loginpage.php");

                    ?>
                      <script>
                        alert('Invalid details!!');
                     </script>
                     <?php
                    exit;
                }
            }
            else {

               echo mysql_error();
            }
        }
    }
        ?>
    </body>
</html>
