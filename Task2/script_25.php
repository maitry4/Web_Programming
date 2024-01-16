<?php
	echo"<form>
            <label for='a'>Enter a: </label> 
            <input type='text' name='a' />
            <br />
            <label for='b'>Enter b: </label> 
            <input type='text' name='b' />
            <br />
            <input type='submit' name='submit' />
        </form>";
    if (isset($_REQUEST['submit']))
    {
        if (isset($_REQUEST['a']) && isset($_REQUEST['b']))
        {	  
			$a=$_REQUEST['a'];  
			$b=$_REQUEST['b'];  
			//using arithmetic operation  
			$a=$a+$b;  
			$b=$a-$b;  
			$a=$a-$b;  
			/*DRY RUN
				ex.
				a = 10
				b = 20
				step 1: a = a + b
						10 = 10 + 20
						a = 30
				step 2: b = a - b
						20 = 30 - 20
						b = 10
				step 3: a = a - b
						30 = 30 - 10
						a = 20
				thus, swapped*/
			echo "Value of a: $a</br>";  
			echo "Value of b: $b</br>"; 
		}
	} 
?>  