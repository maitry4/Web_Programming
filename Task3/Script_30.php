<?php
$array = [1, 2, 2, 3, 4, 4, 5];
echo "<b>Before:</b><br>";
print_r($array);

$uniqueArray = array_unique($array);
echo "<br><b>After:</b><br>";
print_r($uniqueArray);
?>
