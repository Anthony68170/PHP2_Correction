<?php

class V1
{
    private $_marque;
    private $modele;
    private $nbPortes;
    public function __construct($marque, $modele, $nbPortes)
    {
        $this -> _marque = $marque;
        $this -> _modele = $modele;
        $this -> _nbPortes = $nbPortes
    }
}
// Ajouter Get pour avoir les infos 
//Placer les GET
// public function getNbPortes()
// {
//     return $this->_nbPortes;
// }
public function getInfos()
{
    return $this->_infos;
}

class Ve1 extends V1
{
    private $_autonomie;
    public function __construct($autonomie);
    {
echo "n^hohjîoj p";
parent::v1();
    }

}
$v1 = new Ve1();
$v1->save();