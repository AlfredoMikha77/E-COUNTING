<?php
// Cek apakah cookie dengan nama 'user' telah disetel
if(isset($_COOKIE['user'])) {
    $username = $_COOKIE['user'];
    echo "Cookie 'user' telah disetel. Nilainya adalah: " . $username;
} else {
    echo "Cookie 'user' tidak ditemukan.";
}
?>
