<?php
    include("database.php");

    abstract class Laporan {
        function __construct() {
            $db = new Database();
        }

        abstract function displayLaporan();
    }

    class Pemasukan extends Laporan {
        public function displayLaporan() {
            $query = "SELECT * FROM 'incomes'";
			$res = mysqli_query($db.connect_db(), $query);
			return $res;
        }
    }

    class Pengeluaran extends Laporan {
        public function displayLaporan() {
            $query = "SELECT * FROM 'outcomes'";
			$res = mysqli_query($db.connect_db(), $query);
			return $res;
        }
    }
?>