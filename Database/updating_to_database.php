<?php
// Check if 'id' and 'name' parameters are set
if(isset($_REQUEST['id']) && isset($_REQUEST['name'])) {
    // Retrieve 'id' and 'name'
    $id = intval($_REQUEST['id']);
    $name = $_REQUEST['name'];

    // Establish connection to the database
    $connect = mysqli_connect('localhost', 'root', '', 'newdatabase');

    // Construct and execute the update query
    $q = "UPDATE student SET name = '$name' WHERE id = $id";
    $exe = mysqli_query($connect, $q);

    // Check if the query was successful
    if($exe) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }
} else {
    echo "ID and name parameters are required";
}
?>
