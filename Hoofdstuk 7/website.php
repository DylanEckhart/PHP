<?php
    session_start();

    if (isset($_SESSION["gebruiker"])) {
        echo "<h1>Welkom ".$_SESSION["gebruiker"]. " op de website!";
    } else {
        header('location: index.php');
    }
