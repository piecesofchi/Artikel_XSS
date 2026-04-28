<form method="POST" action="">
    <input type="text" name="pesan" placeholder="Ketik pesan lucu di sini..." required>
    <button type="submit">Kirim Pesan</button>
</form>

<?php
if (isset($_POST['pesan'])) {
    $pesan = $_POST['pesan']; // Input diterima mentah-mentah
    echo "<p>Pesan baru: " . $pesan . "</p>"; // Langsung dicetak ke layar
}
?>