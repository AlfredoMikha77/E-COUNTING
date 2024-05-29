<?php 
include '../koneksi.php';

function upload() {
    $namaFile = $_FILES['photo']['name'];
    $error = $_FILES['photo']['error'];
    $tmpName = $_FILES['photo']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "
            <script>
                alert('Gambar Harus Diisi');
                window.location = 'penyedia-entry.php';
            </script>
        ";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstentiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar, $ekstentiGambarValid)) {
        echo "
            <script>
                alert('File Harus Berupa Gambar');
                window.location = 'penyedia-entry.php';
            </script>
        ";
        return null;
    }

    // lolos pengecekan, upload gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    $oke =  move_uploaded_file($tmpName, '../img_penyedia/' . $namaFileBaru);
    return $namaFileBaru;
}

if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $photo = upload();

    if(!$photo) {
        return false;
    }

    $sql = "INSERT INTO tb_penyedia VALUES(NULL, '$photo', '$nama', '$harga', '$deskripsi')";

    if(empty($nama) || empty($harga) || empty($deskripsi)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'penyedia-entry.php';
            </script>
        ";
    } elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Penyedia Berhasil Ditambahkan');
                window.location = 'penyedia.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'penyedia-entry.php';
            </script>
        ";
    }
} elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $photoLama = $_POST['photoLama'];

    // cek apakah user pilih gambar atau tidak
    if($_FILES['photo']['error']) {
        $photo = $photoLama;
    } else {
        // foto lama akan dihapus dan diganti foto baru
        unlink('../img_penyedia/' . $photoLama);
        $photo = upload();
    }

    $sql = "UPDATE tb_penyedia SET 
            photo = '$photo',
            nama = '$nama',
            harga = '$harga',
            deskripsi = '$deskripsi'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Penyedia Berhasil Diubah');
                window.location = 'penyedia.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'penyedia-edit.php';
            </script>
        ";
    }
} elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    // hapus gambar
    $sql = "SELECT * FROM tb_penyedia WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    $photo = $row['photo'];
    unlink('../img_penyedia/' . $photo);

    $sql = "DELETE FROM tb_penyedia WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Penyedia Berhasil Dihapus');
                window.location = 'penyedia.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Penyedia Gagal Dihapus');
                window.location = 'penyedia.php';
            </script>
        ";
    }
} else {
    header('location: penyedia.php');
}
?>
