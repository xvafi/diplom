<?php
require './connect.php';
if(!empty($_POST["programId"]) and !empty($_POST["usersId"])){
  $programId = $_POST['programId'];
  $usersId = $_POST['usersId'];
  $query = "INSERT INTO `recordProgram`(`recordProgramId`, `programCode`, `usersCode`) VALUES (null,'$programId','$usersId')";
  mysqli_query($link, $query);
  header("Location: http://fithess/src/views/date.php");
}