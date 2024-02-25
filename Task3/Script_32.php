<?php
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

echo "array1:<br>";
print_r($array1);
echo "<br>array2:<br>";
print_r($array2);

$mergedArray = array_merge($array1, $array2);
echo "<br>merged array:<br>";
print_r($mergedArray);
?>
