<?php
// Script 43: Extracting the keys from an associative array using the array_keys() function:

$assocArray = ['a' => 1, 'b' => 2, 'c' => 3];
echo "array <br>";
print_r($assocArray);
$keys = array_keys($assocArray);
echo "<br>keys <br>";
print_r($keys);
?>
