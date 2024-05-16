<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

include 'db_connect.php';
include('dashboard.php'); 

// Retrieve event details
if(isset($_GET['id'])) {
    $event_id = $_GET['id'];
    $sql = "SELECT tblevents.id, tblevents.schedule, tblevents.event, tblevents.description, tblvenue.venue, tblvenue.image
            FROM tblevents
            INNER JOIN tblvenue ON tblevents.venue_id = tblvenue.id
            WHERE tblevents.id = $event_id";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        // Handle case when event is not found
        echo "Event not found";
        exit;
    }
} else {
    // Handle case when no event ID is provided
    echo "Event ID not provided";
    exit;
}
?> 

<style type="text/css">
      .container {
      width: 100%;
      padding: 20px;
      transition: margin-left 0.3s ease-in-out;
  }
</style>
</head>
<body>
    <?php include('loading_screen.php'); ?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2><?php echo $row['event']; ?></h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="Venue Image">
                    </div>
                    <div class="col-md-6">
                        <p><strong>Venue:</strong> <?php echo $row['venue']; ?></p>
                        <p><strong>Schedule:</strong> <?php echo $row['schedule']; ?></p>
                        <p><strong>Description:</strong><br><?php echo $row['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

