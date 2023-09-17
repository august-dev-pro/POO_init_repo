<?php
    class MaClass{
        public $longeur;
        public $largeur;

    //methode constructeur       
    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
    //methode de calcule surface
    public function calculerSurface() {
        return $this->longueur * $this->largeur;
    }
    }
// ajout de class carre heritiere de la classe principale MaClasse
    class Carre extends MaClass{

        public $longueurCoté;

        public function __construct($longueurCoté) {
            $this->longueurCoté = $longueurCoté;
        }

        // implementation de la methode calcul surface dans la class Carre
        public function calculerSurface(){
            return $this->longueurCoté * $this->longueurCoté;
        }
    }

    // instance de la classe Carre et appel de le fonction calculSurface
    $instanceCarre = new Carre(10);
    $surfaceCarre = $instanceCarre->calculerSurface();
    echo "la surface du carre est $surfaceCarre m²\n";

 // ajout de class Cercle heritiere de la class principale MaClass
    class Cercle extends MaClass{

        public $pi;
        public $rayon;
        
        public function __construct($pi, $rayon) {
            $this->pi = $pi;
            $this->rayon = $rayon;
        }

        // implementation de la methode calcul surface dans la class cercle
        public function calculerSurface(){
            return $this->pi * ($this->rayon * $this->rayon);
        }
    }

    // instance  de la classe Cercle et appel de le fonction calculSurface
    $instanceCercle = new Cercle(3.14, 10);
    $surfaceCercle = $instanceCercle->calculerSurface();
    echo "la surface du cercle est $surfaceCercle m²";
?>