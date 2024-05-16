<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

include 'db_connect.php';
include('dashboard.php'); 
include('loading_screen.php');

// Assuming you have a connection to the database in $connection
$query = "SELECT * FROM tblvenue";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue List</title>
    <style>
        th {
            text-align: center;
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
    <h2>Venue List</h2>
    <a href="add_venue.php" class="btn btn-success">Add New Venue</a>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Venue</th>
        <th>Address</th>
        <th>Description</th>
        <th>Rate</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . htmlspecialchars($row['id']) . "</td>";
          echo "<td>" . htmlspecialchars($row['venue']) . "</td>";
          echo "<td>" . htmlspecialchars($row['address']) . "</td>";
          echo "<td>" . htmlspecialchars($row['description']) . "</td>";
          echo "<td>" . htmlspecialchars($row['rate']) . "</td>";
          echo "<td>";
          echo "<a href='edit_venue.php?id=" . htmlspecialchars($row['id']) . "' class='btn btn-primary'>Edit</a> ";
          echo "<a href='delete_venue.php?id=" . htmlspecialchars($row['id']) . "' class='btn btn-danger ml-2' onclick='return confirm(\"Are you sure you want to delete this venue?\"); '>Delete</a>";
          echo "</td>";
          echo "</tr>";
      }
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
