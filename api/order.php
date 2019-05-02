<?php
    include("database.php");

    class Order {
        protected $id;
        protected $dateCreated;
        protected $dateFinished;
        protected $customerName;
        protected $perfume;
        protected $price;
        protected $isPaid;
        protected $isFinished;

        function __construct() {
            $db = new Database();
        }

        // public function createOrder();
        // public function editOrder();
        // public function deleteOrder(); 
    }

    class Satuan extends Order {
        private $qty;
        private $type;

        public function createOrder() {
            $id = $this->id;
            $dateCreated = $this->dateCreated;
            $dateFinished = $this->dateFinished;
            $customerName = $this->customerName;
            $perfume = $this->perfume;
            $price = $this->price;
            $isPaid = $this->isPaid;
            $isFinished = $this->isFinished;

            if($request){
                $query = mysqli_query($connect,"INSERT INTO mahasiswa (userid, password, nama_mhs, nim, mayor, semester, ipk, ukt, alamat, telepon) VALUES ('$userid', '$passencrypt', '$nama_mhs', '$nim', '$mayor', '$semester', '$ipk', '$ukt', '$alamat', '$telepon') ");
                if($query){
                    $data = array(
                        'message' => "Register Success!",
                        'status' => "200"
                    );
                }
                else {
                    $data = array(
                        'message' => "Register Failed!",
                        'status' => "404"
                    ); 
                }
            }
            else {
                $data = array(
                    'message' => "No Data!",
                    'status' => "503"
                ); 
            }
            echo json_encode($data);
        }

        public function editOrder() {

        }

        public function deleteOrder() {

        }
    }

    class Kiloan extends Order {
        private $weight;
        private $service;

        public function createOrder() {

        }

        public function editOrder() {

        }

        public function deleteOrder() {
            
        }
    }
?>