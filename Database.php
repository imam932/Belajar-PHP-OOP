<?php 
class Database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "nawawi932";
	var $database = "db_rakryan";
	var $koneksi = "";
 
	function __construct(){
		$this->koneksi = new mysqli(
			$this->host, 
			$this->username,
			$this->password,
			$this->database
		);

	}

	public function koneksi()
	{
		if($this->koneksi->connect_error){
			die("Koneksi database MySQL dan PHP Gagal ");
		}

		return $this->koneksi;
	}

	public function destroy()
	{
		$this->koneksi->close();
	}
} 