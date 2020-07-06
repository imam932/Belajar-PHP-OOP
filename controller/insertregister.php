<?php
session_start();
require "./../config/Database.php";

$db = new Database;

$koneksi = $db->connect();

$Name           = $_POST['name'];
$nohp           = $_POST['nohp'];
$Email          = $_POST['email'];
$jeniskelamin   = $_POST['optradio'];
$tanggal        = $_POST['ttl'];
$alamat         = $_POST['alamat'];
$pasword        = $_POST['password'];

$sql = "INSERT INTO registerr 
        SET
        Nama='$Name',
        No_hp='$nohp',
        Email='$Email',
        Jenis_kelamin='$jeniskelamin',
        Tanggal_lahir='$tanggal',
        Alamat='$alamat',
        Pasword='$pasword'
        ";
if ($koneksi->query($sql) === TRUE) {
    echo "data berhasil di simpan";
}else{
    echo "Error: ". $koneksi->error;
}