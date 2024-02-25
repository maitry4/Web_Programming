<?php
// Script 51: Adding elements to an associative array using the array_push() function:

$assocArray = ['a' => 1, 'b' => 2];
echo "array <br>";
print_r($assocArray);
array_push($assocArray, 'c', 3);
echo "<br>added element <br>";
print_r($assocArray);
?>
