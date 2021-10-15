<?php 

// data formulir
if(isset($_POST['submit'])){
    $records = $_POST;
    
    // insert data ke db
    try{
        $conn = new PDO("mysql:host=127.0.0.1;dbname=u3797824_ktta", 'u3797824_admin', 'LkFEN6xyNAqjUJa');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO bebas_akses (email, npm, nama_lengkap, kelas, pilihan_akses)
        VALUES ('". $records['email'] ."', '". $records['npm'] ."', '". $records['nama_lengkap'] ."', '". $records['kelas'] ."', '". $records['pilihan_akses'] ."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    } catch(PDOException $e){
        echo 'maap tidak tercatat';
    }
}

?>