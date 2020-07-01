<?php 
class Database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "nawawi932";
	var $database = "db_rakryan";
	var $result = "";
 
	function __construct(){
		$this->result = new mysqli(
			$this->host, 
			$this->username,
			$this->password,
			$this->database
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