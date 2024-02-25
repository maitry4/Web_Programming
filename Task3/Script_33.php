<?php
// Script 33: Checking if a specific key exists in an associative array using array_key_exists() function:
    
$array = ['a' => 1, 'b' => 2, 'c' => 3];
$key = 'b';
if (array_key_exists($key, $array)) {
    echo "Key $key exists in the array";
} else {
    echo "Key $key does not exist in the array";
}
?>
