<?php
	include("database.php");

	class User {
		protected $phone;
		protected $role;

		function __construct($phone, $role) {
			$this->phone = $phone;
			$this->role = $role;
			$db = new Database();
		}

		public function getData() {
			return array($this->phone, $this->role);
		}
	}

	class Admin extends User {
		protected $username;
		protected $fullname;
		protected $address;
		protected $password;
		protected $gaji;

		function __construct($username, $fullname, $address, $password, $gaji, $phone, $role) {
			User::__construct($phone, $role);
			$this->username = $username;
			$this->fullname = $fullname;
			$this->address = $address;
			$this->password = md5($password);
			$this->gaji = $gaji;
		}

		public function getData() {
			return array($this->username, $this->fullname, $this->address, $this->gaji, $this->phone);
		}

		public function login() {

		}

		public function logout() {

		}

		public function addMember() {

		}

		public function editMember() {

		}

		public function deleteMember() {

		}

		public function createOrder() {

		}

		public function updateOrder() {

		}
	}

	class Customer extends User {
		private $isMember;

		function __construct($phone, $role, $isMember) {
			User::__construct($phone, $role);
			$this->isMember = $isMember;
		}
		
		public function getData() {
			return array($this->isMember, $this->phone);
		}

		public function trackOrder($order_id) {
			$query = "SELECT * FROM 'orders' WHERE id = $order_id";
			$res = mysqli_query($db.connect_db(), $query);
			return $res;
		}
	}

	class CEO extends Admin {
		public function addAdmin() {

		}

		public function editAdmin() {

		}

		public function deleteAdmin() {

		}

		public function verifyExpenses() {
			$query = "UPDATE 'expenses' SET status = 'verified' WHERE id = $expense_id";
			$res = mysqli_query($db.connect_db(), $query);
			return $res;
		}
	}

	class Supervisor extends Admin {
		public function requestExpenses($expense_id) {
			$query = "SELECT * FROM 'expenses' WHERE id = $expense_id";
			$res = mysqli_query($db.connect_db(), $query);
			return $res;
		}
	}
?>