<?php
// Script 38: Using the array_shift() function to remove an element from the beginning of an array and the array_unshift() function to add elements at the beginning:


$array = [1, 2, 3];
echo "unshift: <br>";
array_unshift($array, 0);
print_r($array);
echo "\n";
$removedElement = array_shift($array);
echo "<br><br>shift:";
echo "<br>Removed element from the beginning: $removedElement <br>";
print_r($array);
?>
