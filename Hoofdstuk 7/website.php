<?php
    session_start();

    if (isset($_SESSION["gebruiker"])) {
        echo "<h1>Welkom ".$_SESSION["gebruiker"]["naam"]. " op de website!</h1>";
    } else {
        header('location: index.php');
    }
