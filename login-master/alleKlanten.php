<?php

echo "<h1>alle klanten</h1>";

require "Klant.php";
$klant1 = new Klant();
$klant1->alleKlanten();
echo "<br><a href='../src/index.php'>Go back to main menu</a>";