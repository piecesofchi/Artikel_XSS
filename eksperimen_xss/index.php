// Kode yang sudah diperbaiki dan aman
<?php
if (isset($_POST['pesan'])) {
    // Sanitasi input menggunakan htmlspecialchars
    $pesan = htmlspecialchars($_POST['pesan'], ENT_QUOTES, 'UTF-8');
    echo "<p>Pesan baru: " . $pesan . "</p>";
}
?>