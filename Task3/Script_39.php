<?php
// Script 39: Extracting a portion of an array using the array_slice() function and displaying the result:

$array = [1, 2, 3, 4, 5];
echo "original: <br>";
print_r($array);
$slicedArray = array_slice($array, 2, 2); // Starting from index 2, take 2 elements
echo "<br>sliced: <br>";
print_r($slicedArray);
?>
