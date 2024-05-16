<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

include 'db_connect.php';

$id = $event_name = $schedule = $venue_id = $description = $audience_capacity = $payment_type = $amount = $banner = $type = "";

if (isset($_GET['id'])) {
    $event_id = $_GET['id'];
    $sql = "SELECT * FROM tblevents WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $event_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row['id'];
        $event_name = $row['event'];
        $schedule = $row['schedule'];
        $venue_id = $row['venue_id'];
        $description = $row['description'];
        $audience_capacity = $row['audience_capacity'];
        $payment_type = $row['payment_type'];
        $amount = $row['amount'];
        $banner = $row['banner'];
        $type = $row['type'];
    } else {
        echo "Event not found";
        exit;
    }
} else {
    echo "Event ID not provided";
    exit;
}

$sql_venue = "SELECT id, venue FROM tblvenue";
$result_venue = $connection->query($sql_venue);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_name = $_POST["event_name"];
    $schedule = $_POST["schedule"];
    $venue_id = $_POST["venue_id"];
    $description = $_POST["description"];
    $audience_capacity = $_POST["audience_capacity"];
    $payment_type = $_POST["payment_type"];
    $amount = $_POST["amount"];
    $banner = $_POST["banner"];
    $type = isset($_POST["type"]) ? $_POST["type"] : 0;

    $sql = "UPDATE tblevents SET event=?, schedule=?, venue_id=?, description=?, audience_capacity=?, payment_type=?, amount=?, banner=?, type=? WHERE id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssisssdsii", $event_name, $schedule, $venue_id, $description, $audience_capacity, $payment_type, $amount, $banner, $type, $id);

    if ($stmt->execute()) {
        header('Location: events.php');
        exit;
    } else {
        echo "Error updating event: " . $stmt->error;
    }
}

$connection->close();
?>
<?php include('dashboard.php'); ?>
<?php include('loading_screen.php'); ?>
    <style type="text/css">
        .container {
            width: 100%;
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }
    </style>

<body>
    <div class="container">
        <h2>Edit Event</h2>
        <form method="post">
            <div class="form-group">
                <label for="event_name">Event:</label>
                <input type="text" class="form-control" id="event_name" name="event_name" value="<?php echo htmlspecialchars($event_name); ?>">
            </div>
            <div class="form-group">
                <label for="schedule">Schedule:</label>
                <input type="datetime-local" class="form-control" id="schedule" name="schedule" value="<?php echo htmlspecialchars($schedule); ?>">
            </div>
            <div class="form-group">
                <label for="venue_id">Venue:</label>
                <select class="form-control" id="venue_id" name="venue_id">
                    <?php 
                    if ($result_venue->num_rows > 0) {
                        while($row_venue = $result_venue->fetch_assoc()) {
                            $selected = ($row_venue['id'] == $venue_id) ? "selected" : "";
                            echo "<option value='".$row_venue['id']."' $selected>".$row_venue['venue']."</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"><?php echo htmlspecialchars($description); ?></textarea>
            </div>
            <div class="form-group">
                <label for="audience_capacity">Audience Capacity:</label>
                <input type="number" class="form-control" id="audience_capacity" name="audience_capacity" value="<?php echo htmlspecialchars($audience_capacity); ?>">
            </div>
            <div class="form-group">
                <label for="payment_type">Payment Type:</label>
                <select class="form-control" id="payment_type" name="payment_type">
                    <option value="Free" <?php if($payment_type == "Free") echo "selected"; ?>>Free</option>
                    <option value="Paid" <?php if($payment_type == "Paid") echo "selected"; ?>>Paid</option>
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" class="form-control" id="amount" name="amount" value="<?php echo htmlspecialchars($amount); ?>">
            </div>
            <div class="form-group">
                <label for="type">Event Type:</label>
                <select class="form-control" id="type" name="type">
                    <option value="0" <?php if($type == 0) echo "selected"; ?>>Public</option>
                    <option value="1" <?php if($type == 1) echo "selected"; ?>>Private</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="events.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
