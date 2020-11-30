<?php

$leeftijd = 2;

if ($leeftijd < 3) {
    echo "Je hoeft niks te betalen.";
} elseif ($leeftijd >= 3 && $leeftijd <= 12){
    echo "Je moet €5 betalen.";
} elseif ($leeftijd > 65){
    echo "Je moet €5 betalen.";
} else {
    echo "Je moet de volledige kosten van €10 betalen.";
}
