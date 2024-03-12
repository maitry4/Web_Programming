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

// Retrieving the name based on the selected ID
if (isset($_POST['id'])) {
    $selected_id = $_POST['id'];
    $q2 = "SELECT name FROM student WHERE id='$selected_id'";
    $exe2 = mysqli_query($connect, $q2);
    $fetch = mysqli_fetch_row($exe2);
    $name = $fetch[0];
} else {
    $name = ''; // Set default value if no ID is selected yet
}

echo "      
<label for='name'> Update Your Name </label>
<input type='text' name='name' value='".htmlspecialchars($name). "'/>
<!-- Corrected value attribute -->
<br><br>
<input type='submit' />
</form>
</html>";
?>
