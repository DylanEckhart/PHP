<?php

class Broodje {
    private string $meel;
    private string $vorm;
    private string $gewicht;

    public function __construct(string $meel, string $vorm, string $gewicht) {
        $this->meel = $meel;
        $this->vorm = $vorm;
        $this->gewicht = $gewicht;
    }

    public function getMeel(): string {
        return $this->meel;
    }

    public function getVorm(): string {
        return $this->vorm;
    }

    public function getGewicht(): string {
        return $this->gewicht;
    }
}

class BroodjesOverzicht {
    public array $broodjes;

    public function __construct() {
        $this->broodjes = [];
    }

    public function voegBroodjeToe($broodje) {
        $this->broodjes[] = $broodje;
    }

    public function getBroodjesLijst(): array {
        return $this->broodjes;
    }

}