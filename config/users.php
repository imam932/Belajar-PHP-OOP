<?php
require "Database.php";

$db = new Database;

$koneksi = $db->connect();

$sql = "CREATE TABLE dkj (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nama VARCHAR(30) NOT NULL,
    Username VARCHAR(30) NOT NULL,
    Pasword VARCHAR(30) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE
    CURRENT_TIMESTAMP
)";

if ($koneksi->query($sql) === TRUE) {
    echo "table berhasil di buat";
}else{
    echo "table error : ". $koneksi->error;
}

$koneksi->close();