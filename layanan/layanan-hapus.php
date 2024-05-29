<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
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
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="stylesheet" href="../css/admin.css" /> 
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
		<a href="../transaction/transaction.php">
		   <i ></i>
		   <span class="links_name">Layanan Transaksi</span>
		</a>
	   </li>
	   <li>
                <a href="penyedia/penyedia.php">
                    <i></i>
                    <span class="links_name">Penyedia</span>
                </a>
            </li>
			<li>
                <a href="cetak-transaksi-penyedia/transaksi-penyedia.php">
                    <i></i>
                    <span class="links_name">Transaksi Penyedia</span>
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
		<i ></i>
	   </div>
	   <div class="profile-details">
		<span class="admin_name">Admin</span>
	   </div>
	</nav>
	<div class="home-content">
	   <h3>Hapus Layanan</h3>
         <div class="form-login">
            <h4>Ingin Menghapus Data ?</h4>
            <form
              action="layanan-proses.php"
              method="post"
              enctype="multipart/form-data"
            >
              <input type="hidden" name="id" value="<?= $data['id'] ?>">
              <button type="submit" class="btn" name="hapus" style="margin-top: 50px;">
			Yes
		  </button>
		  <button type="submit" class="btn" name="tidak">
			No
		  </button>
            </form>
          </div>
	</div>
   </section>
</body>
</html>
