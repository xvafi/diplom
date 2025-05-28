<?php
$sql5 = "SELECT * FROM post";
if($result = $link->query($sql5)){
  foreach($result as $row){
    echo '  <option class="option-post" value="'.$row["postId"].'">'.$row["PostName"].'</option>';
  }
  $result->free();
} else{
    echo "Ошибка: " . $link->error;
}
