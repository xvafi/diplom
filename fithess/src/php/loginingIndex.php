<?php
 if (!empty($_SESSION['auth']) and empty($_POST['exit'])) {
    echo '<div class="profile" data-userId="'.$_SESSION['user']['id'].'">';
    echo '  <a href="./src/views/profile.php" class="profile-block">';
    echo '    <img src="../../resources/img/user.png" alt="user" class="profile-block-img">';
    echo '    <div class="profile-block-name">'. $_SESSION['user']['name'] .'</div>';
    echo '    <img src="../../resources/img/arrow.png" alt="arrow" class="profile-block-arrow">';
    echo '  </a>';
    echo '  <div class="profile-alert">';
    echo '    <img src="../../resources/img/bell.png" alt="bell" class="profile-alert-img">';
    echo '  </div>';
    echo '</div>';
}else{
}