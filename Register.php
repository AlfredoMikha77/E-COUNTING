<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <link rel="stylesheet" href="css/register.css">
</head>
<body>
  <div class="container">
    <header>
      <nav>
        <div class="logo">
          <img src="assets/logo.jpg" alt="Logo" />
        </div>
       
        <label for="click" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Categories</a></li>
          <li><a href="Login.php" class="btn_login">Login</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="center">
        <div class="form-login">
          <h3>Register</h3>
          <form action="register-proses.php" method="post">
            <input class="input" type="email" name="email" placeholder="Email" required />
            <input class="input" type="text" name="username" placeholder="Username" required />
            <input class="input" type="password" name="password" placeholder="Password" required />
            <button type="submit" class="btn_login" name="register" id="register">Register</button>
          </form>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
