<?php
                //Logout File from Authorization

                //We kill our session variables and they stop existing

                unset($_SESSION["login"]);
                unset($_SESSION["password"]);
                
                //Direction to Authorization File

        header('Location: http://localhost:8080/AdminPanel/Validation/Authorization.php');
?>