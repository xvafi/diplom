<?php
session_start();

 if (!empty($_SESSION['auth']) 
//  and !empty($_POST['exit'])
) {
  if($_SESSION['user']['role'] === 'admin'){
    echo'<a class="header-sidenav-item" href="http://fithess/src/views/admin.php">';
    echo $_SESSION['user']['role'];
    echo'</a>';
  }
}else{
  echo '<div class="header-sidenav-item btn-login"> ';
  echo '      <img class="btn-login-img" src="http://fithess/resources/img/enter.png" alt="enter" />';
  echo '    </div>';
}