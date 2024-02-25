<?php
// Script 54: Extracting a specific column from a multidimensional array using the array_column() function:

$students = [
    ['name' => 'John', 'age' => 20],
    ['name' => 'Jane', 'age' => 22],
    ['name' => 'Doe', 'age' => 21]
];
echo "array <br>";
print_r($students);
$names = array_column($students, 'name');
echo "<br>specific column <br>";
print_r($names);
?>
