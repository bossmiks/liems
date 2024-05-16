<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

include 'db_connect.php';
include('dashboard.php');
include('loading_screen.php');

// Retrieve booking details based on ID
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $booking_id = $_GET['id'];
    $sql = "SELECT * FROM venue_booking WHERE id = $booking_id";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $booking = $result->fetch_assoc();
    } else {
        echo "Booking not found.";
        exit;
    }
} else {
    echo "Booking ID is missing.";
    exit;
}

// Fetch venue list
$query = "SELECT id, venue FROM tblvenue";
$venues_result = mysqli_query($connection, $query);
$venues = [];
if ($venues_result) {
    while ($row = mysqli_fetch_assoc($venues_result)) {
        $venues[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Booking</title>
    <!-- Include any necessary CSS files here -->
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Booking</h2>
        <form action="update_booking.php" method="POST">
            <input type="hidden" name="booking_id" value="<?php echo $booking['id']; ?>">
            <!-- Venue -->
            <div class="form-group">
                <label for="venue">Venue:</label>
                <select class="form-control" id="venue" name="venue">
                    <?php
                    foreach ($venues as $venue) {
                        $selected = ($venue['venue'] == $booking['venue']) ? 'selected' : '';
                        echo "<option value=\"" . htmlspecialchars($venue['venue']) . "\" $selected>" . htmlspecialchars($venue['venue']) . "</option>";
                    }
                    ?>
                </select>
            </div>
            <!-- Name -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($booking['name']); ?>">
            </div>
            <!-- Address -->
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo htmlspecialchars($booking['address']); ?>">
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($booking['email']); ?>">
            </div>
            <!-- Contact -->
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" class="form-control" id="contact" name="contact" value="<?php echo htmlspecialchars($booking['contact']); ?>">
            </div>
            <!-- Duration -->
            <div class="form-group">
                <label for="duration">Duration (hours):</label>
                <input type="number" class="form-control" id="duration" name="duration" value="<?php echo htmlspecialchars($booking['duration']); ?>">
            </div>
            <!-- Schedule -->
            <div class="form-group">
                <label for="schedule">Schedule:</label>
                <input type="datetime-local" class="form-control" id="schedule" name="schedule" value="<?php echo date('Y-m-d\TH:i', strtotime($booking['date_time'])); ?>">
            </div>
            <!-- Status -->
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="Cancelled" <?php echo ($booking['status'] == 'Cancelled') ? 'selected' : ''; ?>>Cancelled</option>
                    <option value="For Verification" <?php echo ($booking['status'] == 'For Verification') ? 'selected' : ''; ?>>For Verification</option>
                    <option value="Confirmed" <?php echo ($booking['status'] == 'Confirmed') ? 'selected' : ''; ?>>Confirmed</option>
                </select>
            </div>
            <!-- Save and Cancel buttons -->
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="venue_book_list.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

</body>
</html>
