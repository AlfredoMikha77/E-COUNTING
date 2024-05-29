<?php 
session_start();
if ($_SESSION['username'] == null) {
    header('location:login.php');
    exit();
}

include 'koneksi.php';

// Mengambil jumlah admin dari database
$query = mysqli_query($koneksi, "SELECT COUNT(*) as total_admin FROM tb_admin");
$data = mysqli_fetch_assoc($query);
$total_admin = $data['total_admin'];

$query_penyedia = mysqli_query($koneksi, "SELECT COUNT(*) as total_penyedia FROM tb_penyedia");
$data_penyedia = mysqli_fetch_assoc($query_penyedia);
$total_penyedia = $data_penyedia['total_penyedia'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/icon.png" />
    <link rel="stylesheet" href="css/admin.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Counting</title>
    <style>
        .card {
            background-color: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .card-content {
            text-align: center;
        }
        .card-content h4 {
            margin: 0;
            font-size: 1.5em;
            color: #333;
        }
        .card-content p {
            margin: 0;
            font-size: 2.5em;
            font-weight: bold;
            color: #4CAF50;
        }
        .card-icon {
            font-size: 4em;
            color: #4CAF50;
        }
        .card-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
                <a href="transaction/transaction.php">
                    <i></i>
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
                <a href="logout.php">
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
            <h2 id="text">
                <?php echo $_SESSION['username']; ?>
            </h2>
            <h3 id="date"></h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-content">
                        <i class="fas fa-users card-icon"></i>
                        <h4>Jumlah Admin</h4>
                        <p><?php echo $total_admin; ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <i class="fas fa-user-tie card-icon"></i>
                        <h4>Jumlah Penyedia Jasa</h4>
                        <p><?php echo $total_penyedia; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };

        function myFunction() {
            const months = ["Januari", "Februari", "Maret", "April", "Mei",
                "Juni", "Juli", "Agustus", "September",
                "Oktober", "November", "Desember"
            ];
            const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis",
                "Jumat", "Sabtu"
            ];
            let date = new Date();
            let jam = date.getHours();
            let tanggal = date.getDate();
            let hari = days[date.getDay()];
            let bulan = months[date.getMonth()];
            let tahun = date.getFullYear();
            let m = date.getMinutes();
            let s = date.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById("date").innerHTML = `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
            requestAnimationFrame(myFunction);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
        window.onload = function() {
            let date = new Date();
            let jam = date.getHours();
            if (jam >= 4 && jam <= 10) {
                document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Pagi,");
            } else if (jam >= 11 && jam <= 14) {
                document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Siang,");
            } else if (jam >= 15 && jam <= 18) {
                document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Sore,");
            } else {
                document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Malam,");
            }
            myFunction();
        };
    </script>
</body>

</html>
