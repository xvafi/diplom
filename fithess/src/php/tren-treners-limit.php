<?php
$sql = "SELECT * FROM `treners` join `post` on `treners`.`postCode` = `post`.`postId` join genderTreners on genderTrenersId = genderCode where `postCode`=2 limit 7;";
if($result = $link->query($sql)){
    foreach($result as $row){
      echo '<div class="groups-treners-card" data-sex="'.$row["genderTrenersValue"].'">';
      echo '  <div class="groups-treners-block-img">';
      echo '    <img class="groups-treners-card-img" src="../../resources/img/user.png" alt="user">';
      echo '  </div>';
      echo '  <div class="groups-treners-card-name">'. $row["trenersName"] . ' ' .$row["trenersSurname"] .'</div>';
      echo '  <div class="personal-treners-card-profile">'.$row["PostName"].'</div>';
      echo '</div>';
    }
    $result->free();
} else{
    echo "Ошибка: " . $link->error;
}
?>