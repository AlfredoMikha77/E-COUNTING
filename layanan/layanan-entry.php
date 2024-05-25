<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8" />
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
				<a href="../admin.php" class="active">
				<i ></i>
					<span class="links_name">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="../layanan/layanan.php">
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
				<a href="#">
				<i ></i>	
					<span class="links_name">Log out</span>
				</a>
			</li>
		</ul>
	</div>
	<section class="home-section">
		<nav>
			<div class="sidebar-button">
				
				<span class="menu-icon"></span>
			</div>
			<div class="profile-details">
				<span class="admin_name"> Admin</span>
			</div>
		</nav>
		<div class="home-content">
			<h3>Input Layanan</h3>
			<div class="form-login">
				<form action="layanan-proses.php" method="post" enctype="multipart/form-data">
					<label for="layanan">Layanan</label>
					<input class="input" type="text" name="layanan" id="layanan" placeholder="Layanan" />
					<label for="harga">Harga</label>
					<input class="input" type="text" name="harga" id="harga" placeholder="Harga" />
					<label for="deskripsi">Deskripsi</label>
					<input class="input" type="text" name="deskripsi" id="deskripsi" placeholder="Deskripsi" />
					<label for="photo">Photo</label>
					<input type="file" name="photo" id="photo" style="margin-bottom: 20px" />
					<button type="submit" class="btn btn-simpan" name="simpan">
						Simpan
					</button>
				</form>
			</div>
		</div>
	</section>
	
</body>

</html>
