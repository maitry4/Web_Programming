<html>
	<body>
		<form name="register" action="catch.php" method="post">
			<!-- get generates query string post doesn't -->
			<!-- when get is passed get should be catched. -->
			<!-- if not sure whether data would come in get or post then request should be used. -->
			Name <input type="text" name="fnm" /><br>
			City <input type="text" name="city"/><br>
			<input type="text" name="table" />
			<input type="submit" name="submit" />
		</form>
	</body>
</html>
<?php
?>