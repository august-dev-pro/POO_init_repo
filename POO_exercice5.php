<?php
    class personne{

        private $nom;
        private $age;

        public function setProprietees($nom, $age) {
            $this->nom = $nom;
            $this->age = $age;
        }

        public function getnom() {
            return $this->nom;
        }

        public function getage() {
            return $this->age;
        }

    }
    $donnes = new personne();

    $donnes -> getnom();
    $donnes -> getage();

    class Personne extends Employé {
        public $salaire;
    }