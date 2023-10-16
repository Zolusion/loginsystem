<?php

require "Klant.php";
echo "<h1>Je bent ingelogd</h1>";

$email = $_POST["emailvak"];
$password = $_POST["passwordvak"];

$klant1 = new Klant($email, $password);
if(empty($email) || empty($password)){
    echo "<script>
            alert('Info missing, try again.')
            window.location.replace('inlogForm1.php')
</script>";
}else{
    $klant1->login();
}

echo "<br><a href='../admin/dashboard.php'>Go to dashboard</a>";