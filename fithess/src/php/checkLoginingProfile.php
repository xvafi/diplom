<?php
 if (!empty($_SESSION['auth']) and empty($_POST['exit'])) {
}else{
  echo '<div class="check-login">';
  echo '<div class="check-login-block">';
  echo '  <div class="check-login-title">Войдите или зарегистрируйтесь</div>';
  echo '</div>';
  echo '</div>';
}