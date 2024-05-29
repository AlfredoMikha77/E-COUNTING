<?php 
include '../koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM tb_penyedia WHERE id = $id";
if (mysqli_query($koneksi, $sql)) {
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
?>
