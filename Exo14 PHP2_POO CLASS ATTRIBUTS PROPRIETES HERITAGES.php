<?php

class Voiture // 
{
    protected $marque;
    protected $modele;
    public function __construct($marque, $modele)
    {
        $this -> marque = $marque;
        $this -> modele = $modele;
    }
    public function getInfos()
    {
        return "Marque : " .$this -> marque . " Modèle : " . $this -> modele ;
    }
}
class VoitureElect extends Voiture
{
    private $autonomie;
    // Propriété supplémentaire
    public function __construct($autonomie) 
    {
        // parent::v1();
        parent::__construct($marque, $modele);
        // $this -> _marque = $marque;
        // $this -> _modele = $modele;
        $this -> autonomie = $autonomie;  
    }
    public function getInfos()
    {
        return "Statut véhicule : " . parent::getInfos() .$this -> autonomie."km";
    }
}
// INSTANCIER les objets 
$v1 = new Voiture("Peugot", "408");
$ve1 = new VoitureElect("BMW", "i3", "100");

echo $v1->getInfos();
echo $ve1 -> getInfos();

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