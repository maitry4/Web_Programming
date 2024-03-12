<?php
date_default_timezone_set('Asia/Kolkata'); // Set your timezone, e.g., 'Asia/Kolkata' or 'America/New_York'
$currentHour = date('h'); // Get current hour (12-hour format)
$currentMinute = date('i'); // Get current minute
$currentSecond = date('s'); // Get current second
echo "<table style='text-align:center; background-color:black;  padding:20px; font-size:30px;' cellpadding=2; cellspacing=5>
    <tr style='color:red;'>
    <td style='text-align:right; background-color: rgba(255, 0, 0, 0.2);'>$currentHour</td>
    <td style='text-align:right; background-color: rgba(255, 0, 0, 0.2);'>$currentMinute</td>
    <td style='text-align:right; background-color: rgba(255, 0, 0, 0.2);'>$currentSecond</td>
    </tr>
    <tr style='color:white;'>
    <td>Hour</td>
    <td>Minute</td>
    <td>Second</td>
    </tr>
</table>";

?>