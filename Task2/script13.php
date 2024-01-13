<?php
        echo"<form>
            <label for='cel'>Enter temperature in Celsius: </label> 
            <input type='text' name='cel' />
            <br />
            <input type='submit' name='submit' />
        </form>";
       
        // Check if the form has been submitted using POST method
        if (isset($_REQUEST['submit']))
        {
            if (isset($_REQUEST['cel']))
            {
                $celsius = $_REQUEST['cel'];
                $fahrenheit = ($celsius * 9/5) + 32;

                echo "$fahrenheit °F";
            }
            else {
                echo "Please provide values.";
            }
        }
        
?>

