<?php
        echo"<form method='post'>
            <label for='num'>Enter a number: </label> 
            <input type='text' name='num' />
            <br />
            <label for='start'>Enter Start Value: </label> 
            <input type='text' name='start' />
            <br />
            <label for='end'>Enter End Value: </label> 
            <input type='text' name='end' />
            <br />
            <input type='submit' name='submit' />
        </form>";
       
        // Check if the form has been submitted using POST method
        if (isset($_REQUEST['submit']))
        {
            if (isset($_REQUEST['num']) && isset($_REQUEST['start']) && isset($_REQUEST['end']))
            {
                $number = $_REQUEST['num'];
                $start = $_REQUEST['start'];
                $end = $_REQUEST['end'];
                for($i=$start; $i<=$end; $i++)
                {
                    $res = $i * $number;
                    echo "$number * $i  = $res <br>";
                }
            }
            else {
                echo "Please provide value.";
            }
        }
        
?>
