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
  <link rel="stylesheet" href="../styles/date.css">
  <title>Раписание</title>
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
      <a href="./date.php" class="header-sidenav-item sidenav-item-active">Расписание</ф>
      <a href="./treners.php" class="header-sidenav-item">Тренеры</a>
      <a href="./profile.php" class="header-sidenav-item">Профиль</a>
      <!-- <div class="header-sidenav-item"> -->
      <?php
      require '../php/btn-login.php';
      ?>
      <!-- </div> -->
    </div>
  </div>
  <div class="datetime">
    <div class="datetime-block">
      <div class="datetime-title">Расписание тренировок</div>
      <div class="datetime-content">
      </div>
      <div class="datetime-programs-content">
        <?php
        require '../php/ulProgramDate.php';
        require '../php/sucRecordProg.php';
        ?>
      </div>
    </div>
  </div>

  <div class="back-div"></div>
  <div class="window-program">
    <div class="window-program-block">
      <div class="programs-card-date">
        <div class="programs-card-title program-date"></div>
        <div class="programs-block-img">
          <img class="programs-card-img" src="../../resources/img/program.jpg" alt="program">
        </div>
        <div class="programs-card-category-block">
          <div class="programs-card-info-category"></div>
          <div class="programs-card-title"></div>
        </div>
        <div class="programs-card-note">FN DLSFNLKSDJF DSFLK ASDLF
          sdf;lkasd'kjfklsdajflksadf;kjasdfk;jHSK;FKjhf;kjwE
          erk;fjgirejg erg regjergjergj ergrejgkerg erglkerjgekrjg reglkjerkgj kergergjkerjg ergkrejgerjg ergjekrjgkerj regkjerkgjekrjg re
        </div>
        <div class="programs-card-info">
          <div class="programs-card-info-day"></div>
          <div class="programs-card-info-time"></div>
          <div class="programs-card-info-power" data-level="">
            <img class="programs-card-power" src="../../resources/img/thunder.png" alt="">
            <img class="programs-card-power" src="../../resources/img/thunder.png" alt="">
            <img class="programs-card-power" src="../../resources/img/thunder.png" alt="">
          </div>
        </div>
        <div class="programs-card-trener-block">
          <img src="../../resources/img/user.png" alt="" class="programs-record-trener-img">
          <div class="programs-card-trener-name"></div>
        </div>
        <div class="programs-card-btn">Записаться</div>
      </div>
      <div class="window-program-img"></div>
    </div>
  </div>
  <form action="../php/recordProgram.php" method="POST" class="record-program">
    <input type="text" name="programId" class="text" id="programId">
    <input type="text" name="usersId" class="text" id="usersId">
  </form>
  <script src="../scripts/common.js"></script>
  <script src="../scripts/calendar.js"></script>
  <script src="../scripts/sucRecordProg.js"></script>
</body>
</html>