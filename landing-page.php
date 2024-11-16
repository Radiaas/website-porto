<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['nama'];
    $password = $_POST['password'];

    // Query untuk menambahkan pengguna baru
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Reset CSS Page</title>
</head>
<body>
  <header class="header">
    <div class="logo">Portofolio</div>
    <nav>
      <a href="#">Home</a>
      <a href="./about-us.php">About</a>
      <a href="./login.php">Login</a>
      <a href="#">Membership</a>
    </nav>
  </header>

  <main class="main">
    <h1>Have a Creative Idea?</h1>
    <p>Share your ideas with friends, family, or professionals!</p>
    <ul class="features">
      <li>Security Guaranteed</li>
      <li>Easy Access</li>
      <li>For Professionals, Friends, or Family</li>
    </ul>
    <div class="form-container">
      <h2>Sign Up</h2>
      <form action="./landing-page.php" method="POST">
        <input type="text" name="nama" placeholder="Name" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
      </form>
    </div>
  </main>

  <footer class="footer">
    &copy; 2024 Project PLB
  </footer>
</body>
</html>
