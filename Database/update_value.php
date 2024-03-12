<?php 
$connect = mysqli_connect('localhost', 'root', '', 'newdatabase');

// Retrieve the list of student IDs
$q = 'SELECT * FROM student';
$exe = mysqli_query($connect, $q);

echo "<html>
<form action='updating_to_database.php' method='post'>
<select name='id'>"; // Added 'name' attribute to select tag

while ($fetch = mysqli_fetch_row($exe)) {
    $id = $fetch[0];
    echo "<option value='$id'>$id $fetch[1]</option>"; // Added 'value' attribute to options
}

echo "</select>
<br><br>";

echo "      
<label for='name'> Update Your Name </label>
<input type='text' name='name'/>
<!-- Corrected value attribute -->
<br><br>
<input type='submit' />
</form>
</html>";
?>
