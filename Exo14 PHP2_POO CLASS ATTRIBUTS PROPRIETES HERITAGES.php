<?php

class Voiture // 
{
    protected $_marque;
    protected $modele;
    public function __construct($marque, $modele, $nbPortes)
    {
        $this -> _marque = $marque;
        $this -> _modele = $modele;
    }
    public function getInos()
    {
        return "Marque : " .$this -> _marque . " Modèle : " . $this -> _modele ;
    }
}
class VoitureElect extends Voiture
{
    private $_autonomie;
    public function __construct($autonomie) // Propriété supplémentaire
    {
        $this -> _autonomie = $autonomie;
        echo "n^hohjîoj p";
        // parent::v1();
        parent::__construct($marque, $modele);
    }
    public function getInfos()
    {
        return parent::getInos
    }
}
// INSTANCIER les objets 
$v1 = new Voiture("Peugot", "408");
$ve1 = new VoitureElect("BMW", "i3", "100");


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