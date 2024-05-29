<?php
session_start();
if ($_SESSION['username'] == null) {
    header('location:../login.php');
    exit();
}

include '../koneksi.php';
require_once '../vendor/autoload.php';  // Pastikan path ini benar

use Dompdf\Dompdf;

// Create an instance of Dompdf
$dompdf = new Dompdf();

// Query to get data from the table tb_penyedia
$query = mysqli_query($koneksi, "SELECT * FROM tb_penyedia");

// HTML content to be converted to PDF
$html = '
<style>
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
<center><h3>Data Transaksi Penyedia</h3></center><hr/><br>
<table>
    <tr>
        <th>No</th>
        <th>Nama Penyedia</th>
        <th>Deskripsi</th>
        <th>Harga</th>
    </tr>';

$no = 1;
while ($penyedia = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $penyedia['nama'] . "</td>
                <td>" . $penyedia['deskripsi'] . "</td>
                <td>Rp. " . number_format($penyedia['harga']) . "</td>
              </tr>";
    $no++;
}
$html .= "</table>";

// Load the HTML content
$dompdf->loadHtml($html);

// (Optional) Set up the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF (1 = download and 0 = preview)
$dompdf->stream('laporan-transaksi-penyedia.pdf', array("Attachment" => 0));
?>
