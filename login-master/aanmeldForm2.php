<?php

require "Klant.php";
echo "<h1>Aanmeldformulier klant 2</h1>";

// read array from form 1
$email = $_POST["emailvak"];
$password = $_POST["passwordvak"];

$klant1 = new Klant($email, $password);

if(empty($email) || empty($password)){
    echo "<script>
            alert('Missing info, try again')
            window.location.replace('aanmeldForm1.php')
            </script>";
}else{
    $klant1->controleer();
    $klant1->register();
    echo "<br>";
    $klant1->login();
}

echo "<br><a href='../src/index.php'>Go back to main menu</a>";