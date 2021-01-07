<?php

class autoFilter {
    private $banddikte;
    private $merk;
    private $type;
    private $prijs;
    private $url;

    public function __construct(string $banddikte, string $merk, string $type, int $prijs, string $url) {
        $this->banddikte = $banddikte;
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->url = $url;
    }

    public function getBanddikte(): string {
        return $this->banddikte;
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

class autoOverzicht {
    public $autos;

    public function __construct() {
        $this->autos = [];
    }

    public function getGefilterdeLijst($banddikte, $merk, $minprijs, $maxprijs): array {
        $gefilterdeLijst = [];

        foreach ($this->autos as $auto) {
            if ($auto->getBanddikte() === $banddikte && $auto->getMerk() === $merk && $auto->getPrijs() >= $minprijs && $auto->getPrijs() <= $maxprijs) {
                $gefilterdeLijst[] = $auto;
            } else if ($banddikte === "" && $merk === "" && $auto->getPrijs() >= $minprijs && $auto->getPrijs() <= $maxprijs) {
                $gefilterdeLijst[] = $auto;
            }
        }

        return $gefilterdeLijst;
    }

    public function voegAutoToe($auto) {
        $this->autos[] = $auto;
    }

    public function getAutoLijst(): array {
        return $this->autos;
    }
}
