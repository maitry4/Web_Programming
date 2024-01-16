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
			$fact = 1;
			for($i=$num; $i>=1; $i--)
			{
				$fact = $fact * $i;
			}
			echo "Factorial of $num is $fact";
		}
	}
?>