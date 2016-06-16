<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="myDB";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO MyGuests (firstname,lastname,email)
VALUES (?, ?, ?)");
//sss --> 3x String
$stmt->bind_param("sss",$firstname,$lastname,$email);

$firstname = "John";
$lastname = "Doe";
$email ="john.doe@gmail.com";
$stmt->execute();

$firstname = "Zafer";
$lastname = "Dogan";
$email ="zafer.dogan@gmail.com";
$stmt->execute();

echo "New records created successfully";
$stmt->close();
$conn->close();