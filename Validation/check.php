<?php   
        //I get values of global variables from Registration Form with method POST
        //I also check for empty spaces
        $id = filter_var(trim($_POST['id']),
        FILTER_SANITIZE_STRING);
        $name = filter_var(trim($_POST['name']),
        FILTER_SANITIZE_STRING);
        $surname = filter_var(trim($_POST['surname']),
        FILTER_SANITIZE_STRING);
        $birthday= filter_var(trim($_POST['birthday']),
        FILTER_SANITIZE_STRING);
        $login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
        $password = filter_var(trim($_POST['password']),
        FILTER_SANITIZE_STRING);
        $enum = filter_var(trim($_POST['enum']),
        FILTER_SANITIZE_STRING);

         //We put condition if the length of the name will be less than 3 and more than 30 then we will get an error
        if(mb_strlen($name) < 3 || mb_strlen($name) > 30) {
                echo "Недопустимая длина имени.Введите повторно корректное имя";
                //stop and exit
                exit();
        //We put condition if the length of the birthday will be more than 10 then we will get an error
        } else if (mb_strlen($birthday) > 10 ) {
                echo "Недопустимая длина даты рождения";
                //stop and exit
                exit();
        //We put condition if the length of the login will be less than 5 and more than 30 then we will get an error
        } else if (mb_strlen($login) < 5 || mb_strlen($login) > 30 ) {
                echo "Недопустимая длина логина";
                //stop and exit
                exit();
        //We put condition if the length of the password will be less than 6 and more than 8 then we will get an error
        } else if (mb_strlen($password) < 6 || mb_strlen($password) > 8) {
                echo "Нeдопустимая длина пароля (Введите от 6 до 8 символов)";
                exit();
        }


        //Hashing of the password
        $password = md5($password.'sfgjyrolmna12345');
        //COnnection to database in Mysql PHPMyAdmin
        $mysql = new mysqli('localhost','root','','listOfRegisteredUsers');
                //We set a query to select all data from database where login from db will be equel to value of login which user sets in Registration Form
                $sql = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' LIMIT 1");
                //If logins will be equel than user will get an error
                if(mysqli_num_rows($sql) > 0)
                {
                        echo "Пользователь с таким логином уже существует.Попробуйте ввести другой логин";
                        exit;
                }

                //Add inserted datas in Registration Form into database users 
                $registr=$mysql -> query("INSERT INTO `users` (`id`,`name`,`surname`,`birthday`,`enum`,`login`,`password`)
                VALUES(NULL,'$name', '$surname', '$birthday', '$enum', '$login', '$password')");
                //If registratiom is successfully than there is a message
                if($registr === true) {
                    echo "Вы успешно зарегистрировались!";
                }
                //closing connection with db
        $mysql -> close();
                $path = "http://localhost:8080/AdminPanel/Validation/Authorization.php";
                //Direction to Authorization file
                header("Location: $path");





?>