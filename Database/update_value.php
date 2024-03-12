<?php 
$connect = mysqli_connect('localhost', 'root', '', 'newdatabase');
$q = 'Select * from student where id=1';
$exe = mysqli_query($connect, $q);
$fetch = mysqli_fetch_row($exe);
$name = $fetch[1];
echo"<html>
    <form action='updating_to_database.php' method='post'>
        <label for='id'> ID </label>
        <input type='text' name='id' value=1 />
        <label for='name'> Name </label>
        <input type='text' name='name' value=$name />
        <input type='submit' />
    </form>
</html>";
?>