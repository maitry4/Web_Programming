<?php
    echo"
        <form>
            Enter start of the range:
            <input type='text' name='min'>
            <br>
            Enter end of the range:
            <input type='text' name='max'>
            <br>
            <input type='submit'>
        </form>
    ";
    if (isset($_REQUEST['min']) && isset($_REQUEST['max']))
   {
        $min = $_REQUEST['min'];
        $max = $_REQUEST['max'];
        $randomNumber = rand($min, $max);
        echo "Random number between $min and $max: $randomNumber";
    }
?>
