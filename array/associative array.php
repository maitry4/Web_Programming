<?php
//create associative array student_detail which has separate 10 values with key e.g. name, rollno, address, and address and print each values

echo"<form>
	Enter name: <input type='text' name='name'><br>
	Enter rollno: <input type='text' name='rollno'><br>
	Enter div: <input type='text' name='div'><br>
	Enter program: <input type='text' name='program'><br>
	Enter dept: <input type='text' name='dept'><br>
	Enter reg: <input type='text' name='reg'><br>
	Enter enroll: <input type='text' name='enroll'><br>
	Enter batch: <input type='text' name='batch'><br>
	Enter per: <input type='text' name='per'><br>
	Enter marks: <input type='text' name='marks'><br>
	<input type='submit' name='submit'>

</form>";
if(isset($_REQUEST['submit']))
{	
	$student_details = array('name'=>$_REQUEST['name'],
							 'rollno'=>$_REQUEST['rollno'],
							 'div'=>$_REQUEST['div'],
							 'program'=>$_REQUEST['program'],
							 'dept'=>$_REQUEST['dept'],
							 'reg'=>$_REQUEST['reg'],
							 'enroll'=>$_REQUEST['enroll'],
							 'batch'=>$_REQUEST['batch'],
							 'per'=>$_REQUEST['per'],
							 'marks'=>$_REQUEST['marks'],
							  );
	
	foreach ($student_details as $detn => $det) {

		echo $detn." => ".$det;
		echo "<br>";
	}

}
?>