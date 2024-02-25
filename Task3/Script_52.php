<?php
// Script 52: Merging two associative arrays using the array_merge() function and displaying the combined result:

$assocArray1 = ['a' => 1, 'b' => 2];
echo "array1 <br>";
print_r($assocArray1);
$assocArray2 = ['c' => 3, 'd' => 4];
echo "<br>array2 <br>";
print_r($assocArray2);
$mergedArray = array_merge($assocArray1, $assocArray2);
echo "<br>merged <br>";
print_r($mergedArray);
?>
