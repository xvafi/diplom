<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/styles/profile-common.css">
  <link rel="stylesheet" href="./src/styles/common.css">
  <link rel="stylesheet" href="./src/styles/index.css">
  <link rel="stylesheet" href="./src/styles/slider.css">
  <title>Fitness</title>
</head>
<body>
  <?php
  require './src/php/connect.php';
  require './src/php/auth.php';
  require './src/php/loginingIndex.php';
  ?>
  <div class="header">
    <div class="header-sidenav">
      <a href="./index.php" class="header-sidenav-item sidenav-item-active">Главная</a>
      <a href="./src/views/date.php" class="header-sidenav-item">Расписание</a>
      <a href="./src/views/treners.php" class="header-sidenav-item">Тренеры</a>
      <a href="./src/views/profile.php" class="header-sidenav-item">Профиль</a>
      <!-- <div class="header-sidenav-item"> -->
      <?php
      require './src/php/btn-login.php';
      ?>
      <!-- </div> -->
    </div>
  </div>
  <div class="slider">
    <div class="slides">
      <div class="slide">
        <div class="slide-content color">
          <div class="slide-content-block">
            <div class="slide-content-title">Подарочные карты Fitness</div>
            <div class="slide-content-note">Радуй своих близких по-любому поводу</div>
            <div class="slide-content-btn btn-color">Купить карту</div>
          </div>
          <img src="./resources/img/gift-card.png" alt="gift-card">
        </div>
      </div>
      <div class="slide">
        <div class="slide-content color2">
          <div class="slide-content-block">
            <div class="slide-content-title">Видеотренировки Fitness</div>
            <div class="slide-content-note">15 нарпавлений, 100+ тренировок - найди то, что подходит тебе</div>
            <div class="slide-content-btn btn-color2">Узнать больше</div>
          </div>
          <img src="./resources/img/slider-img.png" alt="gift-card">
        </div>
      </div>
    </div> 
  </div>
  <div class="club-pass">
    <div class="club-pass-block">
      <img class="club-pass-img" src="./resources/img/qr-code.png" alt="qr-code">
      <div class="club-pass-note">Пропуск в клуб</div>
    </div>
  </div>
  <div class="tariff">
    <?php
    require './src/php/ulTariff.php';
    ?>
    </div>
  </div>
  <div class="support">
    <div class="support-title">Служба поддержки Fitness</div>
    <div class="support-btn">
      <div class="support-btn-title">Оставить сообщение</div>
      <img class="support-btn-img" src="./resources/img/arrow.png" alt="arrow">
    </div>
    <img class="support-img" src="./resources/img/support.png" alt="support">
  </div>
  <div class="treners">
    <a href="./src/views/treners.php" class="treners-block">
      <div class="treners-title">Тренеры</div>
      <img class="treners-img" src="./resources/img/arrow.png" alt="arrow">
    </a>
    <div class="treners-content">
      <?php
      require './src/php/treners-index.php'
      ?>
      <a href="./src/views/treners.php" class="treners-card-end">
        <img class="treners-card-end-img" src="./resources/img/right-arrow.png" alt="user">
        <div class="treners-card-text">Смотреть все</div>
      </a>
    </div>
  </div>
  <div class="programs">
    <div class="programs-block">
      <div class="programs-title">Групповые программы</div>
      <img class="programs-img" src="./resources/img/arrow.png" alt="arrow">
    </div>
    <div class="programs-content">
      <?php
      require './src/php/ulProgram.php'
      ?>
    </div>
  </div>
  <a href="./src/views/date.php" class="record-btn">Записаться</a>
  
  <div class="back-div"></div>
  <div class="window">
    <div class="window-block">
      <div class="window-login">
        <div class="window-login-title">Вход</div>
        <form method="post" class="window-login-form">
          <div class="form-control">
            <label for="phoneLogin">Телефон</label>
            <input name="phoneLogin" type="text" placeholder="Телефон">
          </div>
          <div class="form-control">
            <label for="passLogin">Пароль</label>
            <input name="passLogin" type="password" placeholder="Пароль">
          </div>
          <div class="form-control">
            <button type="submit" class="login-form-btn">Войти</button>
            <div class="login-form-to-reg">Регистрация</div>
          </div>
        </form>
      </div>
      <div class="window-registration">
        <div class="window-registration-title">Регистрация</div>
        <form method="post" onsubmit="return false" class="window-registration-form">
          <div class="form-control">
            <label for="nameReg">Имя</label>
            <input name="nameReg" class="inp-name-reg" type="text" placeholder="Имя">
          </div>
          <div class="form-control">
            <label for="phoneReg">Телефон</label>
            <input name="phoneReg" class="inp-phone-reg" type="tel" placeholder="Телефон">
          </div>
          <div class="form-control">
            <label for="emailReg">Электронная почта</label>
            <input name="emailReg" class="inp-email-reg" type="email" placeholder="Электронная почта">
          </div>
          <div class="form-control">
            <label for="passReg">Пароль</label>
            <input name="passReg" class="inp-pass-reg" type="password" placeholder="Пароль">
          </div>
          <div class="form-control">
            <label for="passReg2">Повторите пароль</label>
            <input name="passReg2" class="inp-pass2-reg" type="password" placeholder="Повторите пароль">
          </div>
          <div class="form-control">
            <button type="submit" class="registration-form-btn">Зарегистрироваться</button>
            <div class="registration-form-to-login">Войти</div>
          </div>
        </form>
      </div>
      <div class="window-img"></div>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

  <!-- <script src="./src/scripts/jquery-3.7.1.js"></script> -->
  <script src="./src/scripts/checkRegistrations.js"></script>
  <script src="./src/scripts/common.js"></script>
  <script src="./src/scripts/programLevel.js"></script>
  <script src="./src/scripts/slider.js"></script>
  <script src="./src/scripts/scroll.js"></script>
</body>
</html>