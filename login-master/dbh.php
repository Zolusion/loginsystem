<?php

$servername = "localhost";
$dbname = "fashion-shop";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}
catch (PDOException $e)
{
    echo "Connection failed..." . $e->getMessage();
}