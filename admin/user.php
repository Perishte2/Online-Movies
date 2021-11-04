<!DOCTYPE html>
        <html lang="en">
                <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="http://localhost:8080/AdminPanel/css/style.css">
                        <title>Просмотр пользователя</title>
                </head>
                <body>
                        <!--Menu-->
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
                        <!--User form with all got information about definite user-->
                        <div class="user-form2" style="margin-top:100px; margin-left:100px;">
                                <div class="content">
                                
                                        <?php
                                        //Connection to db
                                                $conn = mysqli_connect('localhost','root','','listOfRegisteredUsers');

                                                //by clicking button view of user admin can get an info and all datas from the form and db
                                                if(isset($_GET['user'])) {
                                                        $user_id = $_GET['user'];
                                                        //getting datas from db by definite id
                                                        $view = "SELECT * FROM `users`  WHERE `id`='$user_id' ";
                                                        $run = mysqli_query($conn, $view);
                                                        //Associative array
                                                        $row_user = mysqli_fetch_array($run);
                                                         //getting datas from db
                                                        $name = $row_user['name'];
                                                        $surname = $row_user['surname'];
                                                        $birthday = $row_user['birthday'];
                                                        $enum = $row_user['enum'];
                                                        $login = $row_user['login'];
                                                        $password = $row_user['password'];
                                                        $view = "SELECT * FROM users WHERE id = '$user_id' ";
                                                        $run_view = mysqli_query($conn,$view);
                                            

                                            
                                                    }


                                            ?>
                                            <!--Displaying all datas from db-->
                                            <img src="http://localhost:8080/AdminPanel/images/users.png"  style="width:220px; height:220px;margin-left:130px; margin-top:50px;border-radius:15px;" alt="user">
                                            <h2>Имя:</h2>
                                                    <h3><?php echo $name; ?></h3>
                                            <h2>Фамилия:</h2>
                                                    <h3><?php echo $surname; ?></h3>
                                            <h2>Дата Рождения:</h2>
                                                    <h3><?php echo $birthday; ?></h3>
                                            <h2>Пол:</h2>
                                                    <h3><?php echo $enum; ?></h3>
                                            <h2>Логин:</h2>
                                                    <h3><?php echo $login; ?></h3>
                                            <h2>Пароль:</h2>
                                                    <h3><?php echo $password; ?></h3>
                                                    <button class="view"><a href="http://localhost:8080/AdminPanel/admin/listOfUsers.php">Перейти к списку пользователей</a></button>
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