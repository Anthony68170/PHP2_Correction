<?php

class VoitureExpl
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
public function getinfos()
{
    return $this->_infos;
}

class VoitureElec extends Voiture
{
    private $_autonomie;
    public function __construct($autonomie);
    {
echo "B save";
parent::save();
    }

}
$voitureExpl = new VoitureElec();
$voitureExpl->save();