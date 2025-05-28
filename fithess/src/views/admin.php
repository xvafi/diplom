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
  <link rel="stylesheet" href="../styles/admin.css">
  <title>admin</title>
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
      <a href="./treners.php" class="header-sidenav-item">Тренеры</a>
      <a href="./profile.php" class="header-sidenav-item">Профиль</a>
      <!-- <a href="./admin.php" class="header-sidenav-item"> -->
      <div class="header-sidenav-item sidenav-item-active" style="font-size: 1em">
          <?php
      require '../php/btn-login.php';
      ?>
      </div>
      <!-- </a> -->
    </div>
  </div>
  <div class="accordion">
    <div class="accordion-tab active">
      <div class="accordion-tab-link">
        <div class="accordion-tab-link-title">Создать программу </div>
        <img src="../../resources/img/arrow.png" class="accordion-tab-link-img">
      </div>
      <div class="accordion-tab-content">
        <!-- onsubmit="return false" -->
        <form 
        action="../php/createPrograms.php" method="POST"
         class="content">
          <div class="form-control-program">
            <label for="programName">Название программы</label>
            <input name="programName" id="programName" type="text" required placeholder="Название программы">
          </div>
          <div class="content-time">
            <div class="form-control-program">
              <label for="programDate">Дата программы</label>
              <input name="programDate" id="programDate" type="date" required placeholder="Дата программы">
            </div>
            <div class="form-control-program">
              <label for="programTime">Время начала программы</label>
              <input name="programTime" id="programTime" type="text" required placeholder="Время начала программы">
            </div>
            <div class="form-control-program">
              <label for="programPeriod">Время продолжительности программы</label>
              <input name="programPeriod" id="programPeriod" type="number" required placeholder="Время продолжительности программы">
            </div>
          </div>
          <div class="content-time">
            <div class="form-control-program">
              <label for="">Выберите тренера</label>
              <select class="select-program" id="treners" required name="treners">
                <option class="option-treners" >Не выбрано</option>
                <?php
                require '../php/optionTreners.php';
                ?>
              </select>
            </div>
            <div class="form-control-program">
              <label for="">Выберите категорию</label>
              <select class="select-program" required id="programCategory" name="programCategory">
                <option class="option-program" >Не выбрано</option>
                <?php
                require '../php/optionProgramCategory.php';
                ?>
              </select>
            </div>
          </div>
          <div class="form-control-program form-control-radio">
            <label for="">Выберите сложность</label>
            <div class="form-radio">
              <input type="radio" required name="level" value="1" > 
              <div class="form-radio-text">1</div> 
            </div>
            <div class="form-radio">
              <input type="radio" required name="level" value="2" > 
              <div class="form-radio-text">2</div> 
            </div>
            <div class="form-radio">
              <input type="radio" required name="level" value="3" > 
              <div class="form-radio-text">3</div> 
            </div>
          </div>
          <div class="form-control-program">
            <label for="">Описание</label>
            <textarea name="programText" id="programText" class="program-textarea" required></textarea>
          </div>
          <button tybe="submit" class="form-control-btn">Создать программу</button>
        </form>
      </div>
      <div class="accordion-tab">
    </div>
      <div class="accordion-tab-link">
        <div class="accordion-tab-link-title">Зарегистрировать тренера</div>
        <img src="../../resources/img/arrow.png" class="accordion-tab-link-img">
      </div>
      <div class="accordion-tab-content">
        <form action="../php/registerTreners.php" method="POST"  class="content">
          <div class="form-control-program">
            <label for="nameTrener">Имя</label>
            <input name="nameTrener" id="nameTrener" type="text" required placeholder="Имя тренера">
          </div>
          <div class="form-control-program">
            <label for="surnameTrener">Фамилия</label>
            <input name="surnameTrener" id="surnameTrener" type="text" required placeholder="Фамилия тренера">
          </div>
          <div class="content-time">
            <div class="form-control-program">
              <label for="experienceTrener">Опыт работы</label>
              <input name="experienceTrener" id="experienceTrener" type="number" required placeholder="Опыт работы">
            </div>
            <div class="form-control-program">
              <label for="">Выберите пол</label>
              <select class="select-gender" required id="GenderTrener" name="genderTrener">
                <option class="option-gender" >Не выбрано</option>
                <?php
                require '../php/genderTreners.php';
                ?>
              </select>
            </div>
            <div class="form-control-program">
              <label for="">Выберите специальность</label>
              <select class="select-post" required id="postTrener" name="postTrener">
                <option class="option-post" >Не выбрано</option>
                <?php
                require '../php/postTreners.php';
                ?>
              </select>
            </div>
          </div>
          <button tybe="submit" class="form-control-btn">Зарегистрировать</button>
        </form>
      </div>
      <div class="accordion-tab">
      <div class="accordion-tab-link">
        <div class="accordion-tab-link-title">Список пользователей с подпиской</div>
        <img src="../../resources/img/arrow.png" class="accordion-tab-link-img">
      </div>
      <div class="accordion-tab-content">
        <div class="tab-content-ul">
        <!-- <div class="content-users-card"> -->
          <!-- <div class="users-card-name">Name</div> -->
          <!-- <div class="users-card-phone">Phone</div> -->
          <!-- <div class="users-card-tarrif">Tarrif</div> -->
          <!-- <div class="users-card-dateToday">dateToday</div> -->
          <!-- <div class="users-card-dateNext">dateNext</div> -->
        <!-- </div> -->
         <?php
          require '../php/ulUsers.php';
         ?>
        </div>

      </div>
    </div>
  </div>
  <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
  <script src="../scripts/checkCreateProgram.js"></script>
  <script src="../scripts/accordion.js"></script>
  <script src="../scripts/timeUsers.js"></script>
</body>
</html>