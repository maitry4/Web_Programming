<?php
// Script 46: Filling an array with a specific value using the array_fill() function:

$startIndex = 0;
$length = 5;
$value = 'hello';
$filledArray = array_fill($startIndex, $length, $value);
echo "filled array <br>";
print_r($filledArray);
?>
