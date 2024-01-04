<html>
<style>
	input{border:2px solid #8b6061;}
	select{border:2px solid #8b6061;}
	span{border:2px solid #8b6061;}
	table td:nth-child(1) :{ text-align: right; }
</style>
	<body>
		
		<table bgcolor="#e7dddb" cellpadding="5">
			
			<form action="dashboard.php">
			<tr>
				<td colspan="2"><h1>Registration Form</h1></td>
			</tr>
			<tr>
				<td>UserName:</td>
				<td><input type="text" name="unm" /></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pass" /></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="nm" /></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="add" /></td>
			</tr>
			<tr>
				<td>Country:</td>
				<td>
					<select>
					<option disabled selected>Select a Country</option>
					<option>India</option>
					<option>USA</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>ZIP Code:</td>
				<td><input type="text" name="pin" /></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" /></td>
			</tr>
			<tr>
				<td>Sex:</td>
				<td>
					<input type="radio" name="sex" value="female" /><span>Female</span>
					<input type="radio" name="sex" value="male" /><span>Male</span>
				</td>
			</tr>
			
			<tr>
				<td>Language:</td>
				<td>
					<input type="checkbox" name="lang" value="english" /> <span>English</span>
					<input type="checkbox" name="lang" value="nonenglish" /> <span>Non English</span>
				</td>
			</tr>
			
			<tr>
				<td>About:</td>
				<td><textarea></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" /></td>
			</tr>
			
		</form>
		</table>
	</body>
</html>
