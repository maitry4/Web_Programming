<?php
//create indexed array named student which has 10 values and print each values

echo"<form>
	Enter name 1: <input type='text' name='name1'><br>
	Enter name 2: <input type='text' name='name2'><br>
	Enter name 3: <input type='text' name='name3'><br>
	Enter name 4: <input type='text' name='name4'><br>
	Enter name 5: <input type='text' name='name5'><br>
	Enter name 6: <input type='text' name='name6'><br>
	Enter name 7: <input type='text' name='name7'><br>
	Enter name 8: <input type='text' name='name8'><br>
	Enter name 9: <input type='text' name='name9'><br>
	Enter name 10: <input type='text' name='name10'><br>
	<input type='submit' name='submit'>

</form>";
if(isset($_REQUEST['submit']))
{	
	$names = array_fill(0, 10, '');
	for($i = 0; $i<10; $i++)
	{	
		$temp = "name".($i+1);	
		$names[$i]= $_REQUEST[$temp];
	}
	foreach ($names as $name) {
		echo $name;
		echo "<br>";
	}

}

?>