<?php
session_start();
if ($_SESSION['username'] == null) {
    header('location:../login.php');
    exit();
}

include '../koneksi.php';

// Mengambil data dari tabel tb_penyedia
$query = mysqli_query($koneksi, "SELECT * FROM tb_penyedia");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="../assets/icon.png" />
    <link rel="stylesheet" href="../css/admin.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Counting</title>
    <style>
        .blue-button {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        .blue-button:hover {
            background-color: darkblue;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
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
                <i class="sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">Admin</span>
            </div>
        </nav>
        <div class="home-content">
            <h2>Transaksi Penyedia</h2>
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Penyedia</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                </tr>
                <?php
                $no = 1;
                while ($penyedia = mysqli_fetch_array($query)) {
                    echo "<tr>
                            <td>" . $no . "</td>
                            <td>" . $penyedia['nama'] . "</td>
                            <td>" . $penyedia['deskripsi'] . "</td>
                            <td>Rp. " . number_format($penyedia['harga']) . "</td>
                            <td><img src='../img_penyedia/" . $penyedia['photo'] . "' alt='gambar' width='50'></td>
                          </tr>";
                    $no++;
                }
                ?>
            </table>
            <br>
            <a href="transaksi-penyedia-proses.php" target="_blank"><button class="blue-button">Cetak PDF</button></a>
        </div>
    </section>
</body>

</html>
