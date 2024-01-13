<?php
        echo"<form>
            <label for='str1'>String 1 </label> 
            <input type='text' name='str1' />
            <br />
            <label for='str2'>String 2 </label> 
            <input type='text' name='str2' />
            <br />
            <input type='submit' name='submit' value='Concatenate'/>
        </form>";
       
        // Check if the form has been submitted using POST method
        if (isset($_REQUEST['submit'])) {
            // Check if 'len' and 'wid' are set
            if (isset($_REQUEST['str1']) && isset($_REQUEST['str2'])) {
                $string1 = $_REQUEST['str1'];
                $string2 = $_REQUEST['str2'];

                echo $string1.$string2;
            } else {
                echo "Please provide values.";
            }
        }
        
?>

