<?php

// Variabelen
$user = "root";
$pass = "root";

// Ophalen uit database PHP
try {
    $dbh = new PDO ('mysql:host=localhost;dbname=PHP;port=8889', $user, $pass);
    foreach ($dbh -> query('SELECT * FROM cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print ("Error!: ".$e -> getMessage(). "<br>");
    die();
}