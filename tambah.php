<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="css/tambah.css">
    <link rel="stylesheet" href="css/layanan.css"> <!-- Tambahkan link ke layanan.css -->
</head>
<body>
    <div class="top-bar">
        <div class="admin-indicator">
            <span class="admin-text">Tambah Data</span>
        </div>
        <div class="profile-details">
            <span class="admin_name">Admin</span>
        </div>
    </div>
    <div class="container">
        <h1>Tambah Data</h1>
        <form id="dataForm">
            <div class="form-group">
                <label for="kategori">Kategori:</label>
                <input type="text" id="kategori" name="kategori" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" id="harga" name="harga" required>
            </div>
            <div class="button-container">
                <button type="button" onclick="simpanData()">Simpan</button>
                <button type="button" onclick="resetForm()">Reset</button>
                <button type="button" onclick="kembali()">Kembali</button>
            </div>
        </form>
    </div>

    <script>
        function simpanData() {
            // Lakukan logika untuk menyimpan data ke halaman Layanan (layanan.php)
            // Serta tampilkan notifikasi "Data berhasil disimpan"
            alert("Data berhasil disimpan");
        }

        function resetForm() {
            // Reset nilai pada form
            document.getElementById("dataForm").reset();
        }

        function kembali() {
            // Kembali ke halaman Layanan (layanan.php)
            window.location.href = "layanan.php";
        }
    </script>
</body>
</html>
