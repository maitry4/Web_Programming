<?php
// Script 42: Finding the difference between two arrays using the array_diff() function:

$array1 = [1, 2, 3, 4, 5];
echo "array1: <br>";
print_r($array1);
$array2 = [3, 4, 5, 6, 7];
echo "<br>array2: <br>";
print_r($array2);
$difference = array_diff($array1, $array2);
echo "<br>array difference: <br>";
print_r($difference);
?>
