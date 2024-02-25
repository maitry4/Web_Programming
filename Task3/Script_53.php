<?php
// Script 53: Removing duplicate values from an associative array using the array_unique() function:

$assocArray = ['a' => 1, 'b' => 2, 'c' => 2];
echo "array1 <br>";
print_r($assocArray);
$uniqueArray = array_unique($assocArray);
echo "<br>unique <br>";
print_r($uniqueArray);
?>
