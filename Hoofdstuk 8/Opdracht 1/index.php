<?php

    include_once ('Radioprogramma.php');

    $ditprogramma = new Radioprogramma();
    $ditprogramma->setNaam();
    $ditprogramma->setOmschrijving();

    foreach ($ditprogramma->getRadioProgramma() as $programma) {
        echo $programma."<br>";
    }

    $nieuwliedje = new Liedje();
    echo $nieuwliedje->getTitel();
    echo $nieuwliedje->getArtiest();
