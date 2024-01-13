<?php
        echo"<form>
            <label for='num'>Enter a number: </label> 
            <input type='text' name='num' />
            <br />
            <input type='submit' name='submit' />
        </form>";
       
        // Check if the form has been submitted using POST method
        if (isset($_REQUEST['submit']))
        {
            if (isset($_REQUEST['num']))
            {
                $number = $_REQUEST['num'];
                if ($number%2 == 0) {
                    echo "$number is Even.";
                }
                else{
                    echo "$number is Odd.";
                }
            }
            else {
                echo "Please provide values.";
            }
        }
        
?>

