<?php
// Script 49: Splitting an array into chunks of a specified size using the array_chunk() function:

$array = [1, 2, 3, 4, 5];
echo "array <br>";
print_r($array);
$chunkedArray = array_chunk($array, 2);
echo "<br>chunked <br>";
print_r($chunkedArray);
?>
