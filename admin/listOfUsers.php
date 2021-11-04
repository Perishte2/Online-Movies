<?php
      

         //Connection with db
        $conn = mysqli_connect('localhost','root','','listOfRegisteredUsers');

        //Pagination
        $num_per_page=05;

        
        if(isset($_GET["page"]))
            {
                 $page = $_GET["page"];
            }
        else
            {
                 $page=1;
            }

        $start_from=($page-1)*05;
        //Query-select all datas from db and set start page and quantity of page
        $sql="select * from users limit $start_from, $num_per_page";
        $rs_result = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
        <html lang="en">
                <head>
                         <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="../css/style.css">
                        <title>Список зарегистрированных пользователей</title>
                        <!--Style of table-->
                                 <style>
                                        .list {
                                            display:flex;
                                            width:100%;
                                            margin-left:100px;
                                            margin-top:100px;
                                            }

                                        table{
                                             margin:0;
                                            
                                             }

                                        th,td {
                                            padding:10px;
                                            border:1px solid grey;
                                            }
                                        th {
                                            background-color:grey;
                                            color:white;
                                            }
                                        td {
                                            background-color:golden;
                                            }
                             </style>
                        
                </head>

                <body>
                        <!--Menu-->
                        <nav class="dws-menu">
                                <ul>
                                        <li><a href="http://localhost:8080/AdminPanel/index.html" style="margin-top:40px;" ><img src="http://localhost:8080/AdminPanel/images/home.png" style="margin-top:10px; margin-right:10px;"></i>Онлайн Кинотеатр</a></li>
                                        
                                        <li><a href="#" style="margin-top:40px;"><img src="http://localhost:8080/AdminPanel/images/contacts.png" style="margin-top:10px; margin-right:10px;"></i>Контактная информация</a></li>
                                        <li><a href="#" style="margin-top:40px;"><img src="http://localhost:8080/AdminPanel/images/user.png" style="margin-top:10px; margin-right:10px;"></i>Авторизация</a>
                                <ul>
                                        <li><a href="http://localhost:8080/AdminPanel/Validation/Registration.php">Регистрация</a></li>
                                        <li><a href="http://localhost:8080/AdminPanel/Validation/Authorization.php">Авторизация</a></li>
                                        <li><a href="http://localhost:8080/AdminPanel/admin/create.html">Создание учетной записи пользователя</a></li>
                                        <li><a href="http://localhost:8080/AdminPanel/Validation/logout.php">Выход</a></li>
                                    
                                </ul>
                                         </li>
                                </ul>
                     </nav>
                    
                    <button style="display:flex;margin-left:700px;margin-top:50px; background-color:lightblue; 
                    margin-bottom:80px;"><a href="http://localhost:8080/AdminPanel/admin/sortingPage.php" style="color:black;">Перейти к сортировке данных</a></button>
                    <div class="list">
                            <!--table list of users-->
                                <table>
                                        <tr>
                                                <th>Номер</th>
                                                <th>Имя</th>
                                                <th>Фамилия</th>
                                                <th>Дата рождения</th>
                                                <th>Пол</th>
                                                <th>Логин</th>
                                                <th>Пароль</th>
                                                <th>Пользователь</th>
                                                <th>Редактирование</th>
                                                <th>Удаление</th>
                                        </tr>
                                <?php
                                        //Connection with db
                                        $conn = mysqli_connect('localhost','root','','listOfRegisteredUsers');

                                        
                                        //select abd pagination data

                                        //$select = "SELECT * FROM users LIMIT 0,5";
                                        //we set the limit for pagination
                                        $select ='select * from users limit 0,8';
                                    
                                        
                                        //$count = 4;


                                        $run = mysqli_query($conn, $select);

                                        //$query_run=mysqli_query($conn, $query);
                                        
                                        $row_user = mysqli_fetch_array($run);
                                        //we get datas from db users and show them in a table
                                        while($row_user = mysqli_fetch_array($run)) {
                                                //condition for pagination
                                            while($row_user = mysqli_fetch_array($rs_result)) {
                                                    //get all datas db
                                        $id = $row_user['id'];
                                        $name = $row_user['name'];
                                        $surname = $row_user['surname'];
                                        $birthday = $row_user['birthday'];
                                        $enum = $row_user['enum'];
                                        $login = $row_user['login'];
                                        $password = $row_user['password'];
                                
                                ?>
                                     <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo $surname; ?></td>
                                            <td><?php echo $birthday; ?></td>
                                            <td><?php echo $enum; ?></td>
                                            <td><?php echo $login; ?></td>
                                            <td><?php echo $password; ?></td>
                                            <td><a href="http://localhost:8080/AdminPanel/admin/user.php?user=<?php echo $id; ?>">Посмотреть детали</a></td>
                                            <td><a href="http://localhost:8080/AdminPanel/admin/edit_user.php?edit=<?php echo $id; ?>">Редактировать пользователя</a></td>
                                            <td><a href="http://localhost:8080/AdminPanel/admin/delete.php?del=<?php echo $id; ?>">Удалить пользователя</a></td>
                                     </tr>
                                <?php }
                                     }
                                
                                ?>
                                </table>
                                </div>

                        </div>
                        <div class="pagin" style="margin-left:550px;">

                                <?php
                                       //get all datas from db
                                        $sql = "select * from users";
                                        $rs_result = mysqli_query($conn,$sql);
                                        //Total count of records in db
                                        $total_records = mysqli_num_rows($rs_result);
                                        //Quantity of pages in total
                                        $total_pages = ceil($total_records/$num_per_page); 
                                        //showing page number in a link 
                                        for($i=1; $i<=$total_pages; $i++)
                                                {
                                                        echo "<button style='background-color:transparent; width:40px; border-radius:25px; font-size:28px;margin-left:100px;margin-top:50px;'>
                                                        <a  href='http://localhost:8080/AdminPanel/admin/listOfUsers.php?page=".$i."'>".$i."</a></button>";
                                                }

                                ?>
                        
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