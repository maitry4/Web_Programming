<!-- Create a php script to check if a given year is a leap year and display result -->
<html>
<body>
    <h1>Leap Year Checker</h1>
    <form method="post">
        <label for="year">Enter a year:</label>
        <input type="number" id="year" name="year" required />
        <input type="submit" name="submit" value="Check Leap Year" />
    </form>
</body>
</html>

<?php

if (isset($_REQUEST['year'])) {
    $year = $_REQUEST['year'];

    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "$year is a leap year.";
        
    } else {
        echo "$year is not a leap year.";
        
    } 
}
?>

