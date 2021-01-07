<?php

class Auto {

    // Variabelen voor class Auto
    private $merk;
    private $type;
    private $prijs;
    private $banddikte;
    private $url;

    public function __construct(string $banddikte, string $merk, string $type, int $prijs, string $url) {
        $this->banddikte = $banddikte;
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->url = $url;
    }

    // Teruggeven van de ingevoerde waarden
    public function getBanddikte(): string {
        return $this->merk;
    }

    public function getMerk(): string {
        return $this->merk;
    }

    public function getType(): string {
        return $this->type;
    }

    public function getPrijs(): int {
        return $this->prijs;
    }

    public function getUrl(): string {
        return $this->url;
    }
}

class AutoOverzicht {

    // Publieke variabelen
    public $autoos;

    public function __construct() {
        $this->autoos = [];
    }

    // Filteren van aangegeven zoeknormen
    function getGefilterdeLijst($banddikte, $minimalePrijs, $maximalePrijs, $merk) {
        $gefilterdeLijst = [];

        foreach ($this->autoos as $auto) {
            if ($auto->getBanddikte() === $banddikte && $auto->getMerk() === $merk && $auto->getPrijs() >= $minimalePrijs && $auto->getPrijs() <= $maximalePrijs) {
                $gefilterdeLijst[] = $auto;
            } else if ($auto->getBanddikte() === $banddikte && $merk === "" && $auto->getPrijs() >= $minimalePrijs && $auto->getPrijs() <= $maximalePrijs) {
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

