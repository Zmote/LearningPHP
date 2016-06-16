<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname ="myDBPDO";

try{
    $conn = new PDO("mysql:hostname=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM MyGuests LIMIT 15";
    $result = $conn->query($sql);
    echo "Returned row count: " . $result->rowCount();
}catch(PDOException $ex){
    echo $sql . "<br>" . $ex->getMessage();
}

$conn = null;