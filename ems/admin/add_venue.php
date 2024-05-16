<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

include('db_connect.php'); // Ensure this file contains the database connection setup

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; // Get the ID from the form
    $venue_name = $_POST['venue'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $rate = $_POST['rate'];
    $image_path = null;

    // Handle image upload if provided
    if (!empty($_FILES['image']['name'])) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }
        $target_file = $target_dir . basename($_FILES['image']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is an actual image or fake image
        $check = getimagesize($_FILES['image']['tmp_name']);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size (5MB maximum)
        if ($_FILES['image']['size'] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                $image_path = $target_file;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    // Insert the new venue details into the database
    $query = "INSERT INTO tblvenue (id, venue, address, description, rate, image) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("isssis", $id, $venue_name, $address, $description, $rate, $image_path);

    if ($stmt->execute()) {
        header('Location: venues.php'); // Redirect to the venue list page after successful addition
        exit;
    } else {
        echo "Error adding record: " . $connection->error;
    }
}
?>

<?php include('dashboard.php'); ?>
<?php include('loading_screen.php'); ?>

<div class="container">
  <h2>Add Venue</h2>
  <form action="add_venue.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="id">ID</label>
      <input type="text" class="form-control" id="id" name="id" required>
    </div>
    <div class="form-group">
      <label for="venue">Venue Name</label>
      <input type="text" class="form-control" id="venue" name="venue" required>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" name="address" required>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" name="description" required></textarea>
    </div>
    <div class="form-group">
      <label for="rate">Rate</label>
      <input type="number" class="form-control" id="rate" name="rate" required>
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Add Venue</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

</body>
</html>
