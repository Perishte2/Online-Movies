<?php


        //Connection to db
        $mysql = new mysqli('localhost','root','','listOfRegisteredUsers');


?>


<!DOCTYPE html>
        <html lang="en">
                <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="http://localhost:8080/AdminPanel/css/style.css">
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
                                        <li><a href="http://localhost:8080/AdminPanel/Validation/logout.php">Выход</a></li>
                                    
                                </ul>
                                        </li>
                                </ul>
                         </nav>
                         <!--Form for sorting-->
                         <div class="sort">
                                <form action="" method="GET" style="display:flex; justify-content:center;margin-top:70px;">
                                        <select name="sort_alphabet" >
                                                <option value="">--Выберите сортировку </option>
                                                <option value="a-z" <?php if(isset($_GET['sort_alphabet']) && $_GET['sort_alphabet'] == "a-z"){echo "selected";}?>>A-Z (По возрастанию)</option>
                                                <option value="z-a" <?php if(isset($_GET['sort_alphabet']) && $_GET['sort_alphabet'] == "a-z"){echo "selected";}?>>Z-A (По убыванию)</option>
                                        </select>   
                                        <button type="submit">Sort</button>
                                </form>
                        </div>
                        <!--list of users-->
                        <div class="list" style="display:flex; justify-content:center;">
                        
                                <table>
                                        <tr>
                                                <th>Номер</th>
                                                <th>Имя</th>
                                                <th>Фамилия</th>
                                                <th>Дата рождения</th>
                                                <th>Пол</th>
                                                <th>Логин</th>
                                                <th>Пароль</th>
                                            
                                        </tr>
                        <?php
                        //Connection to db
                                $conn = mysqli_connect('localhost','root','','listOfRegisteredUsers');
                                //getting datas from db
                                $select = "SELECT * FROM `users` LIMIT 0,5";
                                //sorting
                                $sort_option="";
                                 //putting a condition for sorting from a to z and vice versa
                                if(isset($_GET['sort_alphabet']))
                                             {
                                        if($_GET['sort_alphabet'] == "a-z")
                                            {
                                                $sort_option="ASC";
                                            }
                                        elseif($_GET['sort_alphabet'] == "z-a")
                                             {
                                                 $sort_option = "DESC";
                                             }
                                    }
                                //Query-getting datas by sorting the field name which depends from variable sort_option
                                $query="SELECT * FROM `users` ORDER BY name  $sort_option";
                                //the number of displayed records of db
                                $count = 4;
                                $run = mysqli_query($conn, $select);
                                $query_run=mysqli_query($conn, $query);
                                
                                {
                                        //Showing all datas
                                while($row_user = mysqli_fetch_array($run)) {
                            

                        
                                $id = $row_user['id'];
                                $name = $row_user['name'];
                                $surname = $row_user['surname'];
                                $birthday = $row_user['birthday'];
                                $enum = $row_user['enum'];
                                $login = $row_user['login'];
                                $password = $row_user['password'];

                                }
                            
                        ?>
                    
                        
                        <?php } ?>
                        <?php
                                $results_per_page = 4;
                                //total quantity of records
                                $number_of_results = mysqli_num_rows($run);
                                //total quantity of pages
                                $number_of_pages = ceil($number_of_results/$results_per_page);
                                //to find out on what page is user
                                if(!isset($_GET['page'])) {
                                         $page = 1;
                                } else {
                                        $page = $_GET['page'];
                                }
                                    

                               $this_page_first_result = ($page-1)*$results_per_page;

                                //select all datas from db where to show the number of page
                              $sql = "SELECT * FROM users LIMIT "  . $this_page_first_result . ',' .$results_per_page;
                              $result = mysqli_query($conn, $sql );

                              if (mysqli_num_rows($query_run)>0)
                                {
                                    
                                    
                                //while($row_user = mysqli_fetch_array($run))
                                //show datas from db
                              foreach($query_run as $row) {
                                    
                                
                            ?>
                            <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['surname']; ?></td> 
                                    <td><?php echo $row['birthday']; ?></td> 
                                    <td><?php echo $row['enum']; ?></td> 
                                    <td><?php echo $row['login']; ?></td> 
                                    <td><?php echo $row['password']; ?></td>
                            
                            </tr>
                            
                            <?php
                            }
                        
                            
                        }
                        ?>
                        
                        </table>
                    
                    
                    </div>
                    
                    <button style="margin-left:700px;margin-top:50px;margin-bottom:80px;"><a href="http://localhost:8080/AdminPanel/admin/listOfUsers.php">Перейти к списку пользователей</a></button>
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