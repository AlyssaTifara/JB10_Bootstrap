<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prakwebdb";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk membuat tabel 'user'
$sql = "CREATE TABLE user (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Eksekusi query
if (mysqli_query($conn, $sql)) {
    echo "Tabel user berhasil dibuat";
} else {
    echo "Error membuat tabel: " . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);
?>
