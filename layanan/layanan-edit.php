<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if (!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'layanan.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_layanan WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

  session_start();
  if ($_SESSION['username'] == null) {
    header('location:../login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="../assets/icon.png" />
  <link rel="stylesheet" href="../css/admin.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E-Counting</title>
</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
    <i ></i>
      <span class="logo_name">E-Counting</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="../admin.php">
        <i ></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="../layanan/layanan.php" class="active">
        <i ></i>
          <span class="links_name">Layanan</span>
        </a>
      </li>
      <li>
        <a href="../transaction/transaction.php">
        <i ></i>
          <span class="links_name">Transaksi</span>
        </a>
      </li>
      <li>
        <a href="../logout.php">
        <i ></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
      
      </div>
      <div class="profile-details">
        <span class="admin_name"> Admin</span>
      </div>
    </nav>
    <div class="home-content">
      <h3>Input Layanan</h3>
      <div class="form-login">
        <form action="layanan-proses.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $data['id'] ?>">
          <input type="hidden" name="photoLama" value="<?= $data['photo'] ?>">
          <label for="layanan">Layanan</label>
          <input class="input" type="text" name="layanan" id="layanan" placeholder="Layanan" value="<?= $data['layanan'] ?>" />
          <label for="harga">Harga</label>
          <input class="input" type="text" name="harga" id="harga" placeholder="Harga" value="<?= $data['harga'] ?>" />
          <label for="deskripsi">Deskripsi</label>
          <input class="input" type="text" name="deskripsi" id="deskripsi" placeholder="Deskripsi" value="<?= $data['deskripsi'] ?>" />
          <label for="photo">Photo</label>
          <img src="../img_layanan/<?= $data['photo'] ?>" alt="" width="200px">
          <input type="file" name="photo" id="photo" style="margin-bottom: 20px" />
          <button type="submit" class="btn btn-simpan" name="edit">Edit</button>
        </form>
      </div>
    </div>
  </section>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.textContent = "×";
      } else {
        sidebarBtn.textContent = "☰";
      }
    };
  </script>
</body>
</html>
