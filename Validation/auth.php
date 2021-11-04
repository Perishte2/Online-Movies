<?php
          //We set login and password for Administrator
          $admin_login = 'admin';
          $admin_password = 'admin135qwerty';
          //gettind login and password value from form
          $login = filter_var(trim($_POST['login']),
          FILTER_SANITIZE_STRING);
          $password = filter_var(trim($_POST['password']),
          FILTER_SANITIZE_STRING);

          //hashing md5-hashing function
          $password = md5($password.'sfgjyrolmna12345');

    //Connection with db
    $mysql = new mysqli('localhost','root','','listOfRegisteredUsers');
          //Query-Select all datas from db and put condition that login and psq must be equel
          $result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' 
          AND `password` = '$password' ");
          //if user enters admins login annd password than Session variables will take them 
          if($admin_login === $_POST['login'] && $admin_password === $_POST['password']) {
                session_start();
                //keep value og login and psw in session
                $_SESSION["login"] = $_POST['login'];
                $_SESSION["password"] = $_POST['password'];
          }

          //next step
          //if user enters admins login and password than he will get an access to admin panel 
          if($_SESSION["login"] === $admin_login && $_SESSION["password"] === $admin_password) {
                header('Location: http://localhost:8080/AdminPanel/admin/listOfUsers.php');
                //else user will get not an access to Admin Panel and directs to home page
          }else if(($_SESSION["login"] !== $admin_login && $_SESSION["password"] !== $admin_password) ) {
                header('Location: http://localhost:8080/AdminPanel/index.html');
          }

          //fetch_assoc()-converts into usual array
 

          $user = $result->fetch_assoc();
          //if login was not found in database there is an error
          if (count((array)$user) == 0) {
                echo "Такой пользователь не найден";
                exit();
          }
          //setcookie is used for validation and compare
          setcookie('user', $user['name'], time() + 3600, "/");


    //closing connection with db
    $mysql -> close();
    //header('Location: /AdminPanel');
?>