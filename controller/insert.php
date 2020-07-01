<?php
$servername = "localhost";
$username = "root";
$password = "nawawi932";
$database = "db_rakryan";


$koneksi = new mysqli($servername, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Connection Error : ". $koneksi->connect_error);
}

$sql = "INSERT INTO users (
    fistname,
    lastname,
    email
) VALUES (
    'Imam',
    'nawawi',
    'nawawi932@gmail.com'
)";

if ($koneksi->query($sql) === TRUE) {
    echo "data berhasil di simpan";
}else{
    echo "Error: ". $koneksi->error;
}

$koneksi->close();