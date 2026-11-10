<?php
$host = "localhost";
$dbname = "eco"; //<-ชื่อฐานข้อมูล
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connect db";
} catch(PDOException $e) {
    die ("can't connect DB".$e->getMessage());
}

?>