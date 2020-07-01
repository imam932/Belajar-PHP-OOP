<?php
require 'Database.php';

$db = new Database;

$koneksi = $db->koneksi();

var_dump($koneksi);
