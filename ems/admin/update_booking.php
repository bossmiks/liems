<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking_id = $_POST['booking_id'];
    $venue_id = $_POST['venue'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $duration = $_POST['duration'];
    $schedule = $_POST['schedule'];
    $status = $_POST['status'];

$sql = "UPDATE venue_booking SET 
            venue_id = ?, 
            name = ?, 
            address = ?, 
            email = ?, 
            contact = ?, 
            duration = ?, 
            date_time = ?, 
            status = ? 
        WHERE id = ?";


    $stmt = $connection->prepare($sql);
$stmt->bind_param("issssissi", $venue_id, $name, $address, $email, $contact, $duration, $schedule, $status, $booking_id);


    if ($stmt->execute()) {
        header('Location: venue_book_list.php');
    } else {
        echo "Error updating record: " . $connection->error;
    }

    $stmt->close();
    $connection->close();
} else {
    echo "Invalid request.";
}
?>
