<?php
    class Personne{

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
    $donnes = new Personne();

    $donnes -> getnom();
    $donnes -> getage();

    class Employé extends Personne {
        public $salaire;

        public function afficherDetailsEmp(){
            echo "je suis $nom, j'ai $age ans et j'ai un salaire de $salaire par MOIs";
        }
    }
    $donneesEmp = new Employé();
    $donneesEmp -> afficherDetailsEmp();