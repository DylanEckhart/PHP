<?php

    $gebruikers = array(
        "Dylan" => "1234",
        "Timo" => "5678",
        "Ishak" => "4321",
    );

    if (isset($_POST['knop'])
            && isset($gebruikers[$_POST["login"]])
            && $gebruikers[$_POST["login"]] == $_POST['pwd']) {
          $_SESSION["gebruiker"] = $_POST["login"];
        $message = "Welkom ".$_SESSION["gebruiker"];
    } else {
        $message = "Inloggen!";
    }
?>
