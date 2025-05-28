<?php
$sql = "SELECT * FROM treners join genderTreners on genderTrenersId = genderCode where postCode=1 limit 7";
if($result = $link->query($sql)){
    foreach($result as $row){
      echo '<div class="treners-card">';
      echo '        <div class="treners-block-img" data-sex="'.$row["genderTrenersValue"].'">';
      echo '          <img class="treners-card-img" src="./resources/img/user.png" alt="user">';
      echo '        </div>';
      echo '        <div class="treners-card-name">'. $row["trenersName"] . ' ' .$row["trenersSurname"] .'</div>';
      echo '      </div>';
    }
    $result->free();
} else{
    echo "Ошибка: " . $link->error;
}