<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f2f5; /* fallback color */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Arial', sans-serif;
    }

    .login-container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 800px; /* Increased max-width for wider container */
      display: flex;
      overflow: hidden;
    }

    .login-content {
      padding: 40px;
      flex: 1;
    }

    .login-container h2 {
      margin-bottom: 20px;
      color: #007bff;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    .login-content .form-control:focus {
      box-shadow: none;
      border-color: #007bff;
    }

    .forgot-password {
      display: block;
      margin-top: 10px;
      text-align: right;
    }

    .forgot-password a {
      color: #007bff;
      text-decoration: none;
    }

    .forgot-password a:hover {
      text-decoration: underline;
    }

    .login-image {
      flex: 1;
      background-size: cover;
      background-position: center;
      transition: background-image 1s ease-in-out;
    }
  </style>
</head>
<body>

<div class="login-container">
  <div class="login-content">
    <h2 class="text-center">Login</h2>
    <form action="authenticate.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
  </div>
  <div class="login-image" id="login-image"></div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  const images = [
    'img/img1.jpg',
    'img/img2.jpg',
    'img/img3.jpg',
    'img/img4.jpg'
  ];
  
  let currentIndex = 0;

  function changeBackgroundImage() {
    const loginImageDiv = document.getElementById('login-image');
    loginImageDiv.style.backgroundImage = `url('${images[currentIndex]}')`;
    currentIndex = (currentIndex + 1) % images.length;
  }

  setInterval(changeBackgroundImage, 3000); // Change image every 3 seconds

  // Initial call to set the first image
  changeBackgroundImage();
</script>

</body>
</html>
