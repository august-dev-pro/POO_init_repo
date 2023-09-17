<?php
    class personne{
        //proprietees en mode privé
        private $nom;
        private $age;

       //definir les proprieté
        public function setProprietees($nom, $age) {
            $this->nom = $nom;
            $this->age = $age;
        }
// ajout des methodes d'accession
        public function getnom() {
            return $this->nom;
        }

        public function getage() {
            return $this->age;
        }

    }
//ajout de l'instance
    $donnes = new personne();
// recuperation des données   
    $donnes -> getnom();
    $donnes -> getage();
