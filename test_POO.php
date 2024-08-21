<?php
// créer un objet à l'aide du mot "class"
// nommer l'objet; ici "Ordinateur"
Class Ordinateur{

// Il y a 3 catégories d'attributs "pubblic, private et protected"
// L'attribut est toujours lié à un élément particulier qu'il faut nommer
  private $_marque;

// Si l'attribut est privé, il est uniquement accessible depuis sa classe où il est déclaré
  private $_modele;


  private $_ecran;


  private $_statut = 0;

// Lorsque l'attribut est public, il est accessible depuis n'importe où dans l'application, et reste visible par tout le monde
// Création d'une function, ici "allumer" l'ordinateur
  public function allumer(){


    $this->_statut = 1;
}
}
$poste = new Ordinateur();
$poste->allumer();

// Si l'attribut est protégé, il est uniquement accessible par sa classe et les sous-classes