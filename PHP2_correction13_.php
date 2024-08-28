<?php

// Définir la classe qui peut encapsuler différentes voitures
class Voiture{
  // indiquer les propriétés types de la classe
  protected $_marque;
  protected $_modele;
  protected $_nbPortes;
  private $vitesseActuelle;
  // Utiliser le CONSTRUCTEUR pour initialiser les propriétés de l'objet - elles seront appeler à chaque fois par défaut
  public function __construct($valeurs=array()){
    $this->_vitesseActuelle=0; // Enregistrer la vitesse actuelle (c'est la valeur par défaut 95% de sat)
  }
  // public function __construct($marque, $modele, $nbPortes){
    // $this->_marque=$marque;
    // $this->_modele=$modele;
    // $this->_nbPortes=$nbPortes;
    // 
    
    // }
    public function getMarque(){
      return $this->_marque;
      // return $this->_modele;
      // return $this->_marque;
    }
    public function getModele(){
      return $this->_modele;
    }
    public function getnbPortes(){
      return $this->_nbPortes;
    }
    public static function combien(){//méthode statique
      echo self::$_vitesseActuelle."<br/>";
    }
    // public function getvitesseActuelle(){
      //   return $this->_vitesseActuelle;
      // }
      // public function setCpuClock($speed){
        //   $this->_cpuClock = $speed;
        //   }
        public function setvitesseActuelle($accelerer){
          $this->_vitesseActuelle=$accelerer;
        }
}
public function demarrer(){
  
  $this->_demarrer=$demarrer;
}




// $poste=new Voiture(array("Peugeot", "408", 5, $speed));
// echo $poste->setMarqueModeleNbPortes();
// $poste->setvitesseActuelle(50);
// echo $poste->getvitesseActuelle()."km/h";

?>


<!-- 
// class Voiture {
  // protected $marque="Peugeot"; // Collier Série 1
  // protected $modele="408"; // Capteur photopléthysmographe
//   protected $nbPortes="5"; // nbValeur = 2 "Sat en % et FC en btm"
//   private function getMarqueModeleNbPortes (){
//     return "{$this->marque} {$this->modele} {$this->nbPortes}";
//   }
//   public function getv1 (){
//     return $this->getMarqueModele();
// }
// }
// echo $fiche->v1();
// public function getVoiture(){
  //   return $this->getMarqueModeleNbPorte();
  //   }
  
  // public function getvitesseActuelle(0): string {
    // echo Voiture;
    
    
    // https://grafikart.fr/tutoriels/visibilite-public-private-556
    // https://www.vincent-vanneste.fr/views/php/co/GetterSetter.html
    // ?>
    // return $this->vitesseActuelle;
<-- // $voiture=array( -->
<!-- //     "marque",
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
// } -->

<!-- 
https://apprendre-php.com/tutoriels/tutoriel-49-mthodes-magiques-set-et-get.html --> 