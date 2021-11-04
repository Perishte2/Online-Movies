<!DOCTYPE html>
        <html lang="en">
                <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="http://localhost:8080/AdminPanel/css/style.css">
                        <title>Редактировать пользователя</title>
                </head>
                <body>  <!--Menu-->
                        <nav class="dws-menu">
                                <ul>
                                        <div class="header_logo" style="margin-top:70px; margin-right:100px;font-family: 'Cuprum', sans-serif;
                                        font-family: 'Open Sans', sans-serif;"><a href="index.html">BestMovies</a></div>
                                        <li><a href="http://localhost:8080/AdminPanel/index.html" style="margin-top:40px;" ><img src="../images/home.png" style="margin-top:10px; margin-right:10px;"></i>Онлайн Кинотеатр</a></li>
                                        <li><a href="http://localhost:8080/AdminPanel/contact.html" style="margin-top:40px;"><img src="../images/contacts.png" style="margin-top:10px; margin-right:10px;"></i>Контактная информация</a></li>
                                        <li><a href="#" style="margin-top:40px;"><img src="../images/user.png" style="margin-top:10px; margin-right:10px;"></i>Авторизация</a>
                                <ul>
                                        <li><a href="./Validation/Registration.php">Регистрация</a></li>
                                        <li><a href="./Validation/Authorization.php">Авторизация</a></li>
                                        <li><a href="http://localhost:8080/AdminPanel/Validation/logout.php">Выход</a></li>
                                        
                                </ul>
                                        </li>
                                </ul>
                        </nav>
                        <!--Edit Form -->
                        <div class="edit-form">
                                <div class="content">
                                
                            
                                        <?php
                                        
                                                $conn = mysqli_connect('localhost','root','','listOfRegisteredUsers');
                                                
                                                if(isset($_GET['edit'])) {
                                                        $edit_id = $_GET['edit'];
                                                        $select = "SELECT * FROM `users`  WHERE `id`='$edit_id' ";
                                                        $run = mysqli_query($conn, $select);
                                                        $row_user = mysqli_fetch_array($run);

                                                        $name = $row_user['name'];
                                                        $surname = $row_user['surname'];
                                                        $birthday = $row_user['birthday'];
                                                        $enum = $row_user['enum'];
                                                        $login = $row_user['login'];
                                                        $password = $row_user['password'];
                                                    
                                                    
                                                }


                                        ?>
                                        <form action="" method="post">
                                                <h2>Редактировать пользователя</h2>
                                                        <h4>Имя</h4>
                                                                <input type="text" name="name" value="<?php  echo $name; ?>">
                                                        <h4>Фамилия</h4>
                                                                <input type="text" name="surname" id="surname" value="<?php  echo $surname; ?>">
                                                        <h4>Дата рождения</h4>
                                                                <input type="date" name="birthday" value="<?php  echo $birthday; ?>">
                                                        <h4>Выберите пол:</h4>
                                                                <input type="radio" id="choice1"
                                                                name="enum" value="<?php  echo $enum; ?>">
                                                                <label for="choice1">Мужской</label>
                                                                <input type="radio" id="choice2"
                                                                name="enum" value="<?php  echo $enum; ?>">
                                                                <label for="choice2">Женский</label>
                                                        <h4>Логин</h4>
                                                                <input type="text" name="login" id="login" value="<?php  echo $login; ?>">
                                                        <h4>Пароль</h4>
                                                                <input type="password" name="password" id="password" value="<?php  echo $password; ?>">

                                                                <br><br>
                                                                <button name="edit-btn" type="submit" >Редактировать пользователя</button>
                                                                <br><br>
                                                                <button><a href="http://localhost:8080/AdminPanel/admin/listOfUsers.php">Перейти к списку пользователей</a></button>
                                        </form>

                                        <?php
                                               //Connection with db
                                                $conn = mysqli_connect('localhost','root','','listOfRegisteredUsers');
                                                //by clicking button edit we wil get datas from a form 
                                                if(isset($_POST['edit-btn'])) {
                                                        $name = $_POST['name'];
                                                        $surname = $_POST['surname'];
                                                        $birthday = $_POST['birthday'];
                                                        $enum = $_POST['enum'];
                                                        $login = $_POST['login'];
                                                        $password = $_POST['password'];

                                                        //set the query to change or edit all datas with definite id
                                                        $update = "UPDATE users SET name = '$name', surname = '$surname', birthday = '$birthday' ,
                                                        enum  = '$enum', login = '$login', password = '$password' WHERE id = '$edit_id' ";

                                                        $run_update = mysqli_query($conn, $update);
                                                        if($run_update === true) {
                                                                echo '<script>alert("Запись была изменена")</script>';
                                                        } else {
                                                                 echo "Что то произошло.Попробуйте снова";
                                                        }
                                                }
                                                //Direction to the list of users
                                                header('Location: http://localhost:8080/AdminPanel/adminpanel/listOfUsers.php');
                                                $conn->close();

                                       ?>
                                    </div>
                        </div>
                        <!--Footer-->
                        <footer>
                                <div class="footer-content">
                                    <a href="https://web.telegram.org/k/"><img src="../images/telegram.jpg" alt="telegram"/></a>
                                    <a href="https://twitter.com/BestMovies1212"><img src="../images/twitter.jpg" alt="twitter"/></a>
                                    <a href="https://www.instagram.com/bsetmovies011/"><img src="../images/instagram2.jpg" alt="instagram"/></a>
                                    <a href="https://www.facebook.com/profile.php?id=100074661126610"><img src="../images/facebook.jpg" alt="facebook"/></a>
                                </div>
                        </footer>
             </body>
    </html>