<?php
        
      
        //Connection with db
        $conn = mysqli_connect('localhost','root','','listOfRegisteredUsers');
        //by clicking button delete
        if(isset($_GET['del'])){
            echo $del_id = $_GET['del'];
            //works query-delete definite field with definite id
            $delete = "DELETE FROM users WHERE id = '$del_id' ";
            $run_delete = mysqli_query($conn, $delete);
            //if record was deleted there  will be a message
            if($run_delete === true) {
                  echo '<script>alert("Запись была удалена!")</script>';
            } else {
                  echo '<script>alert("Что то пошло не так попробуйте позже!")</script>';
            }
        }
        //Direction to the list of users
        header('Location: http://localhost:8080/AdminPanel/admin/listOfUsers.php');
  ?>