<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
  
   <link rel="stylesheet" href="../css/admin.css" />


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
            <i ></i>
         </div>
         <div class="profile-details">
            <span class="admin_name"> Admin</span>
         </div>
      </nav>
      <div class="home-content">
         <h3>Transaction</h3>
         <table class="table-data">
            <thead>
               <tr>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Kategori Layanan</th>
                  <th>Harga</th>
                  <th>Status</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>10-07-2024</td>
                  <td>Alfredo</td>
                  <td>Akutansi Digital</td>
                  <td>5000000</td>
                  <td>
                     <p class="success">Success</p>
                  </td>
                  <td>
                     <button class="btn_detail"
                        onclick="showDetails('10-07-2024', 'Alfredo','Akutansi Digital','5000000', 'Success')">Detail</button>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </section>
   <script>
      function showDetails(tanggal, nama, kategori, harga, status) {
         alert(`Tanggal: ${tanggal}\nNama: ${nama}\nKategori: ${kategori}\nHarga: ${harga}\nStatus: ${status}`);
      }
   </script>
</body>

</html>
