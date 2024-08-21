<?php

class Voiture {
  protected $marque;
  protected $modele;
  protected $nbPortes;
  protected $vitesseActuelle;
  public function getvitesseActuelle(): string {
    return $this->vitesseActuelle;
  }
  // echo Voiture;


  // https://grafikart.fr/tutoriels/visibilite-public-private-556
  // https://www.vincent-vanneste.fr/views/php/co/GetterSetter.html
}
  ?>
<!-- // $voiture=array(
//     "marque",
//     "modèle",
//     "nbPortes",
//     "vitesseActuelle"
// )

 
// class Kid {
 
  /**
   * Age du kid
   *
   * @var int
   * @access private
   */
  // private $age;
 
  /**
   * Methode magique __get()
   *
   * Retourne la valeur de la propriété appelée
   *
   * @param string $property
   * @return int $age
   * @throws Exception
   */
  // public function __get($property) {
 
  //   if('age' === $property) {
  //     return $this->age;
  //   } else {
  //     throw new Exception('Propriété invalide !');
  //   }
  // }
 
  /**
   * Methode magique __set()
   *
   * Fixe la valeur de la propriété appelée
   *
   * @param string $property
   * @param mixed $value
   * @return void
   * @throws Exception
   */
//   public function __set($property,$value) {
 
//     if('age' === $property && ctype_digit($value)) {
//       $this->age = (int) $value;  
//     } else {
//       throw new Exception('Propriété ou valeur invalide !');
//     }
//   }
// }


https://apprendre-php.com/tutoriels/tutoriel-49-mthodes-magiques-set-et-get.html -->