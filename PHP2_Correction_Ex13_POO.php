





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

    
// placer les SET  
public function setMarque($_marque){
    $this->_marque = $_marque;
}
    
public function setModele($modele){
    $this->_modele = $modele;
}

public function setNbPortes($_nbPortes){
    $this->_marque = $_nbPortes;
}

public Function setvitesseActuelle($vitesse){
    $this->vitesseActuelle = $vitesse;
}

//Placer les GET
public function getMarque(){
    return $this->_marque;
}
    
public function getModele(){
    return $this->_modele;
}

public function getNbPortes(){
    return $this->_nbPortes;
}

public Function getvitesseActuelle(){
    return $this->vitesseActuelle;
}

//Placer les METHODES
public function demarrer(){
    echo  "le véhicule " .$this->_marque . " " . $this->_modele . "démarre.";
}

public function accelerer(){
    $this->vitesseActuelle +=$vitesse;
    echo "Le véhicule " .$this->_marque . " " . $this->_modele . "accélère à " .$vitesse. " km/h. ";
}
// Créer les élements à obtnir

// public function setMarque($marque){
//     $this->_marque = $marque;
//     }
//     public function setCpuClock($speed){
//     $this->_cpuClock = $speed;
//     }
//     …


