<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/profile-common.css">
  <link rel="stylesheet" href="../styles/common.css">
  <link rel="stylesheet" href="../styles/profile.css">
  <title>Профиль</title>
</head>
<body>
  <?php
  require '../php/connect.php';
  require '../php/auth.php';
  require '../php/loginingProfile.php';
  ?>
  <div class="header">
    <div class="header-sidenav">
      <a href="../../index.php" class="header-sidenav-item">Главная</a>
      <a href="./date.php" class="header-sidenav-item">Расписание</a>
      <a href="./treners.php" class="header-sidenav-item">Тренеры</a>
      <a href="./profile.php" class="header-sidenav-item sidenav-item-active">Профиль</a>
      <!-- <div class="header-sidenav-item"> -->
      <?php
      require '../php/btn-login.php';
      ?>
      <!-- </div> -->
    </div>
  </div>
  <?php
    require '../php/checkLoginingProfile.php';
  ?>
  <div class="tariff">
  <?php
    require '../php/ulTariff.php';
    ?>
    
    <!-- <div class="tariff-block"> -->
      <!-- <div class="tariff-title">Выбери свой тариф</div> -->
      <!-- <img class="tariff-img" src="../../resources/img/arrow.png" alt="arrow"> -->
    <!-- </div> -->
    <!-- <div class="tariff-cards"> -->
      <!-- <div class="tariff-cards-block cards-color"> -->
        <!-- <div class="tariff-cards-title">Light</div> -->
        <!-- <div class="tariff-cards-price">1 700 ₽ <span class="tariff-cards-price-month">/мес</span></div> -->
        <!-- <div class="tariff-cards-note">Безлимитный доступ в клуб</div> -->
      <!-- </div> -->
      <!-- <div class="tariff-cards-block cards-color2"> -->
        <!-- <div class="tariff-cards-title">Smart</div> -->
        <!-- <div class="tariff-cards-price">2 400 ₽ <span class="tariff-cards-price-month">/мес</span></div> -->
        <!-- <div class="tariff-cards-note">Доступ в клуб и все групповые программы</div> -->
      <!-- </div> -->
      <!-- <div class="tariff-cards-block cards-color3"> -->
        <!-- <div class="tariff-cards-block-title"> -->
          <!-- <div class="tariff-cards-title">Infinity</div> -->
          <!-- <div class="tariff-cards-price">2 800 ₽ <span class="tariff-cards-price-month">/мес</span></div> -->
        <!-- </div> -->
        <!-- <div class="tariff-cards-block-title"> -->
          <!-- <div class="tariff-cards-note">Безлимитный доступ во все клубы сети, любые групповые программы и шикарная спа-зона</div> -->
          <!-- <img class="tariff-cards-img" src="../../resources/img/all.png" alt="all"> -->
        <!-- </div> -->
      <!-- </div> -->
    <!-- </div> -->
  </div>
  <div class="settings">
    <div class="settings-block">
      <div class="settings-item-block my-training">
        <div class="settings-item-content">
          <img src="../../resources/img/dumbbell.png" alt="dumbbell" class="settings-item-content-img">
          <div class="settings-item-content-title">Мои тренировки</div>
        </div>
        <img src="../../resources/img/arrow.png" alt="arrow" class="settings-item-img">
      </div>
      
      <div class="settings-item-block">
        <div class="settings-item-content">
          <img src="../../resources/img/payment-method.png" alt="payment-method" class="settings-item-content-img">
          <div class="settings-item-content-title">История платежей</div>
        </div>
        <img src="../../resources/img/arrow.png" alt="arrow" class="settings-item-img">
      </div>

      <div class="settings-item-block">
        <div class="settings-item-content">
          <img src="../../resources/img/gift-card-icons.png" alt="gift-card" class="settings-item-content-img">
          <div class="settings-item-content-title">Подарочные карты</div>
        </div>
        <img src="../../resources/img/arrow.png" alt="arrow" class="settings-item-img">
      </div>

      <div class="settings-item-block">
        <div class="settings-item-content">
          <img src="../../resources/img/question-mark.png" alt="question-mark" class="settings-item-content-img">
          <div class="settings-item-content-title">Дополнительно</div>
        </div>
        <img src="../../resources/img/arrow.png" alt="arrow" class="settings-item-img">
      </div>

      <div class="settings-item-block">
        <div class="settings-item-content">
          <img src="../../resources/img/chat.png" alt="chat" class="settings-item-content-img">
          <div class="settings-item-content-title">Служба поддержки</div>
        </div>
        <img src="../../resources/img/arrow.png" alt="arrow" class="settings-item-img">
      </div>
    </div>
  </div>

  <div class="back-div"></div>
  <div class="window-account">
    <div class="window-account-block">
      <div class="window-profile">
        <div class="window-profile-title">Личные данные</div>
        <div class="window-profile-block">
          <div class="window-profile-info">
            <label>Имя</label>
            <div>Александр</div>
          </div>
          <div class="window-profile-info">
            <label>Телефон</label>
            <div>+79998887777</div>
          </div>
          <div class="window-profile-info">
            <label>Email</label>
            <div>qwerqwer@mail.ru</div>
          </div>
        </div>
        <form class="form-profile" method="post" action="../php/exit.php">
          <input type="hidden" name="exit" value="0" class="dispnone" id="exit">
          <input type="checkbox" name="exit" value="1" class="dispnone" id="exit2" checked>
          <button type="submit" class="window-profile-settings btn-exit">
            <img src="../../resources/img/logout.png" alt="logout">
            <div>Выйти</div>
          </button>
          <div class="window-profile-settings btn-delete">
            <img src="../../resources/img/delete.png" alt="delete">
            <div>Удалить аккаунт</div>
          </div>
        </form>
      </div>
      <div class="window-account-img"></div>
    </div>
  </div>
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
            <button class="login-form-btn">Войти</button>
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
  
  <div class="window-training">
    <div class="window-block-training">
      <div class="window-training-title">Мои тренировки</div>
      <?php
        require '../php/userProgram.php';
      ?>
      <div class="user-program-card">
        <div class="user-program-name"></div>
        <div class="user-program-name"></div>
      </div>
      <div class="window-img-training"></div>
    </div>
  </div>
  <form action="../php/userDelProgram.php" method="POST" class="del-user-record-program">
    <input type="text" class="text" name="userId" id="userId">
    <input type="text" class="text" name="programId" id="programId">
  </form>
  <script src="../scripts/common.js"></script>

</body>
</html>