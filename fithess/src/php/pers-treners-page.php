<?php
$sql = "SELECT * FROM `treners` join `post` on `treners`.`postCode` = `post`.`postId` where `postCode`=1;";
if($result = $link->query($sql)){
    foreach($result as $row){
      echo '<div class="personal-treners-card" data-sex="'.$row["gender"].'">';
      echo '  <div class="personal-treners-block-img">';
      echo '    <img class="personal-treners-card-img" src="../../resources/img/user.png" alt="user">';
      echo '    <div class="personal-treners-card-experience">Стаж <span class="personal-treners-card-years">'.$row["experience"].' лет</span></div>';
      echo '  </div>';
      echo '  <div class="personal-treners-card-name">'. $row["trenersName"] . ' ' .$row["trenersSurname"] .'</div>';
      echo '  <div class="personal-treners-card-profile">'.$row["PostName"].'</div>';
      echo '</div>';
    }
    $result->free();
} else{
    echo "Ошибка: " . $link->error;
}
$link->close();
?>