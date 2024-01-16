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
			$revnum = strrev($_REQUEST['num']);
			if($num == $revnum)
			{
				echo "$num is a palindrome.";
			}
			else
			{
				echo "$num is not a palindrome.";
			}
			
		}
	}
?>