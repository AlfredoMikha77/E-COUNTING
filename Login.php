<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="stylesheet" href="css/index.css" />
</head>
<body>
  <div class="container">
    <header>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="register.php" class="btn_register">Register</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="center">
        <div class="form-login">
          <h3>Login</h3>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> <!-- Tambahkan action dan method -->
            <input class="input" type="text" name="username" placeholder="Username" />
            <input class="input" type="password" name="password" placeholder="Password" />
            <button type="submit" class="btn_login">Login</button> <!-- Ubah link menjadi button dan tambahkan type submit -->
          </form>
          <a href="register.php" class="link-register">Register Here</a>
        </div>
      </div>
    </main>
  </div>
  
  <?php
    session_start(); 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = htmlspecialchars($_POST['username']); // Amanankan input username
        $password = htmlspecialchars($_POST['password']); // Amanankan input password
        $validUsername = "Alfred"; // Ubah username yang valid
        $validPassword = "alfred123"; // Ubah password yang valid

        if ($username === "" || $password === "") {
            echo "<script>alert('Isi semua data terlebih dahulu.');</script>";
        } elseif ($username === $validUsername && $password === $validPassword) {
            $_SESSION['user'] = $username;

            // Set cookie untuk menyimpan username
            $cookie_name = "user";
            $cookie_value = $username;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');

            echo "<script>alert('Login berhasil!'); window.location.href = 'admin.php';</script>";
            exit();
        } else {
            echo "<script>alert('Username atau password salah.'); window.location.href = 'login.php';</script>";
            exit();
        }
    }
  ?>
</body>
</html>
