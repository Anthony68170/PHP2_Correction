<?php

// Classe de base : Voiture (dans projet,  classe supports utilisés (populaire, médic ou militaire)
class Voiture {
    protected $marque;  // Propriété  (ici exemple 'Trixie' pour les harnais ou 'OrthoVet' pour l'orthopédiques ou Officierhervé pour Militaire)
    protected $modele;  // Propriété pour le modèle (ici type de support : 'Harnais', 'Chariot roulant', 'Orthèse', EPI)
// Il faut créer une class 'Taille'


    // Constructeur pour initialiser la marque et le modèle (ici pour créer un support avec son fabricant et son type)
    public function __construct($marque, $modele) {
        $this->marque = $marque;  // Ici je stocke la marque du fabricant dans la propriété
        $this->modele = $modele;  // Ici je stocke le type de support dans la propriété (Harnais, Chariot, Orthèse, EPI d'officier de Hervé.)
    }

    // Méthode pour obtenir les infos de base du support (ici, je récupère les infos de base comme le fabricant et le type de support)
    public function getInfos() {
        return "Marque : " . $this->marque . " Modèle : " . $this->modele;  // je retourne la marque du fabricant et le type de support
    }
}

// Classe dérivée : VoitureElect (ici, je mets HARNAISCONNECTE pour les harnais et dispositifs connectés avec capteurs)
// HarnaisConnecte représentera des harnais et dispositifs avec différents capteurs (en fonction du modèle)
class VoitureElect extends Voiture {
    private $autonomie; // Modifier Propriété "$autonomie" pour le % de charge restante des capteurs (???pour chaque capteur ????)
    // Ajouter Propriété "$nbCapteurs" pour le nombre de capteurs
    // Ajouter Propriété "$typesCapteurs" pour la function des capteurs

    // Constructeur pour initialiser la marque, le modèle, le type, le nombre et l'autonomie (ici pour initialiser les "Supports" avec leurs capteurs)
    public function __construct($marque, $modele, $autonomie) {
        parent::__construct($marque, $modele);  // Appel du constructeur de Supports (base) pour initialiser marque et 
        $this->autonomie = $autonomie;  
    }

    // Méthode pour obtenir les infos complètes du "Supports" et 
    public function getInfos() {
        return "Dispositif connecté : " . parent::getInfos() . ", Capteurs : " . $this->autonomie;  // Retourne les infos de base
    }

    // Placer les Setters  / Ici je peux 
    public function setMarque($marque) {
        $this->marque = $marque;  // Change la marque (du fabricant du partenaires)
    }
    
    public function setModele($modele) {
        $this->modele = $modele;  // Change le modèle (type de su
    }
    
    public function setAutonomie($autonomie) {
        $this->autonomie = $autonomie;  // Change l
    }
    
    // Placer les Getters
    public function getMarque() {
        return $this->marque;  // Retourne la marque 
    }
    
    public function getModele() {
        return $this->modele;  // Retourne le modèle
    }
    
    public function getAutonomie() {
        return $this->autonomie;  // Retourne le nombre ou 
    }
}

$v1 = new Voiture("Peugot", "408");  
$ve1 = new VoitureElect("BMW", "i3", "100");


echo $v1->getInfos(); 
echo $ve1->getInfos();

?>


// Ajouter Get pour avoir les infos 
//Placer les GET
// public function getNbPortes()
// {
//     return $this->_nbPortes;
// }

// public function getInfos()
// {
//     return $this->_infos;
// }
// $v1 = new Ve1();
// $v1->save();