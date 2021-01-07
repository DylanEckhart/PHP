
<?php

include_once("autoFilter.php");

$banddikte = isset($_GET["banddikte"]) ? $_GET["banddikte"] : "";
$merk = isset($_GET["merk"]) ? $_GET["merk"] : "";
$minprijs = isset($_GET["min-prijs"]) ? $_GET["min-prijs"] : 0;
$maxprijs = isset($_GET["max-prijs"]) ? $_GET["max-prijs"] : 99999999999999;

$autoOverzicht = new autoOverzicht();
$autoOverzicht->voegAutoToe(new autoFilter("Dun", "Audi", "R8", 30000, "https://www.autospectrum.nl/wp-content/uploads/2019/02/audi-r8-v10-decennium-rechts-voor.jpg"));
$autoOverzicht->voegAutoToe(new autoFilter('Dik', 'Jeep', 'Renegade', 34060, 'https://www.jeep.nl/content/dam/jeep/crossmarket/new-renegade-2019/Overview/02_colorizer/02_Colors/02_Trims/01_sport/Sport_296.png'));
$autoOverzicht->voegAutoToe(new autoFilter('Middel', 'Bugatti', 'Chiron', 2400000, 'https://images.autowereld.com/1600x1000/bugatti-chiron-noir-matt-e1dfac.jpg'));
$autoOverzicht->voegAutoToe(new autoFilter('Dik', 'Lamborghini', 'Urus', 278844, 'https://media.autoweek.nl/m/6xlyubvb2t25_480.jpg'));
?>

<html lang="en">
<head>
    <title>MR Wheely</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="wrapper">
    <img class="header" src="img/wheelyHeader.jpg" alt="header-img">
    <form action="index.php" method="GET">
        <label>
            Banddikte: <br>
            <select id="banddikte">
                <option value="">Kies één van de onderstaande banddiktes</option>
                <option value="dik">Dik</option>
                <option value="middel">Middel</option>
                <option value="dun">Dun</option>
            </select>
        </label>
        <label>
            Merk: <br>
            <select id="merk">
                <option value="">Kies één van de onderstaande merken</option>
                <option value="Audi">Audi</option>
                <option value='Jeep'>Jeep</option>
                <option value="Bugatti">Bugatti</option>
                <option value="Lamborghini">Lamborghini</option>
            </select>
        </label>
        <label>
            Minimale prijs: <br>
            <input type="number" id="min-prijs">
        </label>
        <label>
            Maximale prijs: <br>
            <input type="number" id="max-prijs">
        </label>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

    <div class="picture-holder">
        <?php
        include_once ('autoFilter.php');

        foreach ($autoOverzicht->getGefilterdeLijst($banddikte, $merk, $minprijs, $maxprijs) as $auto) {
            echo '<div class="pictures">' . $auto->getMerk() . ' - type: ' . $auto->getType() .  ' - Banddikte: ' . $auto->getBanddikte() . " - €" . $auto->getPrijs() . "<br>";
            echo '<img width="100%" src="' . $auto->getUrl() . '" alt=""> <br> </div>';
        }
        ?>
    </div>
</div>
</body>
</html>