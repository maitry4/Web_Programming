<?php
// Script 55: Retrieving the first and last keys of an array using the array_key_first() and array_key_last() functions:

$array = ['a' => 1, 'b' => 2, 'c' => 3];
echo "array <br>";
print_r($array);
$firstKey = array_key_first($array);
$lastKey = array_key_last($array);
echo "<br>First Key: $firstKey, Last Key: $lastKey";
?>
