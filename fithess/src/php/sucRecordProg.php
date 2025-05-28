<?php
if(!empty($_SESSION['auth']) and empty($_POST['exit'])){
  $avdv = date('Y-m-d 00:00:00');
  $user = $_SESSION['user']['id'];
  $sql3 = "SELECT * FROM program join recordProgram on programCode = programId join treners ON treners.trenersId = program.trenersCode join programCategory ON programCategory.programCatId = program.programCatCode where program.programTime >= '$avdv' and usersCode = '$user'";
  if($result = $link->query($sql3)){
    foreach($result as $row){
      echo '<div class="programs-record-block-info" data-progid="'.$row["programId"].'" data-userid="'.$row["usersCode"].'"></div>';
    }
    $result->free();
  } else{
      echo "Ошибка: " . $link->error;
  }
}