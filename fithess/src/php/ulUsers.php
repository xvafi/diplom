<?php
$sql = 'SELECT * FROM `users` JOIN buyTariff on UsersCode = usersId join tariff on tariffId = buyTariffCode';
if($result = $link->query($sql)){
  foreach($result as $row){
    echo '<div class="content-users-card">';
    echo '  <div class="users-card-name">'.$row["usersName"].'</div>';
    echo '  <div class="users-card-phone">'.$row["phone"].'</div>';
    echo '  <div class="users-card-tarrif">'.$row["tariffName"].'</div>';
    echo '  <div class="users-card-dateToday">'.$row["buyTariffDateToday"].'</div>';
    echo '  <div class="users-card-dateNext">'.$row["buyTariffDateNext"].'</div>';
    echo '  <div class="users-card-timing">Осталось время подписки: <span class="users-card-timing-span"></span></div>';
    echo '</div>';
  }
  $result->free();
} else{
}
