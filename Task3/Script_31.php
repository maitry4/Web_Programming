<?php
$array = [1, 2, 3, 4, 5];
$element = 3;
$index = array_search($element, $array);

print_r($array);
echo "<br>index = ".$index."<br>";

if ($index !== false) {
    echo "Element $element found at index $index";
} else {
    echo "Element not found in the array";
}
?>
