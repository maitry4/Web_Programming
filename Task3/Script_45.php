<?php
// Script 45: Flipping the keys and values of an associative array using the array_flip() function:

$assocArray = ['a' => 1, 'b' => 2, 'c' => 3];
echo "array <br>";
print_r($assocArray);

$flippedArray = array_flip($assocArray);
echo "<br>flipped <br>";
print_r($flippedArray);
?>
