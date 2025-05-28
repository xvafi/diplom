<?php
$sql = "SELECT * FROM `treners` join `post` on `treners`.`postCode` = `post`.`postId` join genderTreners on genderTrenersId = genderCode;";
if($result = $link->query($sql)){
    foreach($result as $row){
      echo '<div class="personal-treners-card-all" data-sex="'.$row["genderTrenersValue"].'">';
      echo '  <div class="personal-treners-block-img">';
      echo '    <img class="personal-treners-card-img" src="../../resources/img/user.png" alt="user">';
      echo '    <div class="personal-treners-card-experience">Стаж <span class="personal-treners-card-years">'.$row["experience"].'</span> <span class="personal-treners-card-yearsword">лет</span></div>';
      echo '  </div>';
      echo '  <div class="personal-treners-card-name">'. $row["trenersName"] . ' ' .$row["trenersSurname"] .'</div>';
      echo '  <div class="personal-treners-card-profile">'.$row["PostName"].'</div>';
      echo '</div>';
    }
    $result->free();
} else{
    echo "Ошибка: " . $link->error;
}