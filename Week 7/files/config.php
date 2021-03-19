<?php
	define('db_host', 'mysql');
	define('db_user', 'root');
	define('db_pass', 'root');
	define('db_name', 'crud');
	
	class db_connect{	
		public $host = db_host;
		public $user = db_user;
		public $pass = db_pass;
		public $dbname = db_name;
		public $conn;
		public $error;
		
		public function connect(){
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database" . $this->connect->connect_error();
				return false;
			}
		}
	}	
?>