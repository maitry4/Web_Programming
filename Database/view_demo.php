<?php
	$connect = mysqli_connect('localhost', 'root','','newdb');
	$q = 'select * from student';
	$exe = mysqli_query($connect, $q);
	
	
	$n = mysqli_num_rows($exe);
	echo"<table border=1>";
	echo "<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Age</th>
			  </tr>";
	for($i=1;$i<=$n;$i++)
	{
		$fetch = mysqli_fetch_row($exe);
		echo "<tr>
				<td>$fetch[0]</td>
				<td>$fetch[1]</td>
				<td>$fetch[2]</td>
			  </tr>";
	}
	echo"</table>";
?>