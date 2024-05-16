<?php
 include ('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Management System</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <style>
    .navbar {
      background-color: skyblue !important;
      width: 100%;
    }

    .sidebar {
      width: 250px;
      background-color: #343a40;
      position: fixed;
      height: 100%;
      overflow: auto;
      transition: transform 0.3s ease-in-out;
    }

    .sidebar a {
      padding: 10px 15px;
      text-decoration: none;
      font-size: 16px;
      color: #f8f9fa;
      display: block;
    }

    .sidebar a:hover {
      background-color: #495057;
    }

    .content {
      margin-left: 250px;
      padding: 20px;
      transition: margin-left 0.3s ease-in-out;
    }

    .navbar-brand {
      color: #f8f9fa;
    }

    .navbar-nav .nav-link {
      color: #f8f9fa !important;
    }

    .navbar-nav .nav-link:hover {
      color: #f8f9fa !important;
    }

    @media (max-width: 767.98px) {
      .sidebar {
        transform: translateX(-100%);
      }

      .sidebar.active {
        transform: translateX(0);
      }

      .content {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">Event Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Administrator</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="d-flex">
  <div class="sidebar">
    <a href="category.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="booking.php"><i class="fas fa-book"></i> Venue Book List</a>
    <a href="venues.php"><i class="fas fa-building"></i> Venues</a>
    <a href="events.php"><i class="fas fa-calendar-alt"></i> Events</a>
    <a href="users.php"><i class="fas fa-users"></i> Users</a>
    <a href="reports.php"><i class="fas fa-chart-bar"></i> Reports</a>
    <a href="system_settings.php"><i class="fas fa-cogs"></i> System Settings</a>
  </div>

  <div class="content">
    <!-- Your dashboard content goes here -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script>
  $(document).ready(function(){
    $('.navbar-toggler').click(function(){
      $('.sidebar').toggleClass('active');
    });
  });
</script>



</body>
</html>
