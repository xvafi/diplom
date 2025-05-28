<?php
if(!empty($_SESSION['auth']) and empty($_POST['exit'])){
  // echo $_SESSION['user']['name'];
  $userName = $_SESSION['user']['name'];
  // echo $userName;
  $sql4 = "SELECT * FROM `buyTariff` JOIN users on usersId = usersCode JOIN tariff on tariffId = buyTariffCode where usersName = '$userName'";
  if($result = $link->query($sql4)){
    if($result->num_rows > 0 ){
      foreach($result as $row){
        echo '<div class="tariff-block">';
        echo '    <div class="tariff-title">Ваш тариф</div>';
        echo '    <img class="tariff-img" src="http://fithess/resources/img/arrow.png" alt="arrow">';
        echo '  </div>';
        if($row["buyTariffCode"] == 1){
          echo '<div class="tariff-cards-block-buy cards-color-buy">';
          echo '  <div class="tariff-cards-title">'.$row["tariffName"].'</div>';
          echo '  <div class="tariff-cards-price">'.$row["tariffPrice"].' ₽ <span class="tariff-cards-price-month">/мес</span></div>';
          echo '  <div class="tariff-cards-note">'.$row["tariffNote"].'</div>';
          echo '</div>';
        }
        if($row["buyTariffCode"] == 2){
          echo '<div class="tariff-cards-block-buy cards-color2-buy">';
          echo '  <div class="tariff-cards-title">'.$row["tariffName"].'</div>';
          echo '  <div class="tariff-cards-price">'.$row["tariffPrice"].' ₽ <span class="tariff-cards-price-month">/мес</span></div>';
          echo '  <div class="tariff-cards-note">'.$row["tariffNote"].'</div>';
          echo '</div>';
        }
        if($row["buyTariffCode"] == 3){
          echo '<div class="tariff-cards-block-buy cards-color3-buy">';
          echo '  <div class="tariff-cards-block-title">';
          echo '    <div class="tariff-cards-title">'.$row["tariffName"].'</div>';
          echo '    <div class="tariff-cards-price">'.$row["tariffPrice"].' ₽ <span class="tariff-cards-price-month">/мес</span></div>';
          echo '  </div>';
          echo '  <div class="tariff-cards-block-title">';
          echo '    <div class="tariff-cards-note">'.$row["tariffNote"].'</div>';
          echo '    <img class="tariff-cards-img" src="http://fithess/resources/img/all.png" alt="all">';
          echo '  </div>';
          echo '</div>';
        }
      }
    }else{
      echo '<div class="tariff-block">';
      echo '    <div class="tariff-title">Выбери свой тариф</div>';
      echo '    <img class="tariff-img" src="http://fithess/resources/img/arrow.png" alt="arrow">';
      echo '  </div>';
      echo '<div class="tariff-cards">';
      echo '<div class="tariff-cards-block cards-color">';
      echo '  <div class="tariff-cards-title">Light</div>';
      echo '  <div class="tariff-cards-price">1 700 ₽ <span class="tariff-cards-price-month">/мес</span></div>';
      echo '  <div class="tariff-cards-note">Безлимитный доступ в клуб</div>';
      echo '</div>';
      echo '<div class="tariff-cards-block cards-color2">';
      echo '  <div class="tariff-cards-title">Smart</div>';
      echo '  <div class="tariff-cards-price">2 400 ₽ <span class="tariff-cards-price-month">/мес</span></div>';
      echo '  <div class="tariff-cards-note">Доступ в клуб и все групповые программы</div>';
      echo '</div>';
      echo '<div class="tariff-cards-block cards-color3">';
      echo '  <div class="tariff-cards-block-title">';
      echo '    <div class="tariff-cards-title">Infinity</div>';
      echo '    <div class="tariff-cards-price">2 800 ₽ <span class="tariff-cards-price-month">/мес</span></div>';
      echo '  </div>';
      echo '  <div class="tariff-cards-block-title">';
      echo '    <div class="tariff-cards-note">Безлимитный доступ во все клубы сети, любые групповые программы и шикарная спа-зона</div>';
      echo '    <img class="tariff-cards-img" src="http://fithess/resources/img/all.png" alt="all">';
      echo '  </div>';
      echo '</div>';
      echo '</div>';
    }
  }
  $result->free();
}else{
  echo '<div class="tariff-block">';
  echo '    <div class="tariff-title">Выбери свой тариф</div>';
  echo '    <img class="tariff-img" src="http://fithess/resources/img/arrow.png" alt="arrow">';
  echo '  </div>';
  echo '<div class="tariff-cards">';
  echo '<div class="tariff-cards-block-no-reg cards-color">';
  echo '  <div class="tariff-cards-title">Light</div>';
  echo '  <div class="tariff-cards-price">1 700 ₽ <span class="tariff-cards-price-month">/мес</span></div>';
  echo '  <div class="tariff-cards-note">Безлимитный доступ в клуб</div>';
  echo '</div>';
  echo '<div class="tariff-cards-block-no-reg cards-color2">';
  echo '  <div class="tariff-cards-title">Smart</div>';
  echo '  <div class="tariff-cards-price">2 400 ₽ <span class="tariff-cards-price-month">/мес</span></div>';
  echo '  <div class="tariff-cards-note">Доступ в клуб и все групповые программы</div>';
  echo '</div>';
  echo '<div class="tariff-cards-block-no-reg cards-color3">';
  echo '  <div class="tariff-cards-block-title">';
  echo '    <div class="tariff-cards-title">Infinity</div>';
  echo '    <div class="tariff-cards-price">2 800 ₽ <span class="tariff-cards-price-month">/мес</span></div>';
  echo '  </div>';
  echo '  <div class="tariff-cards-block-title">';
  echo '    <div class="tariff-cards-note">Безлимитный доступ во все клубы сети, любые групповые программы и шикарная спа-зона</div>';
  echo '    <img class="tariff-cards-img" src="http://fithess/resources/img/all.png" alt="all">';
  echo '  </div>';
  echo '</div>';
}
