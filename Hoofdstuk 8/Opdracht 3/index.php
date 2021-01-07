<?php

include_once("Auto.php");

$merk = isset($_GET["merk"]) ? $_GET["merk"] : "";
$banddikte = isset($_GET["banddikte"]) ? $_GET["banddikte"] : "";
$minimalePrijs = isset($_GET["minimalePrijs"]) ? $_GET["minimalePrijs"] : 0;
$maximalePrijs = isset($_GET["maximalePrijs"]) ? $_GET["maximalePrijs"] : 99999999;

$autoOverzicht = new AutoOverzicht();
$autoOverzicht->voegAutoToe(new Auto("Dik", "Koenigsegg", "Jesko", 10000, "https://media2.autokopen.nl/afbeeldingen/audi-a3-sportback-303757-1920.jpg"));
$autoOverzicht->voegAutoToe(new Auto("Dun", "McLaren", "P1", 10000, "https://media2.autokopen.nl/afbeeldingen/audi-a3-sportback-303757-1920.jpg"));
$autoOverzicht->voegAutoToe(new Auto("Dun", "Ferrari", "FXX-K Evo", 10000, "https://media2.autokopen.nl/afbeeldingen/audi-a3-sportback-303757-1920.jpg"));
$autoOverzicht->voegAutoToe(new Auto("Middel","Mercedes-AMG", "GT R", 10000, "https://media2.autokopen.nl/afbeeldingen/audi-a3-sportback-303757-1920.jpg"));

?>

<!DOCTYPE html>
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
    <form action="index.php" method="post">
        <label>
            Banddikte: <br>
            <select id="banddikte">
                <option value="dik">Dik</option>
                <option value="middel">Middel</option>
                <option value="dun">Dun</option>
            </select>
        </label>
        <label>
            Merk: <br>
            <select id="merk">
                <option value="Koenigsegg">Koenigsegg</option>
                <option value="McLaren">McLaren</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Mercedes-AMG">Mercedes-AMG</option>
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

    <div class="auto-columns">
        <div class="column">
            <?php
                foreach ($autoOverzicht->getGefilterdeLijst($banddikte, $merk, $minimalePrijs, $maximalePrijs) as $auto) {
                    echo $auto->getMerk() . " - " . $auto->getPrijs() . "<br />";
                    echo '<img width=512px height=512px src="' . $auto->getUrl() . '" alt=""/> <br/>';
                }
            ?>
        </div>
    </div>
</div>
</body>
