<?php
require "Database.php";

$db = new Database;

$koneksi = $db->koneksi();

$sql = "SELECT * FROM users";

$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>";
        echo "id : ". $row['id'];
        echo "<br>";
        echo "nama : ". $row['firstname']. " ". $row['lastname'];
        echo "<br>";
        echo "email : ". $row['email'];
    }
}else{
    echo "data 0";
}

$db->close();