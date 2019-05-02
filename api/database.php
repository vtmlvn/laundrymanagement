<?php
	class Database {
		
		private $connection;
	
		function __construct()
		{
			$this->connect_db();
		}
	
		public function connect_db(){
			$this->connection = mysqli_connect('localhost', 'root', '', 'launment');
			if(mysqli_connect_error()){
				die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
			}
		}
	}
?>