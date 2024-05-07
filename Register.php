<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <link rel="icon" href="assets/icon.png" />
  <link rel="stylesheet" href="css/index.css" />
  <style>
    /* Add CSS to style the popup box */
    .popup-box {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      display: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="login.php" class="btn_login">Login</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="center">
        <div class="form-login">
          <h3>Register</h3>
          <form action="">
            <input class="input" type="email" name="email" placeholder="Email" />
            <input class="input" type="text" name="username" placeholder="Username"/>
            <input class="input" type="password" name="password" placeholder="Password" />
            <!-- Change the type of button to "button" -->
            <button type="button" class="btn_register" name="register" id="register">Register</button>
          </form>
        </div>
      </div>
    </main>
   
  </div>

  <!-- Add a div element to contain the popup box -->
  <div id="popupBox" class="popup-box">
    <p>Anda berhasil register!</p>
    <!-- Change the id to loginBtn -->
    <button id="loginBtn" class="btn_login">Login di sini</button>
  </div>

  <script>
    // Add JavaScript to show the popup box when the register button is clicked
    document.getElementById('register').addEventListener('click', function() {
      document.getElementById('popupBox').style.display = 'block';
    });

    // Add JavaScript to hide the popup box when the login button is clicked
    document.getElementById('loginBtn').addEventListener('click', function() {
      document.getElementById('popupBox').style.display = 'none';
      // Redirect to login.php
      window.location.href = 'login.php';
    });
  </script>
</body>
</html>