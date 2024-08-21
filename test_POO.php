<?php
// créer un objet à l'aide du mot "class"
// nommer l'objet; ici "Ordinateur"
Class Ordinateur{

// Il y a 3 catégorie d'attributs "publlic, private et protected"
// L'attribut est toujours lié à un élément particulier qu'il faut nommer
  private $_marque;


  private $_modele;


  private $_ecran;


  private $_statut = 0;


  public function allumer(){


    $this->_statut = 1;
}
}
$poste = new Ordinateur();
$poste->allumer();