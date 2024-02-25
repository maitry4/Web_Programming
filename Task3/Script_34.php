<?php
// Script 34: Checking if a specific value exists in an array using the in_array() function:

$array = [1, 2, 3, 4, 5];
$value = 3;
if (in_array($value, $array)) {
    echo "Value $value exists in the array";
} else {
    echo "Value $value does not exist in the array";
}
?>
