<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

include 'db_connect.php';
include('dashboard.php'); 
include('loading_screen.php');

// Verify the actual column names in tblvenue table
$sql = "SELECT venue_booking.id, venue_booking.name, venue_booking.address, venue_booking.email, venue_booking.contact, 
               venue_booking.venue_id, venue_booking.duration, venue_booking.date_time, venue_booking.status,
               tblvenue.venue as venue_name
        FROM venue_booking
        INNER JOIN tblvenue ON venue_booking.venue_id = tblvenue.id";

$result = $connection->query($sql);

if (!$result) {
    error_log("Error executing query: " . $connection->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Venue Book List</title>
    <style>
        .th {
            background-color: #ddd;
            text-align: center;
            font-weight: bold;
            padding: 5px 10px;
        }
        .td {
            border-bottom: 1px solid #ddd;
            padding: 5px 10px;
        }
        .container {
            width: 100%;
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Venue Book List</h2>
            <a href="add_event.php" class="btn btn-success">Add New Event</a>
        </div>
        <table class="table table-striped" style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Booking Information</th>
                    <th>Customer Information</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                        echo "<td>";
                        echo "<strong>Venue:</strong> " . htmlspecialchars($row['venue_name']) . "<br>";
                        echo "<strong>Duration:</strong> " . htmlspecialchars($row['duration']) . " hours<br>";
                        echo "<strong>Schedule:</strong> " . htmlspecialchars($row['date_time']);
                        echo "</td>";
                        echo "<td>";
                        echo "<strong>Name:</strong> " . htmlspecialchars($row['name']) . "<br>";
                        echo "<strong>Email:</strong> " . htmlspecialchars($row['email']) . "<br>";
                        echo "<strong>Contact:</strong> " . htmlspecialchars($row['contact']) . "<br>";
                        echo "<strong>Address:</strong> " . htmlspecialchars($row['address']);
                        echo "</td>";
                        echo "<td>" . htmlspecialchars($row['status']) . "</td>";
                        echo "<td class='action-buttons'>";
                        echo "<a href='edit_booking.php?id=" . htmlspecialchars($row['id']) . "' class='btn btn-primary'>Edit</a> ";
                        echo "<a href='delete_booking.php?id=" . htmlspecialchars($row['id']) . "' class='btn btn-danger' onclick='return confirm(\"Are you sure you want to delete this event?\");'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No events found</td></tr>";
                }
                $connection->close();
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
