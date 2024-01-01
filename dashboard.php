<?php
	$fname = $_REQUEST['fnm'];
	$lname = $_REQUEST['fnm'];
	$class = $_REQUEST['lnm'];
	$division = $_REQUEST['class'];
	$city = $_REQUEST['city'];
	$address = $_REQUEST['add'];
	$mobno = $_REQUEST['mno'];
	echo"<table>
			<tr>
				<td>First Name</td>
				<td>$fname</td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td>$fname</td>
			</tr>
			<tr>
				<td>Class</td>
				<td>$class</td>
			</tr>
			<tr>
				<td>Division</td>
				<td>$division</td>
			</tr>
			<tr>
				<td>City</td>
				<td>$city</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>$address</td>
			</tr>
			<tr>
				<td>Mobile no</td>
				<td>$mobno</td>
			</tr>
			<tr>
				<td>Pincode</td>
				<td>$pinc</td>
			</tr>
			<tr>
				<td>State</td>
				<td>$st</td>
			</tr>
			<tr>
				<td>Country</td>
				<td>$country</td>
			</tr>

		</table>";
?>