<!DOCTYPE html>
        <html lang="en">
                <!--Settings of site-->
                <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width= , initial-scale=1.0">
                        <link rel="stylesheet" href="http://localhost:8080/AdminPanel/css/style.css">
                        <title>Авторизация</title>
                </head>
                <body>
                        <!--Menu-->
                        <nav class="dws-menu">
                                <ul>
                                        <li><a href="http://localhost:8080/AdminPanel/index.html" style="margin-top:40px;" ><img src="http://localhost:8080/AdminPanel/images/home.png" style="margin-top:10px; margin-right:10px;"></i>Онлайн кинотеатр</a></li>
                                        
                                        <li><a href="#" style="margin-top:40px;"><img src="http://localhost:8080/AdminPanel/images/contacts.png" style="margin-top:10px; margin-right:10px;"></i>Контактная информация</a></li>
                                        <li><a href="#" style="margin-top:40px;"><img src="http://localhost:8080/AdminPanel/images/user.png" style="margin-top:10px; margin-right:10px;"></i>Авторизация</a>
                                <ul>
                                        <li><a href="http://localhost:8080/AdminPanel/Validation/Registration.php">Регистрация</a></li>
                                        <li><a href="http://localhost:8080/AdminPanel/Validation/Authorization.php">Авторизация</a></li>
                                        <li><a href="http://localhost:8080/AdminPanel/Validation/logout.php">Выход</a></li>
                                        
                                    
                                </ul>
                                       </li>
                                </ul>
                        </nav>
                        <!--Authorization Form-->
                        <div class="authorization">
                            
                            
                                <div class="container2">
                                        <form action="./auth.php" method="post">
                                                <h1>Форма Авторизации</h1>
                                                        <h3>Логин:</h3>
                                                                <input type="text" name="login" id="login"
                                                                placeholder="Введите логин">
                                                        <h3>Пароль:</h3>
                                                                <input type="password" name="password" id="password"
                                                                placeholder="Введите пароль">
                                                                <br><br>
                                                                <button type="submit">Авторизоваться</button>

                                        </form>
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