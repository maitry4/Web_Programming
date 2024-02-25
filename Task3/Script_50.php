<?php
// Script 50: Filtering the elements of an array based on a specified condition using the array_filter() function:

$array = [1, 2, 3, 4, 5];
echo "array <br>";
print_r($array);
$filteredArray = array_filter($array, function($item) {
    return $item % 2 == 0;
});
echo "<br>filtered <br>";
print_r($filteredArray);
?>
