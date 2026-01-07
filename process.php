<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $name = htmlspecialchars(trim($_POST['name']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (strlen($name) < 3) {
        echo "<p>Nama harus minimal 3 karakter.</p>";
        echo "<a href='index.php'>Kembali ke form</a>";
        exit;
    }

    if (strlen($message) < 10) {
        echo "<p>Pesan harus minimal 10 karakter.</p>";
        echo "<a href='index.php'>Kembali ke form</a>";
        exit;
    }

    echo "<h2>Terima kasih, $name</h2>";
    echo "<p>Pesan Anda:</p>";
    echo "<p>$message</p>";

} else {
    echo "<p>Akses tidak valid.</p>";
}
?>