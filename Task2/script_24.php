<?php
	echo"<form>
            <label for='num'>Enter a Number: </label> 
            <input type='text' name='num' />
            <br />
            <input type='submit' name='submit' />
        </form>";
    if (isset($_REQUEST['submit']))
    {
        if (isset($_REQUEST['num']))
        {	
        	$num = $_REQUEST['num'];
        	$sqr = sqrt($num);
			echo "Square Root of $num is $sqr";
			
		}
	}
?>