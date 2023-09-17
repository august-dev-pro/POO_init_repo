<?php
    class personne{
        //proprietees en mode privé
        private $nom;
        private $age;

       //definir la proprieté
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