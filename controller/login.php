
<?php
session_start();
require "./../config/Database.php";

$db = new Database;

$koneksi = $db->connect();

$sql = "SELECT * FROM users where Username='$_POST[Username]'and Pasword='$_POST[Pasword]' "; 
$result = $koneksi->query($sql);
//print_r($result->fetch_assoc());
if ($result->num_rows > 0) { 
    echo "berhasil login";
    $data= $result->fetch_assoc();
    $_SESSION['username'] = $data["Username"];
    $_SESSION['nama'] = $data["firstname"];
    $_SESSION['id'] = $data["id"];
    print_r ($_SESSION);
    print_r($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}else {
    echo "Data Error: " . $koneksi->error;
    header("Location:./../view");
}
 
  /*  $sql = "INSERT INTO users (
        firstname,
        lastname,
        email
        )VALUES (
            '$_POST[firstname]', 
            '$_POST[lastname]', 
            '$_POST[email]'
        )";
        if ($koneksi->query($sql) === TRUE) {
            echo "Data berhasil di buat";
          } else {
            echo "Data Error: " . $koneksi->error;
          }
}
*/