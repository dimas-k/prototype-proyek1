<?php
    $host = "localhost";
    $port = 3306;
    $db_name = "siki_percobaan";
    $user = "thunder";
    $password = "polindra123";
    
    try 
    {
        $connection = new PDO("mysql:host=$host:$port;dbname=$db_name", $user, $password);
        // $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
        echo "Koneksi Berhasil!" . PHP_EOL;
    } 
    catch (PDOException $th) 
    {
        echo "Gagal terkoneksi: {$th->getMessage()}" . PHP_EOL; 
    }

    $start = "START TRANSACTION";
    $connection->exec($start);

    $insert = "INSERT INTO ki VALUES (4, 'Sistem d-alle', 'kelompok', 'paten', 'lorem', 'lorem', 5000000)";
    $connection->exec($insert);
    
    $insert = "INSERT INTO ki VALUES (5, 'Sistem ac frezer', 'kelompok', 'paten', 'lorem', 'lorem', 40000000)";
    $connection->exec($insert);

    $insert = "INSERT INTO ki VALUES (6, 'Sistem cloud computing', 'kelompok', 'paten', 'lorem', 'lorem', 3500000)"; 
    $connection->exec($insert);

    $rollback = "COMMIT";
    $connection->exec($rollback);
?>