<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
    header("Content-Type: application/json;");
    
    include_once 'config/database.php';
    include_once 'class/user.php';

    $database = new DB();
    $db = $database->getConnection();

    $items = new User($db);

    $stmt = $items->getRiwayat();
    $itemCount = $stmt->rowCount();

    if($itemCount > 0){
        
        $userArr = array();
       
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			
            extract($row);
            $e = array(
                "id" => $id,
                "nama" => $nama,
                "alamat" => $alamat,
                "namakk" => $namakk,
                "gender" => $gender,
                "nik" => $nik,
                "bpjs" => $bpjs
            );

            array_push($userArr, $e);
        }
        echo json_encode($userArr);
    }
?>