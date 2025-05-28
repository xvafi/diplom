<?php
session_start();
require './connect.php';
echo $_POST['nameReg'];
echo $_POST['phoneReg'];
echo $_POST['passReg'];
echo $_POST['emailReg'];
if (!empty($_POST['nameReg']) and !empty($_POST['phoneReg']) and !empty($_POST['emailReg']) and !empty($_POST['passReg'])) {
    $nameReg = $_POST['nameReg'];
    $phoneReg = $_POST['phoneReg'];
    $passReg = $_POST['passReg'];
    $emailReg = $_POST['emailReg'];

    $query2 = "INSERT INTO `users` (`usersId`, `usersName`, `phone`, `email`, `pass`, `role`, `fitnessCode`) VALUES (NULL, '$nameReg', '$phoneReg', '$emailReg', '$passReg', 'users', 1)";
    mysqli_query($link, $query2);
    // $query3 = "SELECT * FROM `users` WHERE `tel`='$telreg' AND `fio`='$fioreg'";
    // if($result = $link->query($query3)){
        // foreach($result as $row){
            // echo $row['UsersId'];
            // $query4 = "INSERT INTO `allUsers` (`allUsersId`, `PerCode`, `UsCode`) VALUES (NULL, NULL, " .$row['UsersId']. ")";
            // mysqli_query($link, $query4);
        // }
    // }
    $check_user = mysqli_query($link, "SELECT * FROM `users` WHERE `phone`='$phoneReg' AND `pass`='$passReg'");
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
}else {
}