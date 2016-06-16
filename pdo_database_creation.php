<?php
$servername = "localhost";
$username ="root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=myDBPDO",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    /*
    $sql = "CREATE TABLE MyGuests(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP
            )";
    */
    $sql = "INSERT INTO MyGuests(firstname,lastname,email) VALUES ('Zafer','Dogan','shodaime.hikarikage@gmail.com')";
    $conn->exec($sql);
    echo "New record created successfully";
}catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;