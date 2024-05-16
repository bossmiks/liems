<?php
include ('db_connect.php')
?>

<?php
session_start();

$users = [
    'admin' => 'admin',
    'user' => 'user'
];

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (array_key_exists($username, $users) && $users[$username] === $password) {
    $_SESSION['username'] = $username;
    header('Location: category.php');
    exit;
} else {
    header('Location: login.php?error=invalid_credentials');
    exit;
}
?>
