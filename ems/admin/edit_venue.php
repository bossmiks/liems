<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

include('db_connect.php'); // Ensure this file contains the database connection setup

$venue = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the existing details of the venue
    $query = "SELECT * FROM tblvenue WHERE id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $venue = $result->fetch_assoc();
    } else {
        echo "No venue found with this ID.";
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $venue_name = $_POST['venue'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $rate = $_POST['rate'];
    $image_path = $venue['image']; // Default to current image path

    // Handle image upload if a new image is provided
    if (!empty($_FILES['image']['name'])) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }
        $target_file = $target_dir . basename($_FILES['image']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
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

    // Update the venue details
    $query = "UPDATE tblvenue SET id = ?, venue = ?, address = ?, description = ?, rate = ?, image = ? WHERE id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("isssisi", $id, $venue_name, $address, $description, $rate, $image_path, $_POST['original_id']);

    if ($stmt->execute()) {
        header('Location: venues.php'); // Redirect to the venue list page after successful update
        exit;
    } else {
        echo "Error updating record: " . $connection->error;
    }
}
?>
<?php include('dashboard.php'); ?>
<?php include('loading_screen.php'); ?>

<style type="text/css">
      .container {
      margin-left: 250px;
      padding: 20px;
      transition: margin-left 0.3s ease-in-out;
  }
</style>

<div class="container">
  <h2>Edit Venue</h2>
  <form action="edit_venue.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="original_id" value="<?php echo htmlspecialchars($venue['id']); ?>">
    <div class="form-group">
      <label for="id">ID</label>
      <input type="text" class="form-control" id="id" name="id" value="<?php echo htmlspecialchars($venue['id']); ?>" required>
    </div>
    <div class="form-group">
      <label for="venue">Venue Name</label>
      <input type="text" class="form-control" id="venue" name="venue" value="<?php echo htmlspecialchars($venue['venue']); ?>" required>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" name="address" value="<?php echo htmlspecialchars($venue['address']); ?>" required>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" name="description" required><?php echo htmlspecialchars($venue['description']); ?></textarea>
    </div>
    <div class="form-group">
      <label for="rate">Rate</label>
      <input type="number" class="form-control" id="rate" name="rate" value="<?php echo htmlspecialchars($venue['rate']); ?>" required>
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control" id="image" name="image">
      <?php if (!empty($venue['image'])): ?>
        <p>Current image:</p>
        <img src="<?php echo htmlspecialchars($venue['image']); ?>" alt="Venue Image" style="max-width: 200px;">
      <?php endif; ?>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

</body>
</html>
