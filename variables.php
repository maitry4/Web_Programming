<?php
	//php is a loosely compiled language.
	//This means we do not need to define dtype of variable.
	$a = 10;
	$b = 15.5;
	$c ="Welcome";
	$c = 10;
	echo $a + $b;
	echo "<br>";
	echo "$a + $b";
	echo "<br>";
	echo $c;

	//imp concept
	// desired o/p => this is my sum = 25.5
	echo "<br>";
	echo "<font color=blue>This is my sum = </font>"."<font color=red>".$a+$b."</font>";

	//pemdas 
	$c = 30;
	echo "<br>";
	echo $a*$b/$c*$a;
	#This is a comment too.
	/**/
?>