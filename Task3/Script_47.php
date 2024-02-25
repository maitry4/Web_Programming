<?php
// Script 47: Applying a user-defined function to all elements of an array using the array_map() function:

$array = [1, 2, 3, 4, 5];
function square($num) {
    return $num * $num;
}
$mappedArray = array_map('square', $array);
print_r($mappedArray);
?>
