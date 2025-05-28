<?php
$sql3 = "SELECT * FROM program join programCategory on programCatId = programCatCode limit 9";
if($result = $link->query($sql3)){
  foreach($result as $row){
    echo '<div class="programs-card">';
    echo '    <div class="programs-block-img">';
    echo '      <img class="programs-card-img" src="./resources/img/program.jpg" alt="program">';
    echo '    </div>';
    echo '    <div class="programs-card-title">'.$row["programName"].'</div>';
    echo '    <div class="programs-card-info">';
    echo '      <div class="programs-card-info-time">'.$row["programPeriod"].'</div>';
    echo '      <div class="programs-card-info-power" data-level="'.$row["programLevel"].'">';
    echo '        <img class="programs-card-power" src="./resources/img/thunder.png" alt="">';
    echo '        <img class="programs-card-power" src="./resources/img/thunder.png" alt="">';
    echo '        <img class="programs-card-power" src="./resources/img/thunder.png" alt="">';
    echo '      </div>';
    echo '      <div class="programs-card-info-category">'.$row["programCatName"].'</div>';
    echo '    </div>';
    echo '    <div class="programs-card-note">'.$row["programText"].'</div>';
    echo '  </div>';
  }
  $result->free();
} else{
    echo "Ошибка: " . $link->error;
}
