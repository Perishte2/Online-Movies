<?php
    
   
        //Connection with Database
        $conn = mysqli_connect('localhost','root','','listOfRegisteredUsers');
        //By clicking button submit datas will be got from the form with method post
                if(isset($_POST['insert-btn'])) {
                    
                        $name = $_POST['name'];
                        $surname = $_POST['surname'];
                        $birthday = $_POST['birthday'];
                        $enum = $_POST['enum'];
                        $login = $_POST['login'];
                        $password = $_POST['password'];
                         //Hashing password
                        $password = md5($password.'sfgjyrolmna12345');
                        //Query-select all datas from db logins are equel
                        $sql = $conn->query("SELECT * FROM `users` WHERE `login` = '$login' LIMIT 1");
                        //if user enters login which is in database already exists he or she will get an error.As field login is unique
                        if(mysqli_num_rows($sql) > 0)
                        {
                                echo "Пользователь с таким логином уже существует.Попробуйте ввести другой логин";
                                exit;
                        }
                        //enters datas from the form in site to database users
                        $insert = "INSERT INTO users (id,name, surname, birthday, enum, login, password) 
                        VALUES(NULL,'$name', '$surname', '$birthday', '$enum', '$login', '$password')";
                        $run_insert = mysqli_query($conn, $insert);
                       //if condition is true ther will be a message
                       if($run_insert === true) {
                            echo "Запись внесена";
                       } else {
                            echo "Что то произошло.Попробуйте снова";
                       }

                }
                //Direction to Home Page
           header('Location: http://localhost:8080/AdminPanel ');



?>