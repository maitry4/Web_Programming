<!-- develop a script that takes a sentence as input and counts the number of vowels in it. -->
<html>
<body>
    <h1>Count Vowels in a Sentence</h1>
    <form method="post">
        <label for="sentence">Enter a sentence:</label>
        <input type="text" id="sentence" name="sentence" required />
        <input type="submit" name="submit" value="Count Vowels" />
    </form>
</body>
</html>

<?php

if (isset($_REQUEST['sentence'])) {
    $sentence = $_REQUEST['sentence'];
    $vowelCount = 0;
    $vowels = 'aeiouAEIOU';
    
    for ($i = 0; $i < strlen($sentence); $i++) {
        $char = $sentence[$i];
        if (strpos($vowels, $char) !== false) {
            $vowelCount++;
        }
    }
    
    echo "Number of vowels in the sentence: $vowelCount";
}

?>

