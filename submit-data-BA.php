<?php 

// data formulir
if(isset($_POST['submit'])){
    $records = $_POST;
    
    // insert data ke db
    try{
        $conn = new PDO("mysql:host=localhost;dbname=ktta_adhi", 'root', '');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO bebas_akses (email, npm, nama_lengkap, pilihan_akses)
        VALUES ('". $records['email'] ."', '". $records['npm'] ."', '". $records['nama_lengkap'] ."', '". $records['pilihan_akses'] ."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    } catch(PDOException $e){
        echo 'maap tidak tercatat';
    }
}

?>