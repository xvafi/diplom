<?php
if (!empty($_POST['passLogin']) and !empty($_POST['phoneLogin'])) {
    $phoneLogin = $_POST['phoneLogin'];
    $passLogin = $_POST['passLogin'];
    if(!empty($_POST)){
      $check_user = mysqli_query($link, "SELECT * FROM `users` WHERE `phone`='$phoneLogin' AND `pass`='$passLogin'");
      if(mysqli_num_rows($check_user)> 0){
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['auth'] = true;
        $_SESSION['user'] = [
          "id" => $user['usersId'],
          "name" => $user['usersName'],
          "phone" => $user['phone'],
          "email" => $user['email'],
          "role" => $user['role'],
        ];
      } 
      header("Location: http://fithess/index.php");
    }
  }