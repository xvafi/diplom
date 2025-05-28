<?php
require './connect.php';

if(!empty($_POST['userId']) and !empty($_POST['numTarif']) and !empty($_POST['dateToday']) and !empty($_POST['dateNext'])){
  $userId = $_POST['userId'];
  $numTar = $_POST['numTarif'];
  $numTod = $_POST['dateToday'];
  $numNext = $_POST['dateNext'];
  $query = "INSERT INTO `buyTariff`(`buyTariffId`, `buyTariffDateToday`, `buyTariffDateNext`, `buyTariffCode`, `UsersCode`) VALUES (null,'$numTod','$numNext','$numTar','$userId')";
  mysqli_query($link, $query);
  header("Location: http://fithess/");
}
?>