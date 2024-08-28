





<?php
// Créer l'objet principal avec ces attributs 
class Voiture {// definir la classe
    private $marque;// propriétés privées
    private $modele;
    private $nbPortes;
    private $vitesseActuelle;


    public function __construct($valeurs = array()) {
        $this->_vitesseActuelle = 0; // Initialiser la vitesse actuelle à 0 par défaut
        if (!empty($valeurs)) {
            $this->hydrate($valeurs);
        }
    }

    // Méthode pour hydrater l'objet
    public function hydrate(array $donnees) {
        foreach ($donnees as $attribut => $valeur) {
            $methode = 'set' . str_replace(' ', '', ucwords(str_replace('_', ' ', $attribut)));
            if (is_callable(array($this, $methode))) {
                $this->$methode($valeur);
            }
        }
    }
}

// Créer les élements à obtnir

// public function setMarque($marque){
//     $this->_marque = $marque;
//     }
//     public function setCpuClock($speed){
//     $this->_cpuClock = $speed;
//     }
//     …


