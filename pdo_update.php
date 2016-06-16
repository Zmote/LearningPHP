<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="myDBPDO";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE MyGuests SET firstname = 'ZaferUpdated' WHERE id = 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo $stmt->rowCount() . " records UPDATED successfully";
}catch(PDOException $ex){
    echo $sql . "<br>" . $ex->getMessage();
}

$conn = null;