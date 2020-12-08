<?php
    session_start();

    $gebruikers = array(
        "Dylan" => array("pwd" => "1234", "rol" => "Admin"),
        "Timo" => array("pwd" => "5678", "rol" => "Admin"),
        "Ishak" => array("pwd" => "4321", "rol" => "Gebruiker"),
    );

    if (isset($_GET["loguit"])) {
        $_SESSION = array();
        session_destroy();
    }

    if (isset($_POST['knop'])
            && isset($gebruikers[$_POST["login"]])
            && $gebruikers[$_POST["login"]] ["pwd"] == $_POST['pwd']) {
        $_SESSION["gebruiker"] = $_POST["login"];
        $message = "Welkom ".$_SESSION["gebruiker"];
    } else {
        $message = "Welkom bij mijn inlogscherm!";
    }
?>

<html>
    <body>
        <h1><?php echo $message; ?></h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="login">Login: </label>
                <input type="text" name="login" value="">
            </div>
            <div class="form-group">
                <label for="pwd">Password: </label>
                <input type="password" name="pwd" value="">
            </div>
            <br>
            <input type="submit" name="knop">
        </form>
        <p><a href="website.php">Website</a></p>
        <p><a href="index.php?loguit">Uitloggen</a></p>
    </body>
</html>