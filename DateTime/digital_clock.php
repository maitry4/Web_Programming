<?php
// Date time function digital clock

date_default_timezone_set('Asia/Kolkata'); // Set your timezone, e.g., 'Asia/Kolkata' or 'America/New_York'
$currentHour = date('h'); // Get current hour (12-hour format)
$currentMinute = date('i'); // Get current minute
$currentSecond = date('s'); // Get current second
echo "<table style='text-align:center; background-color:black;  padding:20px; font-size:20px;' cellpadding=2; cellspacing=5>
    <tr style='color:red;'>
    <td><button style='text-align:right; background-color: rgba(255, 0, 0, 0.3); padding-left:15px; color:red;font-size:30px;'disabled  >$currentHour</button></td>
    <td>:</td>
    <td><button style='text-align:right; background-color: rgba(255, 0, 0, 0.3); padding-left:15px; color:red;font-size:30px;'disabled  >$currentMinute</button></td>
    <td>:</td>
    <td><button style='text-align:right; background-color: rgba(255, 0, 0, 0.3); padding-left:15px; color:red;font-size:30px;'disabled  >$currentSecond</button></td>
    </tr>
    <tr style='color:white;'>
    <td>Hour</td>
    <td></td>
    <td>Minute</td>
    <td></td>
    <td>Second</td>
    </tr>
</table>";


?>

