<?php

class VoitureExpl
{
    private $_marque;
    private $modele;
    private $nbPortes;
    public function save($voitureExpl)
    {
echo "A save";
    }
}

class VoitureElec extends Voiture
{
    private $autonomie;
    public function save()
    {
echo "B save";
parent::save();
    }

}
$voitureExpl = new VoitureElec();
$voitureExpl->save();