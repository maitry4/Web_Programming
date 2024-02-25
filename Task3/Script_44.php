<?php
// Script 44: Extracting the values from an associative array using the array_values() function:

$assocArray = ['a' => 1, 'b' => 2, 'c' => 3];
echo "array <br>";
print_r($assocArray);
$values = array_values($assocArray);
echo "<br>values <br>";
print_r($values);
?>
