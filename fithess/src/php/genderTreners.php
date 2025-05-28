<?php
$sql4 = "SELECT * FROM genderTreners";
if($result = $link->query($sql4)){
  foreach($result as $row){
    echo '  <option class="option-gender" value="'.$row["genderTrenersId"].'">'.$row["genderTrenersValue"].'</option>';
  }
  $result->free();
} else{
    echo "Ошибка: " . $link->error;
}
