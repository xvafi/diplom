<?php
require './connect.php';
if(!empty($_POST['nameTrener']) 
and !empty($_POST['surnameTrener']) 
and !empty($_POST['experienceTrener']) 
and !empty($_POST['genderTrener']) 
and !empty($_POST['postTrener'])){
  $nameTrener = $_POST['nameTrener'];
  $surnameTrener = $_POST['surnameTrener'];
  $experienceTrener = $_POST['experienceTrener'];
  $postTrener = $_POST['postTrener'];
  $genderTrener = $_POST['genderTrener'];
  echo $nameTrener.' | ';
  echo $surnameTrener.' | ';
  echo $experienceTrener.' | ';
  echo $postTrener.' | ';
  echo $genderTrener.' | ';
  $query2 = "INSERT INTO `treners`(`trenersId`, `trenersName`, `trenersSurname`, `experience`, `postCode`, `fitnessCode`, `genderCode`) 
  VALUES (null,'$nameTrener','$surnameTrener','$experienceTrener','$postTrener',1,'$genderTrener')";
  mysqli_query($link, $query2);
header("Location: http://fithess/src/views/admin.php");
}