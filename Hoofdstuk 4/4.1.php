<?php

echo celsiusNaarFahrenheit(26);

function celsiusNaarFahrenheit($a){
    $b = $a * 1.8 + 32;
    return $b;
}
