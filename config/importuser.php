<?php
require "Database.php";

$db = new Database;

$koneksi = $db->connect();
if ($koneksi->connect_error){
    die ("Connection failed: " . $koneksi->connect_error);
}

$sql = "INSERT INTO login (
Nama,
Username,
Pasword
)VALUES (
    'joko', 
    'joko123', 
    'qwerty123'
)";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil di buat";
  } else {
    echo "Data Error: " . $koneksi->error;
  }
  
  $koneksi->close();