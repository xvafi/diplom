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
  <link rel="stylesheet" href="../styles/treners.css">
  <title>Treners</title>
</head>
<body>
<?php
  require '../php/connect.php';
  require '../php/auth.php';
  require '../php/loginingPage.php';
  ?>  
  <div class="header">
    <div class="header-sidenav">
      <a href="../../index.php" class="header-sidenav-item">Главная</a>
      <a href="./date.php" class="header-sidenav-item">Расписание</a>
      <a href="./treners.php" class="header-sidenav-item sidenav-item-active">Тренеры</a>
      <a href="./profile.php" class="header-sidenav-item">Профиль</a>
      <!-- <div class="header-sidenav-item"> -->
      <?php
      require '../php/btn-login.php';
      ?>
      <!-- </div> -->
    </div>
  </div>
  <div class="treners-staff">
    <div class="treners-staff-block">
      <div class="treners-staff-title">Тренерский состав</div>
      <img class="treners-staff-img" src="../../resources/img/setting.png" alt="setting">
    </div>
    <div class="treners-staff-block block-search">
      <input class="treners-staff-search" type="text">
      <img class="treners-staff-search-img" src="../../resources/img/search.png" alt="search">
    </div>
  </div>
  <div class="filter">
    <div class="filter-block">
      <div class="filter-block-title">Фильтр</div>
      <div class="filter-category-block">
        <div class="filter-category-title">Профиль</div>
        <div class="filter-category-row filter-category">
          <div class="filter-category-item">Персональный тренер</div>
          <div class="filter-category-item">Тренер групповых программ</div>
        </div>
      </div>
      <div class="filter-category-block">
        <div class="filter-category-title">Пол тренера</div>
        <div class="filter-category-row filter-gender">
          <div class="filter-gender-item gender-item-active">Неважно</div>
          <div class="filter-gender-item">Мужской</div>
          <div class="filter-gender-item">Женский</div>
        </div>
      </div>
      <div class="filter-category-block">
        <div class="filter-category-title">Стаж</div>
        <div class="filter-category-row input-range-row">
          <span class="value" id="minValue">0</span>
          <div class="rangeslider">
            <input type="range" class="min input-ranges" id="rangeMin" min="0" max="37" value="10" />
            <input type="range" class="max input-ranges" id="rangeMax" min="0" max="37" value="30" />
            <div class="slider" id="slider"></div>
          </div>
          <span class="value" id="maxValue">37</span>
        </div>
      </div>
      <div class="filter-block-btn">Показать <span class="amount-treners">1000</span> тренеров</div>
    </div>
  </div>
  <div class="personal-treners">
    <div class="personal-treners-block">
      <div class="personal-treners-title">Тренеры</div>
      <img class="personal-treners-img" src="../../resources/img/arrow.png" alt="arrow">
    </div>
    <div class="personal-treners-content">
      <?php
        require '../php/pers-treners-limit.php';
      ?>
      <div class="treners-card-end" data-tren="personal">
        <img class="treners-card-end-img" src="../../resources/img/right-arrow.png" alt="user">
        <div class="treners-card-text">Смотреть все</div>
      </div>
    </div>
  </div>
  <div class="groups-treners">
    <div class="groups-treners-block">
      <div class="groups-treners-title">Тренеры групповых программ</div>
      <img class="groups-treners-img" src="../../resources/img/arrow.png" alt="arrow">
    </div>
    <div class="groups-treners-content">
      <?php
        require '../php/tren-treners-limit.php';
      ?>
      <div class="treners-card-end" data-tren="trener">
        <img class="treners-card-end-img" src="../../resources/img/right-arrow.png" alt="user">
        <div class="treners-card-text">Смотреть все</div>
      </div>

    </div>
  </div>
  
<div class="back-div"></div>
  <div class="window">
    <div class="window-block">
      <div class="window-login">
        <div class="window-login-title">Вход</div>
        <form class="window-login-form">
          <div class="form-control">
            <label for="tel">Телефон</label>
            <input type="tel" placeholder="Телефон">
          </div>
          <div class="form-control">
            <label for="password">Пароль</label>
            <input type="password" placeholder="Пароль">
          </div>
          <div class="form-control">
            <button class="login-form-btn">Войти</button>
            <div class="login-form-to-reg">Регистрация</div>
          </div>
        </form>
      </div>
      <div class="window-registration">
        <div class="window-registration-title">Регистрация</div>
        <form class="window-registration-form">
          <div class="form-control">
            <label for="text">Имя</label>
            <input type="text" placeholder="Имя">
          </div>
          <div class="form-control">
            <label for="tel">Телефон</label>
            <input type="tel" placeholder="Телефон">
          </div>
          <div class="form-control">
            <label for="email">Электронная почта</label>
            <input type="email" placeholder="Электронная почта">
          </div>
          <div class="form-control">
            <label for="password">Пароль</label>
            <input type="password" placeholder="Пароль">
          </div>
          <div class="form-control">
            <label for="password">Повторите пароль</label>
            <input type="password" placeholder="Повторите пароль">
          </div>
          <div class="form-control">
            <button class="registration-form-btn">Зарегистрироваться</button>
            <div class="registration-form-to-login">Войти</div>
          </div>
        </form>
      </div>
      <div class="window-img"></div>
    </div>
  </div>

  <div class="window-treners">
    <div class="window-treners-block">
      <div class="window-treners-ul">
        <div class="window-login-title">Персональный тренер</div>
        <div class="treners-filter-block">
          <div class="treners-staff-title">Тренерский состав</div>
          <img class="treners-filter-img" src="../../resources/img/setting.png" alt="setting">
        </div>
        <div class="treners-filter">
          <div class="filter-block">
            <div class="filter-block-title">Фильтр</div>
            <div class="filter-category-block">
              <div class="filter-category-title">Профиль</div>
              <div class="filter-category-row filter-category-win">
                <div class="filter-category-win-item">Персональный тренер</div>
                <div class="filter-category-win-item">Тренер групповых программ</div>
              </div>
            </div>
            <div class="filter-category-block">
              <div class="filter-category-title">Пол тренера</div>
              <div class="filter-category-row filter-gender-win">
                <div class="filter-gender-win-item gender-item-win-active">Неважно</div>
                <div class="filter-gender-win-item">Мужской</div>
                <div class="filter-gender-win-item">Женский</div>
              </div>
            </div>
            <div class="filter-category-block">
              <div class="filter-category-title">Стаж</div>
              <div class="filter-category-row input-range-row">
                <span class="value" id="minValue2">0</span>
                <div class="rangeslider">
                  <input type="range" class="min input-ranges" id="rangeMin2" min="0" max="37" value="10" />
                  <input type="range" class="max input-ranges" id="rangeMax2" min="0" max="37" value="30" />
                  <div class="slider" id="slider2"></div>
                </div>
                <span class="value" id="maxValue2">37</span>
              </div>
            </div>
            <div class="filter-block-btn-win">Показать <span class="amount-treners">1000</span> тренеров</div>
          </div>
        </div>
        <div class="treners-ul-content">
          <?php
          require '../php/all-treners-ul.php';
          ?>
        </div>
      </div>
      <div class="window-treners-img"></div>
    </div>
  </div>

  <script src="../scripts/common.js"></script>
  <script src="../scripts/scroll.js"></script>
  <script src="../scripts/filter.js"></script>
  <!-- <script src="../scripts/input-range.js"></script> -->
</body>
</html>