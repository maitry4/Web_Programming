<?php
// Script 40: Removing and replacing elements from an array using the array_splice() function:

$array = [1, 2, 3, 4, 5];
echo "original: <br>";
print_r($array);
array_splice($array, 2, 2, [6, 7]); // Remove 2 elements starting from index 2 and replace with 6, 7
echo "<br>spliced: <br>";
print_r($array);
?>
