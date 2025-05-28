<?php
// SELECT program.programName, program.programTime, program.programPeriod, program.programCategory, program.programLevel, treners.trenersName, treners.trenersSurname
// FROM program join treners ON treners.trenersId = program.trenersCode
$avdv = date('Y-m-d 00:00:00');
$sql3 = "SELECT * FROM program join treners ON treners.trenersId = program.trenersCode join programCategory ON programCategory.programCatId = program.programCatCode where program.programTime >= '$avdv'";
if(!empty($_SESSION['auth']) and empty($_POST['exit'])){
  if($result = $link->query($sql3)){
    foreach($result as $row){
      $time = date_format(date_create($row["programTime"]), 'H:i');
      $day = date_format(date_create($row["programTime"]), 'd.m.Y');
      echo '<div class="programs-record-block" data-progid="'.$row["programId"].'">';
      echo '  <div class="programs-record-time-block" data-level="'.$row["programLevel"].'">';
      echo '    <div class="programs-record-time-start"  data-days="'.$day.'">'.$time.'</div>';
      echo '    <div class="programs-record-time-duration">'.$row["programPeriod"].' мин</div>';
      echo '  </div>';
      echo '  <div class="programs-record-title" data-category="'.$row["programCatName"].'">'.$row["programName"].'</div>';
      echo '  <div class="programs-record-trener-block">';
      echo '    <img src="../../resources/img/user.png" alt="" class="programs-record-trener-img">';
      echo '    <div class="programs-record-trener-name">'.$row["trenersName"].' '.$row["trenersSurname"].'</div>';
      echo '  </div>';
      echo '  <div class="programs-record-note">'.$row["programText"].'</div>';
      echo '  <div class="programs-record-btn">Записаться</div>';
      echo '</div>';
    }
    $result->free();
  } else{
      echo "Ошибка: " . $link->error;
  }
}else{
  if($result = $link->query($sql3)){
    foreach($result as $row){
      $time = date_format(date_create($row["programTime"]), 'H:i');
      $day = date_format(date_create($row["programTime"]), 'd.m.Y');
      echo '<div class="programs-record-block" data-progid="'.$row["programId"].'">';
      echo '  <div class="programs-record-time-block" data-level="'.$row["programLevel"].'">';
      echo '    <div class="programs-record-time-start"  data-days="'.$day.'">'.$time.'</div>';
      echo '    <div class="programs-record-time-duration">'.$row["programPeriod"].' мин</div>';
      echo '  </div>';
      echo '  <div class="programs-record-title" data-category="'.$row["programCatName"].'">'.$row["programName"].'</div>';
      echo '  <div class="programs-record-trener-block">';
      echo '    <img src="../../resources/img/user.png" alt="" class="programs-record-trener-img">';
      echo '    <div class="programs-record-trener-name">'.$row["trenersName"].' '.$row["trenersSurname"].'</div>';
      echo '  </div>';
      echo '  <div class="programs-record-note">'.$row["programText"].'</div>';
      echo '  <div class="programs-record-btn-reg">Записаться</div>';
      echo '</div>';
    }
    $result->free();
  } else{
      echo "Ошибка: " . $link->error;
  }
}
