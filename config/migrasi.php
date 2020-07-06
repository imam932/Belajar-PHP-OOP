<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_coba";


$koneksi = new mysqli($servername, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Connection Error : ". $koneksi->connect_error);
}

// membuat table
$sql = "CREATE TABLE coba (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fistname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE
    CURRENT_TIMESTAMP
)";

if ($koneksi->query($sql) === TRUE) {
    echo "table berhasil di buat";
}else{
    echo "table error : ". $koneksi->error;
}

$koneksi->close();