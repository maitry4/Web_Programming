<?php
// Script 48: Applying a callback function to the elements of an array and returning a single value using the array_reduce() function:

$array = [1, 2, 3, 4, 5];
function sum($carry, $item) {
    $carry += $item;
    return $carry;
}
$total = array_reduce($array, 'sum', 0);
echo "Total sum: $total";
?>
