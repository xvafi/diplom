<?php
$avdv = date('Y-m-d 00:00:00');
if(!empty($_SESSION['auth']) and empty($_POST['exit'])){
  $user = $_SESSION['user']['id'];
  $sql3 = "SELECT * FROM program join recordProgram on programCode = programId join treners ON treners.trenersId = program.trenersCode join programCategory ON programCategory.programCatId = program.programCatCode where program.programTime >= '$avdv' and usersCode = '$user'";
  if($result = $link->query($sql3)){
    if($result->num_rows > 0){
      echo '<div class="my-programm-block">';
      foreach($result as $row){
        $time = date_format(date_create($row["programTime"]), 'H:i');
        $day = date_format(date_create($row["programTime"]), 'd.m.Y');
        echo '<div class="my-programm">';
        echo '<div class="info-programm first-info"><span>Название:</span> '.$row['programName'].'</div>';
        echo '<div class="info-programm second-info"><span>Тренер:</span> '.$row["trenersName"].' '.$row["trenersSurname"].'</div>';
        echo '<div class="info-programm three-info"><span>Дата:</span> '.$day.' '. $time.'</div>';
        echo '<div class="info-programm four-info"><span>Продолжительность: </span>'.$row['programPeriod'].' мин</div>';
        echo '<div class="info-programm five-info"><span>Категория: </span>'.$row['programCatName'].'</div>';
        echo '<div class="six-info"><img data-progid="'.$row['programId'].'" title="Удалить" class="del-program" src="../../../resources/img/close-light-purple.png"></div>';
        echo '</div>';
      }
        echo '</div>';
      
    }else{
      echo '<div class="user-program-note">Запишитесь на тренировку, чтобы их отслеживать</div>';
    }
    $result->free();
  } else{
      echo "Ошибка: " . $link->error;
  }
}