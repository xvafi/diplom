<?php
require './connect.php';
if(!empty($_POST['userId']) and !empty($_POST['programId'])){
  $userId = $_POST['userId'];
  $programId = $_POST['programId'];
  echo $userId;
  echo $programId;
  $sql = "DELETE FROM `recordProgram` WHERE usersCode = '$userId' and programCode = '$programId'";
  mysqli_query($link, $sql);
  header("Location: http://fithess/src/views/profile.php");
}