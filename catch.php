<?php
	$nm = $_POST['fnm'];
	$cty = $_POST['city'];
	$n = $_POST['table'];
	// when get is passed get should be catched.
	// if not sure whether data would come in get or post then request should be used
	echo"<h1>Dashboard</h1>
	<p>Welcome $nm</p>
	<p>You are in $cty</p>";
	$i = 1;
	while ($i < 10) {
	  echo"$n * $i = ".$i*$n."<br>";
	  $i++;
}
?>