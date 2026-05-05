<?php
include('db.php'); // database connection

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    // Basic validation
    if(empty($name) || empty($email) || empty($course)) {
        echo "All fields are required!";
        exit;
    }

    // Update query
    $query = "UPDATE students SET 
                name='$name', 
                email='$email', 
                course='$course' 
              WHERE id='$id'";

    if(mysqli_query($conn, $query)) {
        echo "Record updated successfully!";
        header("Location: index.php"); // redirect
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>