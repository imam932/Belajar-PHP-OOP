<?php 
class Database{
 
    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $dbname = "db_coba";
	var $result = "";
 
	function __construct(){
		$this->result = new mysqli(
			$this->servername, 
			$this->username,
			$this->password,
			$this->dbname
		);

	}

	public function connect()
	{
		if($this->result->connect_error){
			die("Koneksi database MySQL dan PHP Gagal ");
		}

		return $this->result;
	}

	public function destroy()
	{
		$this->result->close();
	}
} 