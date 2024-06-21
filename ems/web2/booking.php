<?php
include('../admin/db_connect.php'); // Ensure this file contains the database connection setup

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $contact = mysqli_real_escape_string($connection, $_POST['contact']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $venue_id = mysqli_real_escape_string($connection, $_POST['venue_id']);
    $date_time = mysqli_real_escape_string($connection, $_POST['date_time']);
    $duration = mysqli_real_escape_string($connection, $_POST['duration']);
   

    // Insert the new booking details into the database
    $query = "INSERT INTO venue_booking (name, email, contact, address, venue_id, date_time, duration) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("sssssss", $name, $email, $contact, $address, $venue_id, $date_time, $duration);

    if ($stmt->execute()) {
        header('Location: venues.php'); // Redirect to the booking list page after successful addition
        exit;
    } else {
        echo "Error adding record: " . $connection->error;
    }
}
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
body {
    font-family: "Poppins", sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

.form-container h2 {
    margin-top: 0;
}

.form-container label {
    display: block;
    margin-bottom: 8px;
}

.form-container input[type="text"],
.form-container input[type="email"],
.form-container input[type="datetime-local"],
.form-container input[type="number"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.form-container input[type="submit"],
.form-container input[type="reset"] {
    width: 48%;
    padding: 10px;
    margin: 4px 1%;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.form-container input[type="submit"] {
    background-color: #4CAF50;
    color: white;
}

.form-container input[type="reset"] {
    background-color: #f44336;
    color: white;
}

</style>

<?php // include('dashboard.php'); ?>
<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="row mb-4 mt-4">
                <div class="form-container">
                    <h2>Add New Booking</h2>
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact:</label>
                            <input type="text" class="form-control" id="contact" name="contact" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                           
                            <input type="text" class="form-control" name="address">
                        </div>
                        <?php
                                $id = $_GET['id'];
                                // Fetch venues from database
                                $venue_sql = "SELECT * FROM tblvenue WHERE id = $id";
                                $venue_result = $connection->query($venue_sql);
                                ?>

                        <input type="hidden" name="venue_id" value="<?php echo $venue_row['venue'] ?>">
                       
                        <div class="form-group">
                            <label for="date_time">Date and Time:</label>
                            <input type="datetime-local" class="form-control" id="date_time" name="date_time" required>
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration (hours):</label>
                            <input type="number" class="form-control" id="duration" name="duration" required>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="cancel" class="btn btn-secondary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>  
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
