<?php

class Voiture // 
{
    private $_marque;
    private $modele;
    public function __construct($marque, $modele, $nbPortes)
    {
        $this -> _marque = $marque;
        $this -> _modele = $modele;
    }
    public function getInos(){
        return "Marque : " $this -> _marque . " Modèle : " . $this -> _modele .;
    }
}
class Ve1 extends V1
{
    private $_autonomie;
    public function __construct($autonomie);
    {
        $this -> $_autonomie = $autonomie;
        echo "n^hohjîoj p";
        parent::v1();
    }
    
}



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