<?php
	echo"<form>
            <label for='num'>Enter a Positive Number: </label> 
            <input type='text' name='num' />
            <br />
            <input type='submit' name='submit' />
        </form>";
    if (isset($_REQUEST['submit']))
    {
        if (isset($_REQUEST['num']))
        {
        	$flag = 0;
			$number = abs($_REQUEST['num']);
			for($i=2; $i<$number; $i++)
			{
				if($number%$i == 0)
				{
					echo "Not a Prime number";
					$flag = 1;
					break;
				}
			}
			if($flag==0)
			{
				echo "This is a Prime number";
			}
			
		}
	}
?>