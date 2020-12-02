<?php

function login($email, $wachtwoord) {
    $accounts = array();
    array_push($accounts, array("piet@worldonline.nl", "doetje123"));
    array_push($accounts, array("klaas@carpets.nl", "snoepje777"));
    array_push($accounts, array("truushendriks@wegweg.nl", "arkiearkie201"));

    if (in_array(array($email, $wachtwoord), $accounts)) {
        return true;
    } else {
        return false;
    }
}

if(!isset($_POST['submit'])) {
    if (login($_POST['email'], $_POST['password'])) {
        echo "Welkom!";
    } else {
        echo "Sorry, geen toegang!";
    }
}