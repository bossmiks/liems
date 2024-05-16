<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

include('db_connect.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = "DELETE FROM tblvenue WHERE id = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    
    if (mysqli_stmt_execute($stmt)) {
        header('Location: venues.php'); // Ensure this is the correct file name
        exit;
    } else {
        // If there was an error, display an error message
        echo "Error deleting record: " . mysqli_error($connection);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    // If 'id' is not set, redirect to the venue list
    header('Location: venues.php');
    exit;
}

// Close the database connection
mysqli_close($connection);
?>
