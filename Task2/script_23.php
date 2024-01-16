<?php
        echo"<form>
            <label for='a'>Enter a: </label> 
            <input type='text' name='a' />
            <br />
            <label for='b'>Enter b: </label> 
            <input type='text' name='b' />
            <br />
            <label for='c'>Enter c: </label> 
            <input type='text' name='c' />
            <br />
            <input type='submit' name='submit' />
        </form>";
       
        // Check if the form has been submitted using POST method
        if (isset($_REQUEST['submit']))
        {
            if (isset($_REQUEST['a']) && isset($_REQUEST['b']) && isset($_REQUEST['c']))
            {
                $a = $_REQUEST['a'];
                $b = $_REQUEST['b'];
                $c = $_REQUEST['c'];
                if($a>$b && $a>$c)
                {
                    echo "a is max";
                }
                else if($b>$a && $b>$c)
                {
                    echo "b is max";
                }
                else
                {
                    echo "c is max";
                }
            }
            else {
                echo "Please provide values.";
            }
        }
        
?>
