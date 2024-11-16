<?php
include 'database.php';

$errors = []; // Array untuk menyimpan pesan kesalahan

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['nama'];
    $password = $_POST['password'];

    // Validasi input
    if (empty($username)) {
        $errors[] = "Nama harus diisi";
    }
    if (empty($password)) {
        $errors[] = "Password harus diisi";
    }

    // Jika tidak ada kesalahan, lakukan login
    if (empty($errors)) {
        // Query untuk mengambil data pengguna berdasarkan username dan password
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Login successful";
        } else {
            $errors[] = "Nama pengguna atau kata sandi salah";
        }
    }

    // Tampilkan pesan kesalahan
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="./global.css" />
  <link rel="stylesheet" href="./frame-3.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;800&display=swap" />
</head>
<body>
  <div class="login1">
    <div class="wrapper-rectangle-231">
      <img class="wrapper-rectangle-23-item" alt="" src="./public/Rectangle 23 (1).png" />
    </div>
    <header class="header1">
      <div class="header-item"></div>
      <h1 class="portofolio10">
        <span>Porto</span>
        <span class="folio3">folio.</span>
      </h1>
      <nav class="header-inner">
        <nav class="membership-parent">
          <a href="#" class="button">MEMBERSHIP</a>
          <a href="./frame-3.php" class="button">LOGIN</a>
          <a href="#" class="button">HOME</a>
          <a href="../portofolio(35)/about-us.php" class="button">ABOUT</a>
        </nav>
      </nav>
    </header>
    <section class="email-nama-container-wrapper">
      <div class="email-nama-container">
        <img class="email-nama-container-child" alt="" src="./public/rectangle-241.svg" />

        <div class="portfolio-display">
          <div class="login-label-parent">
            <div class="login-label">
              <h1 class="login3">
                <p class="login4">login</p>
              </h1>
            </div>
            <h1 class="portofolio11">
              <span>Porto</span>
              <span class="folio4">folio.</span>
            </h1>
          </div>
        </div>
        <form method="post" action="../portofolio(13)/desktop-1.php"> <!-- Tambahkan form dengan method post dan action yang sesuai -->
          <div class="email-nama-container-inner">
            <img class="frame-child" loading="lazy" alt="" src="./public/vector-8.svg" />
          </div>
          <div class="email-field">
            <div class="email2">
              <div class="email-inner"></div>
              <input type="text" name="nama" placeholder="Nama" class="nama1" style="background-color: transparent; border: none; outline: none;" required>
            </div>
          </div>
          <div class="email-field1">
            <div class="email3">
              <div class="email-child1"></div>
              <input type="password" name="password" placeholder="Password" class="password1" style="background-color: transparent; border: none; outline: none;" required>
            </div>
          </div>
          <div class="content-container">
            <button class="vector-parent">
              <img class="frame-item" alt="" src="./public/rectangle-39.svg" />
              <div class="lanjutkan1">Masuk</div>
            </button>
          </div>
        </form>
      </div>
    </section>
  </div>
</body>
</html>
