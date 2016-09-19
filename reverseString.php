<html>
<form action="strrev.php" method='post'>
String : <input type="text" name="str"/>
<input type="submit" name="submit" value="submit">
</form>
</html>
<?php

if(isset($_POST['str'])) {
  getReverseStringPhpFunction($_POST['str']);
  getReverseStringUserFunction($_POST['str']);
}


function getReverseStringPhpFunction($postString) {
  $strarr = str_split($postString);
  $tmpArr = array();
  foreach($strarr as $val) {
    if(!in_array($val, $tmpArr)) {
      array_push($tmpArr, $val);
    }
  }
  echo "String reverse with removal of duplicate letters : ";
  for($i = count($tmpArr) - 1; $i >= 0; $i--) {
    echo $tmpArr[$i];
  }
  echo '</br>';
}

function getReverseStringUserFunction($postString) {

      echo "String reverse by function : " . strrev($postString) . '</br>';
      echo "String reverse user defined function : ";
      $arr = str_split($_POST['str']);
      for($i = count($arr) - 1; $i >= 0; $i--) {
        echo $arr[$i];
      }

    echo '</br>';
}

?>
