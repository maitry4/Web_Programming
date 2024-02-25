<?php
// Script 37: Using the array_push() function to add elements to an array and the array_pop() function to remove elements from the end:

$array = [1, 2, 3];
print_r($array);
array_push($array, 4, 5);

echo "<br> added elements:<br>";
print_r($array);
echo "\n";
$removedElement = array_pop($array);

echo "<br>Removed element from the end: $removedElement<br>";
print_r($array);
?>
