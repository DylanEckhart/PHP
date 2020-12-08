<?php
    session_start();

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
</body>
</html>