<?php
    class User{

        // conn
        private $conn;

        // table
        private $dbTable = "user";

        // col
        public $id;
        public $nama;
        public $alamat;
        public $namakk;
        public $gender;
        public $nik;
        public $bpjs;
      
        // db conn
        public function __construct($db){
            $this->conn = $db;
        }

        // GET Users
        public function getUsers(){
            $sqlQuery = "SELECT id, nama, alamat, namakk, gender, nik, bpjs
               FROM " . $this->dbTable . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // CREATE User
        public function createUser(){
            $sqlQuery = "INSERT INTO
                        ". $this->dbTable ."
                    SET
                    nama = :nama, 
                    alamat = :alamat, 
                    namakk = :namakk,
                    gender = :gender,
                    nik = :nik,
                    bpjs = :bpjs";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->nama=htmlspecialchars(strip_tags($this->nama));
            $this->alamat=htmlspecialchars(strip_tags($this->alamat));
            $this->namakk=htmlspecialchars(strip_tags($this->namakk));
            $this->gender=htmlspecialchars(strip_tags($this->gender));
            $this->nik=htmlspecialchars(strip_tags($this->nik));
            $this->bpjs=htmlspecialchars(strip_tags($this->bpjs));
                   
            // bind data
            $stmt->bindParam(":nama", $this->nama);
            $stmt->bindParam(":alamat", $this->alamat);
            $stmt->bindParam(":namakk", $this->namakk);
            $stmt->bindParam(":gender", $this->gender);
            $stmt->bindParam(":nik", $this->nik);
            $stmt->bindParam(":bpjs", $this->bpjs);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

       // GET User
       public function getSingleUser(){
        $sqlQuery = "SELECT
                    id, 
                    nama, 
                    alamat, 
                    namakk,
                    gender,
                    nik,
                    bpjs
                  FROM
                    ". $this->dbTable ."
                WHERE 
                   id = ?
                LIMIT 0,1";

        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $this->nama = $dataRow['nama'];
        $this->alamat = $dataRow['alamat'];
        $this->namakk = $dataRow['namakk'];
        $this->gender = $dataRow['gender'];
        $this->nik = $dataRow['nik'];
        $this->bpjs = $dataRow['bpjs'];
      
    }      
        

        // UPDATE User
        public function updateUser(){
            $sqlQuery = "UPDATE
                        ". $this->dbTable ."
                    SET
                    nama = :nama, 
                    alamat = :alamat, 
                    namakk = :namakk,
                    gender = :gender,
                    nik = :nik,
                    bpjs = :bpjs
                    WHERE 
                        id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->nama=htmlspecialchars(strip_tags($this->nama));
            $this->alamat=htmlspecialchars(strip_tags($this->alamat));
            $this->namakk=htmlspecialchars(strip_tags($this->namakk));
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            // bind data
            $stmt->bindParam(":nama", $this->nama);
            $stmt->bindParam(":alamat", $this->alamat);
            $stmt->bindParam(":namakk", $this->namakk);
            $stmt->bindParam(":gender", $this->gender);
            $stmt->bindParam(":nik", $this->nik);
            $stmt->bindParam(":bpjs", $this->bpjs);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // DELETE User
        function deleteUser(){
            $sqlQuery = "DELETE FROM " . $this->dbTable . " WHERE id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            $stmt->bindParam(1, $this->id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }

		function getRiwayat(){
			$id_user = $_GET['id_user'];
			$sqlQuery = "SELECT *,user.id as id_user FROM user LEFT JOIN riwayat_penyakit ON user.id=riwayat_penyakit.id_user WHERE user.id = $id_user";

			$stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;

			//echo '<pre>';
			//print($stmt);
			//echo'</pre>';
		}
    }
?>