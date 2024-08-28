





<?php
// Créer l'objet principal avec ces attributs 
class Voiture {// definir la classe
    protected $marque;// propriétés privées
    protected $modele;
    protected $nbPortes;
    protected $vitesseActuelle;


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

//Placer les METHODES / Ce sont les actions à définir/citer
public function demarrer(){
    echo  "le véhicule " .$this->_marque . " " . $this->_modele . "démarre.";
}

public function accelerer(){
    $this->vitesseActuelle +=$vitesse;
    echo "Le véhicule " .$this->_marque . " " . $this->_modele . "accélère de " .$vitesse. " km/h. ";
}

public function stopper(){
    $this->vitesseActuelle = 0;
    echo "Le véhicule " .$this->_marque . " " . $this->_modele . "est à l'arrêt " .$vitesse. " km/h. ";
}

// NOUVELLE METHODE POUR RALENTIR
// public function ralentir(){
//     $this->vitesseActuelle -=$vitesse;
//     if $this->_vitesseActuelle <$vitesse;
//     echo "Le véhicule " .$this->_marque . " " . $this->_modele . "ralenti de " .$vitesse. " km/h. ";
// }


//AFFICHER AVEC LES METHODES
public function affichagePersVehicule(){
    echo "Nom et modèle du véhicule : " .$this->_marque .  " . $this->_modele .";
    echo "La vitesse actuelle est de : " .$this_>_vitesseActuelle . " km/h";
}


// Créer les élements à obtenir
$peugeot408 = new Voiture(array(
    '_marque' => 'Peugeot',
    '_modele' => '408',
    '_nbPortes' => 5,)
);
$citroenC4 = new Voiture(array(
    '_marque' => 'Citroen',
    '_modele' => 'C4',
    '_nbPortes' => 3,)
);

//UTILISER LES OBJETS/Fonctions 
$peugeot408->demarrer();
$peugeot408->accelerer(50);
$peugeot408->affichagePersVehicule();
$peugeot408->ralentir(10); //Bonus option ralentir


$citroenC4->demarrer();
$citroenC4->stopper();
$citroenC4->accelerer(20);

}


// public function setMarque($marque){
//     $this->_marque = $marque;
//     }
//     public function setCpuClock($speed){
//     $this->_cpuClock = $speed;
//     }
//     …


