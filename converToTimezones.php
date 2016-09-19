<html>
<form action="timezone.php" method='post'>
<input type="text" name="time" id="time-id"/>
<input type="submit" name="submit" value="submit">
</form>
</html>
<?php
  $time= $_POST['time'];
  $timezones=array('Central US'=>'America/Chicago','Pacific US'=>'America/Los_Angeles', 'Hawaii US'=>'America/Adak', 'Hawaii no DST US'=>'Pacific/Honolulu');
  getTimeByZones($time,$timezones);

  function getTimeByZones($time,$timezones=array())
  {
    foreach($timezones as $area => $timezone) {
      date_default_timezone_set($timezone);
      echo '<li>' . $area . ':' . $time . '</li>';
    }
    echo 'UK:' .  $time;
  }

?>
