<?php
// Script 41: Finding the intersection of two arrays using the array_intersect() function:

$array1 = [1, 2, 3, 4, 5];
echo "array1: <br>";
print_r($array1);
$array2 = [3, 4, 5, 6, 7];
echo "<br>array2: <br>";
print_r($array2);
$intersection = array_intersect($array1, $array2);
echo "<br>array intersection: <br>";
print_r($intersection);
?>
