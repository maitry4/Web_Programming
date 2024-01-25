<?php
//create multidimensional array student_master which has 8 sub array as above key and value and print each value and array

$student_master = array(
						array(1,2,3),
						array(4,5,6),
						array(7,8,9),
						array(10,11,12),
						array(13,14,15),
						array(16,17,18),
						array(19,20,21),
						array(22,23,24),
					);

foreach ($student_master as $value){
	foreach($value as $n)
	{
		echo " ";
		echo $n;
		echo " ";	
	}
	echo "<br>";
}
print_r($student_master);
?>