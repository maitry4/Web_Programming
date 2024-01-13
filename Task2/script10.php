<?php
        echo"<form>
            <label for='len'>Length </label> 
            <input type='text' name='len' />
            <br />
            <label for='wid'>Width </label> 
            <input type='text' name='wid' />
            <br />
            <input type='submit' name='submit' />
        </form>";
       
        // Check if the form has been submitted using POST method
        if (isset($_REQUEST['submit'])) {
            // Check if 'len' and 'wid' are set
            if (isset($_REQUEST['len']) && isset($_REQUEST['wid'])) {
                $length = $_REQUEST['len'];
                $width = $_REQUEST['wid'];

                $area = $length * $width;

                echo "Area of rectangle = $area";
            } else {
                echo "Please provide values for both length and width.";
            }
        }
        
?>

