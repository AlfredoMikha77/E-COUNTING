<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan</title>
    <link rel="stylesheet" href="css/layanan.css">
    <link rel="stylesheet" href="css/admin.css"> <!-- tambahkan link ke admin.css -->
</head>

<body>
    <div class="top-bar">
        <div class="admin-indicator">
            <span class="admin-text">Layanan</span>
        </div>
        <div class="profile-details">
            <span class="admin_name">Admin</span>
        </div>
    </div>
    <div class="content">
        <h1>Layanan</h1>
        <table class="table-data">
            <thead>
                <tr>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Manajemen pabrik</td>
                    <td>kami dapat melayani anda dengan baik</td>
                    <td>500k/month</td>
                    <td>
                        <button class="btn-edit" onclick="editCategory()">Edit</button>
                        <button class="btn-delete" onclick="deleteCategory()">Hapus</button>
                    </td>
                </tr>
                <!-- Tambahkan baris tabel sesuai kebutuhan -->
            </tbody>
        </table>
        <div class="button-container">
            <button class="btn-back" onclick="goToAdmin()">Kembali ke Admin</button>
            <button class="btn-tambah" onclick="goToTambahData()">Tambah Data</button>
        </div>
    </div>

    <script>
        function editCategory() {
            
        }

        function deleteCategory() {
            
        }

        function goToAdmin() {
            window.location.href = "admin.php"; 
        }

        function goToTambahData() {
            window.location.href = "tambah.php"; 
        }
    </script>
</body>

</html>