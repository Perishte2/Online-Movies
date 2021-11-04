<!DOCTYPE html>
        <html lang="en">
            <!--Settings of site.Connection to css file and fonts-->
                <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="http://localhost:8080/AdminPanel/css/style.css">
                        <title>Registration Form</title>
                </head>
                <body>
                        <!---Menu--->
                        <nav class="dws-menu">
                                <ul>
                                            <!--Links to other files and sections-->
                                            <li><a href="http://localhost:8080/AdminPanel/index.html" style="margin-top:40px;" ><img src="http://localhost:8080/AdminPanel/images/home.png" style="margin-top:10px; margin-right:10px;"></i>Онлайн Кинотеатр</a></li>
                                            
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
                         <!--Registration Form--->
                        <div class="registration">
                                
                                <div class="container">
                                
                                            <form action="./check.php" method="post">
                                                        <h1>Форма Регистрации</h1>
                                                                <h3>Имя:</h3>
                                                                   <input type="text" name="name" id="name"
                                                                   placeholder="Введите Имя">
                                                                <h3> Фамилия:</h3>
                                                                    <input type="text" name="surname" id="surname"
                                                                    placeholder="Введите фамилию">
                                                                <h3>Дата рождения:</h3>
                                                                    <input type="date" name="birthday" id="birthday"
                                                                    placeholder="Введите дату рождения">
                                                                <h3>Выберите пол:</h3>
                                                                    <input type="radio" id="choice1"
                                                                    name="enum" value="Мужской">
                                                                    <label for="choice1">Мужской</label>
                                                                    <input type="radio" id="choice2"
                                                                    name="enum" value="Женский">
                                                                    <label for="choice2">Женский</label>
                                                                <h3>Логин:</h3>
                                                                    <input type="text" name="login" id="login" 
                                                                    placeholder="Введите логин">
                                                                <h3>Пароль:</h3>
                                                                    <input type="password" name="password" id="password"
                                                                    placeholder="Введите пароль">
                                                                   <br><br>
                                                                    <button type="submit">Зарегистрироваться </button>

                                            </form>
                                 </div>
                                
                                
                        </div>
                        <!--Footer-->
                        <footer>
                                <div class="footer-content">
                                    <!--Links to social networks-->
                                    <a href="https://web.telegram.org/k/"><img src="../images/telegram.jpg" alt="telegram"/></a>
                                    <a href="https://twitter.com/BestMovies1212"><img src="../images/twitter.jpg" alt="twitter"/></a>
                                    <a href="https://www.instagram.com/bsetmovies011/"><img src="../images/instagram2.jpg" alt="instagram"/></a>
                                    <a href="https://www.facebook.com/profile.php?id=100074661126610"><img src="../images/facebook.jpg" alt="facebook"/></a>
                                </div>
                        </footer>
                </body>
</html>