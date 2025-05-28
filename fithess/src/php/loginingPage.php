<?php
 if (!empty($_SESSION['auth'])
//   and empty($_POST['exit'])
) {
    echo '<div class="profile" data-userId="'.$_SESSION['user']['id'].'">';
    echo '  <a href="./profile.php" class="profile-block">';
    echo '    <img src="../../resources/img/user.png" alt="user" class="profile-block-img">';
    echo '    <div class="profile-block-name">'. $_SESSION['user']['name'] .'</div>';
    echo '    <img src="../../resources/img/arrow.png" alt="arrow" class="profile-block-arrow">';
    echo '  </a>';
    echo '  <div class="profile-settings">';
    echo '    <img src="../../resources/img/bell.png" alt="settings" class="profile-settings-img">';
    echo '  </div>';
    echo '</div>';
}else{

}