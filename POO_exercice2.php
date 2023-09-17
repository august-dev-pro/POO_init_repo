<?php

    class personne{
        public $nom;
        public $age;

        // ajout de la methode AfficherDetails
        public function afficherDetails(){
            echo "je suis $nom et j'ai $age ans";
        }
    }

    // intance
    $donnees = new personne();

    //appel a la methode afficherDetails
    $donnees -> afficherDetails();
?>