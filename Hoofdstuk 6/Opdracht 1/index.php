<?php

// Variabelen
$user = "269218";
$pass = "Dylan2004!";

// Ophalen uit database PHP
try {
    $dbh = new PDO ('mysql:host=localhost;dbname=269218;port=8889', $user = '269218', $pass = 'Dylan2004!');
    foreach ($dbh -> query('SELECT * FROM cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print ("Error!: ".$e -> getMessage(). "<br>");
    die();
}