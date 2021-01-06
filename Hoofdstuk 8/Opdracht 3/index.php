<?php

include_once("Auto.php");

$merk = isset($_GET["merk"]) ? $_GET["merk"] : "";
$minimalePrijs = isset($_GET["minimalePrijs"]) ? $_GET["minimalePrijs"] : 0;
$maximalePrijs =  isset($_GET["maximalePrijs"]) ? $_GET["maximalePrijs"] : 99999999;

$autoOverzicht = new AutoOverzicht();

