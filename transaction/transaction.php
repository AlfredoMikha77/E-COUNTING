<?php
session_start();
if ($_SESSION['username'] == null) {
    header('location:../login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/admin.css" />
    <title>E-Counting</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i></i>
            <span class="logo_name">E-Counting</span>
        </div>
        <ul class="nav-links">
        <li>
                <a href="#" class="active">
                    <i></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../transaction/transaction.php">
                    <i></i>
                    <span class="links_name">Layanan Transaksi</span>
                </a>
            </li>
            <li>
                <a href="../penyedia/penyedia.php">
                    <i></i>
                    <span class="links_name">Penyedia</span>
                </a>
            </li>
            <li>
                <a href="../cetak-transaksi-penyedia/transaksi-penyedia.php">
                    <i></i>
                    <span class="links_name">Transaksi Penyedia</span>
                </a>
            </li>
            <li>
                <a href="../logout.php">
                    <i></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">Admin</span>
            </div>
        </nav>
        <div class="home-content">
            <button type="button" class="btn btn-tambah">
                <a href="../layanan/layanan-entry.php">Tambah Data</a>
            </button>
            <button type="button" class="btn btn-cetak">
                <a href="transaction-proses.php" target="_blank">Cetak PDF</a>
            </button>
            <table class="table-data">
                <thead>
                    <tr>
                        <th scope="col" style="width: 20%">Foto</th>
                        <th>kategori pelayanan</th>
                        <th scope="col" style="width: 30%">Deskripsi</th>
                        <th scope="col" style="width: 15%">Harga</th>
                        <th scope="col" style="width: 20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $sql = "SELECT * FROM tb_layanan";
                    $result = mysqli_query($koneksi, $sql);
                    if (mysqli_num_rows($result) == 0) {
                        echo "
                           <tr>
                                <td colspan='5' align='center'>
                                    Data Kosong
                                </td>
                           </tr>
                        ";
                    }
                    while ($data = mysqli_fetch_assoc($result)) {
                        echo "
                            <tr>
                                <td>
                                    <img src='../img_layanan/$data[photo]' width='200px'>
                                </td>
                                <td>$data[layanan]</td>
                                <td>$data[deskripsi]</td>
                                <td>$data[harga]</td>
                                <td>
                                    <div class='action-buttons'>
                                        <a class='btn-edit' href='../layanan/edit.php?id=$data[id]'>Edit</a>
                                        <a class='btn-delete' href='../layanan/hapus.php?id=$data[id]'>Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
