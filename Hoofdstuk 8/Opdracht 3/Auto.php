<?php

class AutoOverzicht {

    // Publieke variabelen
    public $autoos;

    public function __construct() {
        $this->autoos = [];
    }

    // Filteren van aangegeven zoeknormen
    function getGefilterdeLijst($minimalePrijs, $maximalePrijs, $merk) {
        $gefilterdeLijst = [];

        foreach ($this->autoos as $auto) {
            if ($auto->getPrijs() >= $minimalePrijs && $auto->getPrijs() <= $maximalePrijs && $auto->getMerk() === $merk) {
                $gefilterdeLijst[] = $auto;
            } else if ($auto->getPrijs() >= $minimalePrijs && $auto->getPrijs() <= $maximalePrijs && $merk === "") {
                $gefilterdeLijst[] = $auto;
            }
        }

        return $gefilterdeLijst;
    }

    // Toevoegen van auto's
    public function voegAutoToe($auto) {
        $this->autoos[] = $auto;
    }

    // Tonen van gesorteerde auto's
    public function getAutoLijst() {
        return $this->autoos;
    }
}

class Auto {

    // Variabelen voor class Auto
    private $merk;
    private $type;
    private $prijs;
    private $url;

    public function __construct(string $merk, string $type, int $prijs, string $url) {
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->url = $url;
    }

    // Teruggeven van de ingevoerde waarden
    public function getMerk() {
        return $this->merk;
    }

    public function getType() {
        return $this->type;
    }

    public function getPrijs() {
        return $this->prijs;
    }

    public function getUrl() {
        return $this->url;
    }
}