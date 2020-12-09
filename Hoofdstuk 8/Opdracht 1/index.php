<?php

    include_once ('Radioprogramma.php');
    include_once ('Liedje.php');

    $ditprogramma = new Radioprogramma();
    $ditprogramma->setNaam("Radioprogramma");
    $ditprogramma->setOmschrijving("Dit is een PHP programma voor radioliedjes");

    foreach ($ditprogramma->getRadioProgramma() as $programma) {
        echo $programma."<br>";
    }

    $nieuwliedje = new Liedje("Butterfly Effect", "Travis Scott");
    $nieuwliedje = new Liedje("Chicago Freestyle", "Drake");
    $nieuwliedje = new Liedje("For The Night", "Pop Smoke");
    echo $nieuwliedje->getTitel()."<br>";
    echo $nieuwliedje->getArtiest();
