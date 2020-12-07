<?php

function login ($email, $password){
    $accounts = array();
    array_push($accounts, array("piet@worldonline.nl", "doetje123"));
    array_push($accounts, array("klaas@carpets.nl", "snoepje777"));
    array_push($accounts, array("truushendriks@wegweg.nl", "arkiearkie201"));

    if (in_array(array($email, $password), $accounts)){
        return true;
    } else {
        return false;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulier PHP</title>
</head>
<body>
<?php
    if (!isset($_POST['submit'])){?>
    <form method="post">
        Email:<input type="email" name="email"><br>
        Wachtwoord:<input type="password" name="password"><br>
        <input type="submit" name="submit">
    </form>
<?php
    } else {
        if (login($_POST['email'], $_POST['password'])){
            echo "Welkom!";
        } else {
            echo "Sorry, geen toegang!";
        }
    }
?>
</body>
</html>