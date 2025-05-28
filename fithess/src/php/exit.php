<?php
session_start();
if(!empty($_POST)){
  if($_POST['exit'] === '1'){
    if(isset($_SESSION['auth'])){
      session_destroy();
      header("Location: http://fithess/index.php");
    }else{
      header("Location: http://fithess/index.php");
    }
  }
}