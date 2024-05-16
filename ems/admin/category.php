<?php
include ('db_connect.php');

// Fetch the counts from the database
$events_count_query = "SELECT COUNT(*) AS count FROM tblevents";
$bookings_count_query = "SELECT COUNT(*) AS count FROM venue_booking";
$users_count_query = "SELECT COUNT(*) AS count FROM tblusers";
$venue_count_query = "SELECT COUNT(*) AS count FROM tblvenue";

$events_count_result = mysqli_query($connection, $events_count_query);
$bookings_count_result = mysqli_query($connection, $bookings_count_query);
$users_count_result = mysqli_query($connection, $users_count_query);
$venue_count_result = mysqli_query($connection, $venue_count_query);

$events_count = mysqli_fetch_assoc($events_count_result)['count'];
$bookings_count = mysqli_fetch_assoc($bookings_count_result)['count'];
$users_count = mysqli_fetch_assoc($users_count_result)['count'];
$venue_count = mysqli_fetch_assoc($venue_count_result)['count'];
?>

<?php include ('dashboard.php'); ?>
<?php include ('loading_screen.php'); ?>

<div class="dashboard-category">
  <div class="category-box events">
    <i class="fas fa-calendar-alt category-icon"></i>
    <div class="category-details">
      <div class="category-title">Events</div>
      <div class="category-count"><?php echo $events_count; ?></div>
    </div>
  </div>
  <div class="category-box bookings">
    <i class="fas fa-book category-icon"></i>
    <div class="category-details">
      <div class="category-title">Bookings</div>
      <div class="category-count"><?php echo $bookings_count; ?></div>
    </div>
  </div>
  <div class="category-box users">
    <i class="fas fa-users category-icon"></i>
    <div class="category-details">
      <div class="category-title">Users</div>
      <div class="category-count"><?php echo $users_count; ?></div>
    </div>
  </div>
  <div class="category-box reports">
    <i class="fas fa-building category-icon"></i>
    <div class="category-details">
      <div class="category-title">Venues</div>
      <div class="category-count"><?php echo $venue_count; ?></div>
    </div>
  </div>
</div>

<style>
  .dashboard-category {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-top: 20px;
    margin-left: 250px;
  }

  .category-box {
    width: 45%;
    height: 150px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    justify-content: flex-start;
    margin: 10px;
    padding: 20px;
    text-align: left;
    transition: transform 0.2s;
    color: #fff;
    position: relative;
  }

  .category-box:hover {
    transform: scale(1.05);
  }

  .category-icon {
    font-size: 50px;
    margin-right: 20px;
  }

  .category-details {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
  }

  .category-title {
    font-size: 18px;
  }

  .category-count {
    font-size: 24px;
    font-weight: bold;
    margin-top: 5px;
  }

  .events {
    background-color: #ff7f50; /* Coral */
  }

  .bookings {
    background-color: #6495ed; /* Cornflower Blue */
  }

  .users {
    background-color: #3cb371; /* Medium Sea Green */
  }

  .reports {
    background-color: #ffd700; /* Gold */
  }

  .events .category-icon, .events .category-title, .events .category-count,
  .bookings .category-icon, .bookings .category-title, .bookings .category-count,
  .users .category-icon, .users .category-title, .users .category-count,
  .reports .category-icon, .reports .category-title, .reports .category-count {
    color: #ffffff;
  }
</style>
