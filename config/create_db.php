<?php
$servername = "localhost";
$username = "root";
$password = "nawawi932";


$koneksi = new mysqli($servername, $username, $password);

if ($koneksi->connect_error) {
    die("Connection Error : ". $koneksi->connect_error);
}

// echo "connction success";

$sql = "CREATE DATABASE db_rakryan";
if ($koneksi->query($sql) === TRUE) {
    echo "Database berhasil di buat";
}else{
    echo "database error " . $koneksi->error;
}

$koneksi->close();