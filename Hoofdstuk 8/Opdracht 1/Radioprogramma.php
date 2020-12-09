<?php

    class Radioprogramma {
        private $naam = "";
        private $omschrijving = "";
        private $liedjes = array();

        public function voegLiedjeToe($liedje) {
            $this->liedjes[] = $liedje;
        }

        public function getRadioProgramma() {
            return array ("naam" => $this->naam, "omschrijving" => $this.$this->omschrijving);
        }

        public function getNaam() {
            return $this->naam;
        }

        public function getOmschrijving() {
            return $this->omschrijving;
        }

        public function setNaam($naam) {
            if (strlen($naam) >= 2) {
                $this->naam = $naam;
            }
        }

        public function setOmschrijving($omschrijving) {
            if (strlen($omschrijving) >= 2) {
                $this->omschrijving = $omschrijving;
            }
        }
    }