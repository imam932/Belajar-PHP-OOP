<?php
require "./config/Database.php";

$db = new Database;

$db_connect = $db->connect();

$sql = "SELECT * FROM users";

$result = $db_connect->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<br>";
        echo "id : ". $row['id'];
        echo "<br>";
        echo "nama : ". $row['fistname']. " + ". $row['lastname'];
        echo "<br>";
        echo "email : ". $row['email'];
    }

}else{
    echo "data 0";
}

$db->close();