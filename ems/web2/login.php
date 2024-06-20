<?php
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "emsdb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $stored_password = $row["password"];

            if(password_verify($password, $stored_password)){
                session_start();
                $_SESSION["$username"] = $username;
                header("location: dashboard.php");
                exit;
            }else{
                echo "Invalid username or password.";
            }
        }else{
            echo "Invalid username or password.";
        }
        
    }
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="username" required><br>
        Password: <input tpye="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>