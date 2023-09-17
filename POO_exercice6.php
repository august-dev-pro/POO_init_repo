<?php
    class MaClass{
        public $longeur;
        public $largeur;
        
    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculerSurface() {
        return $this->longueur * $this->largeur;
    }
    }

    class Carre extends MaClass{

        public $longueurCoté;

        public function __construct($longueurCoté) {
            $this->longueurCoté = $longueurCoté;
        }

        public function calculSurface(){
            return $longeurCoté * $longeurCoté;
        }
    }

    class Cercle extends MaClass{

        public $pi;
        public $rayon;
        
        public function __construct($pi, $rayon) {
            $this->pi = $pi;
            $this->rayon = $rayon;
        }

        
        public function calculSurface(){
            return $pi * ($rayon * $rayon);
        }
    }
?>