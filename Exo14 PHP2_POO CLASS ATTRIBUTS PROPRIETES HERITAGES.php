<?php

class Voiture // 
{
    protected $_marque;
    protected $modele;
    public function __construct($marque, $modele)
    {
        $this -> _marque = $marque;
        $this -> _modele = $modele;
    }
    public function getInfos()
    {
        return "Marque : " .$this -> _marque . " Modèle : " . $this -> _modele ;
    }
}
class VoitureElect extends Voiture
{
    private $_autonomie;
    // Propriété supplémentaire
    // public function __construct($autonomie) 
    {
        $this -> _autonomie = $autonomie;
        echo "n^hohjîoj p";
        // parent::v1();
        parent::__construct($marque, $modele);
    }
    public function getInfos()
    {
        return parent::getInfos() .$this -> $autonomie."km";
    }
}
// INSTANCIER les objets 
$v1 = new Voiture("Peugot", "408");
$ve1 = new VoitureElect("BMW", "i3", "100");

echo $v1->getInfos();
echo $ve1 -> getInfos;

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