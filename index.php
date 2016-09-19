<html>
<form action="index.php" method='post' enctype = 'multipart/form-data'>
<input type="file" name="upload" id="file-id"/>
<input type="submit" name="submit" value="submit">
</form>
</html>
<?php

$file = $_FILES['upload'];
getFileExtension($file);

function getFileExtension($file) {
  $ext = substr(strtolower(strrchr($file['name'], '.')), 1);
  echo "Extension : " . $ext;
  $pathInfo = pathinfo($file['name']);
  echo "</br>Using PHP function Extension : " . $pathInfo['extension'];
}
?>
