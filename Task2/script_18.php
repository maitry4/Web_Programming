<?php
	//Write a php script that generates a random number between 1 and 10 and let the user guess it.
	echo"<form>
            <label for='guess'>Guess a Number: </label> 
            <input type='text' name='guess' />
            <br />
            <input type='submit' name='submit' />
        </form>";
    if (isset($_REQUEST['submit']))
    {
        if (isset($_REQUEST['guess']))
        {
			$randno = rand(1,10);
			$user_guess = $_REQUEST['guess'];
			if ($randno == $user_guess)
			{
				echo "You guessed it right!<br>The number was $randno";
			}
			else
			{
				echo "You guessed it wrong. The number was $randno. But you guessed $user_guess";
			}
		}
	}
?>