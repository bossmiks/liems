<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

include 'db_connect.php';
include('dashboard.php'); 
include('loading_screen.php');

$sql = "SELECT tblevents.id, tblevents.schedule, tblevents.venue_id, tblevents.event, tblevents.type, tblevents.amount, tblevents.description, tblvenue.venue
        FROM tblevents
        INNER JOIN tblvenue ON tblevents.venue_id = tblvenue.id";

$result = $connection->query($sql);
?>

<style type="text/css">
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
<body>
    <div class="container" >
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Event List</h2>
            <a href="add_event.php" class="btn btn-success">Add New Event</a>
        </div>
        <table class="table table-striped" style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Schedule</th>
                    <th>Venue</th>
                    <th>Event Info.</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['schedule'] . "</td>";
                        echo "<td>" . $row['venue'] . "</td>";
                        echo "<td>";
                        echo "<strong>Event:</strong> " . $row['event'] . "<br>";
                        echo "<strong>Type:</strong> " . ($row['type'] == 1 ? 'Private' : 'Public') . "<br>";
                        echo "<strong>Fee:</strong> $" . $row['amount'];
                        echo "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "<td>"; // Opening the same td where other data is
                        echo "<a href='view_event.php?id=" . $row['id'] . "' class='btn btn-secondary'>View</a>";
                        echo "<a href='edit_event.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>";
                        echo "<a href='delete_event.php?id=" . $row['id'] . "' class='btn btn-danger' onclick='return confirm(\"Are you sure you want to delete this event?\");'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No events found</td></tr>";
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
