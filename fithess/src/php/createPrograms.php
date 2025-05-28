<?php
require './connect.php';
if(!empty($_POST['programName']) 
and !empty($_POST['programDate']) 
and !empty($_POST['programTime']) 
and !empty($_POST['programPeriod']) 
and !empty($_POST['treners']) 
and !empty($_POST['programCategory']) 
and !empty($_POST['level']) 
and !empty($_POST['programText'])){
  $programName = $_POST['programName'];
  $programDate = $_POST['programDate'];
  $programTime = $_POST['programTime'];
  $programPeriod = $_POST['programPeriod'];
  $treners = $_POST['treners'];
  $programCategory = $_POST['programCategory'];
  $level = $_POST['level'];
  $programText = $_POST['programText'];

  $fullTime = $programDate. ' '. $programTime;
  echo $fullTime;
  $query2 = "INSERT INTO `program`(`programId`, `programName`, `programTime`, `programPeriod`, `trenersCode`, `programLevel`, `programCatCode`, `programText`) 
  VALUES (null,'$programName','$fullTime','$programPeriod','$treners','$level','$programCategory','$programText')";
  mysqli_query($link, $query2);
header("Location: http://fithess/src/views/admin.php");
}