<?php
// Script 35: Shuffling the elements of an array using the shuffle() function:

$array = [1, 2, 3, 4, 5];
echo 'original array: <br>';
print_r($array);
shuffle($array);
echo '<br>shuffled array: <br>';
print_r($array);
?>
