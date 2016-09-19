<html>
<form action="days.php" method='post'>
Date 1 : <input type="text" name="date_1" id="time-id"/>
  Date 2 : <input type="text" name="date_2" id="time-id"/>
<input type="submit" name="submit" value="submit">
</form>
</html>
<?php
$datetime1 = new DateTime($_POST['date_1']);

$datetime2 = new DateTime($_POST['date_2']);

getDifference($datetime1,$datetime2);

function getDifference($datetime1,$datetime2)
{
  $difference = $datetime1->diff($datetime2);

  echo 'Difference: ' . $difference->y . ' years, '
    . $difference->m . ' months, '
    . $difference->d . ' days';
}

?>
