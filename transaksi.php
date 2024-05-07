<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="css/transaksi.css">
</head>

<body>
    <div class="top-bar">
        <div class="admin-indicator">
            <span class="admin-text">Transaksi</span>
        </div>
        <div class="profile-details">
            <span class="admin_name">Admin</span>
        </div>
    </div>
    <div class="container">
        <h1>Transaksi</h1>
        <table class="table-data">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Jenis Layanan</th>
                    <th>Harga</th>
                    <th>Keterangan Transaksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01/01/2024</td>
                    <td>John Doe</td>
                    <td>Manajemen Pabrik</td>
                    <td>$500</td>
                    <td>Pembayaran lunas</td>
                </tr>
                <!-- Tambahkan baris tabel sesuai kebutuhan -->
            </tbody>
        </table>
        <button class="btn-back" onclick="goToAdmin()">Kembali ke Admin</button>
    </div>

    <script>
        function goToAdmin() {
            window.location.href = "admin.php"; // Redirect ke halaman admin
        }
    </script>
</body>

</html>