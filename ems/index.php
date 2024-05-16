<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="admin/css/bootstrap.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-image: url('path/to/your/image.jpg'); /* Specify the path to your image */
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        nav ul li a:hover {
            background-color: #fff;
            color: skyblue;
        }

        .main-content {
            padding: 20px;
        }

        .main-content h2 {
            color: #333;
            text-align: center;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Event Management System</h1>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="web_venues.php">Venues</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            </ul>
        </nav>
    </header>
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Upcoming Events</h2>
                </div>
            </div>
            <!-- Add your content for upcoming events here -->
        </div>
    </section>
    <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
</body>
</html>
