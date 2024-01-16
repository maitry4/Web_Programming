<?php
	echo"<form>
            <label for='radius'>Enter Radius: </label> 
            <input type='text' name='radius' />
            <br />
            <input type='submit' name='submit' />
        </form>";
    if (isset($_REQUEST['submit']))
    {
        if (isset($_REQUEST['radius']))
        {
			$radius = $_REQUEST['radius'];
			$area = 3.14 * $radius * $radius;
			echo "Area of circle with radius $radius would be $area.";
				
		}
	}
?>