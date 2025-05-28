<?php
$sql2 = "SELECT * FROM treners where postCode = 2";
if($result = $link->query($sql2)){
  foreach($result as $row){
    echo '  <option class="option-treners" value="'.$row["trenersId"].'">'.$row["trenersName"].' '.$row["trenersSurname"].'</option>';
  }
  $result->free();
} else{
    echo "Ошибка: " . $link->error;
}

