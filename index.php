<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/ecount.jpeg">
    <title>E-Counting</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
        /* Add CSS to style the popup box */
        .popup-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            display: none; /* Hide popup by default */
        }
        .popup-box .popup-content {
            text-align: center;
        }
        .popup-box h2 {
            margin-top: 0;
        }
        .popup-box a {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/ecount.jpeg" alt="" weight="80" height="80">
        </div>
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="admin.php">Service</a>
            <!-- Change the id of login button to trigger the popup -->
            <a href="#" id="loginBtn">Login</a>
        </div>
    </header>
    <main>
        <center>
            <h1>
                E-Counting
            </h1>
            <p>Konsultan Akutansi Terpercaya</p>
            <div class="carousel-container">
                <div class="carousel-slide">
                    <div class="slide">
                        <img class="slide-image" src="assets/slide1.jpg" alt="Slide 1">
                    </div>
                    <div class="slide">
                        <img class="slide-image" src="assets/slide2.jpeg" alt="Slide 2">
                    </div>
                    <div class="slide">
                        <img class="slide-image" src="assets/slide3.jpeg" alt="Slide 3">
                    </div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <script>
                var slideIndex = 1;
                function showSlides(n) {
                    var slides = document.getElementsByClassName("slide");
                    if (n > slides.length) {
                        slideIndex = 1;
                    }
                    if (n < 1) {
                        slideIndex = slides.length;
                    }
                    for (var i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slides[slideIndex - 1].style.display = "block";
                }
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }
                showSlides(slideIndex);
            </script>
        </center>
        <div class="single-page">
            <div class="site">
                <h2>Pentingnya Jasa Akuntan yang berkualitas</h2>
                <p>Dengan jasa akuntan yang berkualitas, bisnis Anda akan mendapatkan lebih dari sekadar pencatatan keuangan. Kami menawarkan pemahaman mendalam tentang industri Anda, kepatuhan terhadap regulasi yang berlaku, dan analisis keuangan yang mendalam untuk membantu Anda mengoptimalkan kinerja keuangan dan mengambil keputusan yang tepat. Dengan fokus pada pengendalian risiko dan optimalisasi keuangan, kami bertujuan untuk membantu bisnis Anda mencapai tujuan mereka dengan lebih efisien dan efektif. Dengan layanan kami, Anda dapat memiliki keyakinan bahwa aspek keuangan bisnis Anda ditangani dengan cermat dan profesional, memberi Anda ruang untuk berkembang</p>
                <img src="assets/akuntansi.jpg" alt="" height="200">
            </div>
            <div class="site">
                <h2>Konsultan Akuntansi E-COUNTING</h2>
                <p>E-COUNTING menawarkan layanan konsultan akuntansi yang diperkuat dengan fokus pada kualitas dan ketepatan. Tim akuntan kami memiliki pengalaman yang luas dan pemahaman yang mendalam mengenai dinamika bisnis lokal. Kualifikasi dari layanan konsultan akuntansi yang disediakan oleh Basic Accounting memungkinkan untuk optimalisasi pelaporan keuangan yang detail, sejalan dengan prinsip checks and balances yang dapat meningkatkan integritas perusahaan dalam memenuhi kewajiban regulasi yang berlaku.</p>
                <img src="assets/akuntan.webp" alt="" height="200">
            </div>
        </div>
        <div class="container">
            <h1>Mengapa HARUS E-COUNTNG</h1>
        </div>
        <table>
            <tr>
                <td>
                    <h3>Layanan Berkualitas</h3>
                    <p>Kami menyediakan layanan terbaik dengan memahami sepenuhnya kebutuhan bisnis Anda. Setiap solusi yang kami tawarkan dirancang khusus untuk mengatasi tantangan yang dihadapi oleh bisnis Anda.</p>
                </td>
                <td>
                    <h3>Akuntan profesional</h3>
                    <p>Dengan dedikasi penuh, kami memastikan kepuasan pelanggan sebagai prioritas utama. Layanan kami mencakup berbagai aspek, mulai dari jasa akuntansi, pelaporan pajak, hingga audit keuangan, semuanya disajikan dengan profesionalitas dan ketelitian tinggi.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Hemat dan Terjangkau</h3>
                    <p>Kami menyadari pentingnya efisiensi dalam bisnis Anda. Dengan bantuan konsultan akuntansi dan pajak kami, Anda tidak hanya dapat menghemat biaya, tetapi juga waktu berharga Anda, sehingga Anda dapat fokus pada pengembangan bisnis Anda tanpa khawatir tentang urusan keuangan.</p>
                </td>
                <td>
                    <h3>Berpengalaman</h3>
                    <p>Dipandu oleh tim yang berpengalaman, kami telah membantu berbagai bisnis untuk mencapai keberhasilan finansial. Dengan pemahaman mendalam tentang dinamika bisnis dan peraturan perpajakan yang berlaku, kami siap memberikan solusi yang sesuai dengan kebutuhan spesifik bisnis Anda.</p>
                </td>
            </tr>
        </table>
        <div class="container">
            <p>Belum memiliki akun? Daftar sekarang!</p>
            <button id="registerBtn" class="btn_register">Daftar Sekarang!</button>
        </div>
    </main>
    <footer>
        <div class="footer">
        </div>
    </footer>
    
    <!-- Add popup box after the footer -->
    <div id="popupBox" class="popup-box">
        <div class="popup-content">
            <h2>Belum punya akun?</h2>
            <p>Silakan daftar terlebih dahulu untuk mengakses layanan kami.</p>
            <a href="register.php" class="btn_register">Daftar Sekarang!</a>
        </div>
    </div>

    <script>
        // Add JavaScript to show the popup box when the login button is clicked
        var loginBtn = document.getElementById("loginBtn");
        loginBtn.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default link behavior
            document.getElementById('popupBox').style.display = 'block'; // Show popup box
        });

        // Add JavaScript to hide the popup box when the register button is clicked
        document.getElementById('registerBtn').addEventListener('click', function() {
            document.getElementById('popupBox').style.display = 'none';
        });

        // Add JavaScript for the onload event to hide the popup box when the page is loaded
        window.addEventListener('load', function() {
            document.getElementById('popupBox').style.display = 'none';
        });
    </script>
</body>
</html>
