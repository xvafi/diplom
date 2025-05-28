<?php
$sql4 = "SELECT * FROM programCategory";
if($result = $link->query($sql4)){
  foreach($result as $row){
    echo '  <option class="option-program" value="'.$row["programCatId"].'">'.$row["programCatName"].'</option>';
  }
  $result->free();
} else{
    echo "Ошибка: " . $link->error;
}
