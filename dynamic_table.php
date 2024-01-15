<?php
        echo"<form method='post'>
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
                for($i=1; $i<11; $i++)
                {
                    $res = $i * $number;
                    echo "$i * $number = $res <br>";
                }
            }
            else {
                echo "Please provide value.";
            }
        }
        
?>

