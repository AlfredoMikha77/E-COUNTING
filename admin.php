<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="css/admin.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="top-bar">
    <div class="admin-indicator">
      <span class="admin-text">Admin</span>
    </div>
    <div class="logout-button">
      <a href="login.php" class="logout-link">
        <i class='bx bx-log-out'></i>
        <span class="logout-text">Log out</span>
      </a>
    </div>
  </div>
  <div class="sidebar">
    <div class="logo-details">
      <img src="assets/ecount.jpeg" alt="Logo" class="logo"/>
    </div>
    <ul class="nav-links">
      <li>
        <a href="admin.php" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="layanan.php">
          <i class='bx bx-box'></i>
          <span class="links_name">Layanan</span>
        </a>
      </li>
      <li>
        <a href="transaksi.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Transaksi</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Admin</span>
      </div>
    </nav>
    <div class="home-content">
      <div class="overview-boxes">
        <h2>Selamat Datang Di Halaman Admin!</h2>
      </div>
    </div>
  </div>
</body>
</html>
