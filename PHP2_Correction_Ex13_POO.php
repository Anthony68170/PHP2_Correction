





<?php
// Créer l'objet principal avec ces attributs 
class Voiture {// definir la classe
    private $_marque;// propriétés privées
    private $_modele;
    private $_nbPortes;

    // private $vitesseActuelle=0;
    private $_vitesseActuelle;

// Méthode magique => __ (2x underscore)
    public function __construct($valeurs = array()) 
    { 
        $this->_vitesseActuelle = 0; // Reset la vitesse actuelle à 0 par défaut
        if (!empty($valeurs)) 
        {
            $this->hydrate($valeurs);
        }
    }

    // Méthode avec une boucle foreach exploitant l'hydratation d'un l'objet
    public function hydrate(array $donnees) 
    {
        foreach ($donnees as $attribut => $valeur) 
        {
            $methode = 'set' . str_replace(' ', '', ucwords(str_replace('_', ' ', $attribut)));
            if (is_callable(array($this, $methode))) 
            {
                $this->$methode($valeur);
            }
        }
    }

// placer les SET  
public function setMarque($marque)
{
    $this->_marque = $marque;
}

public function setModele($modele)
{
    $this->_modele = $modele;
}

public function setNbPortes($nbPortes)
{
    $this->_nbPortes = $nbPortes;
}

public Function setvitesseActuelle($vitesse)
{
    $this->vitesseActuelle = $vitesse;
}

//Placer les GET
public function getMarque()
{
    return $this->_marque;
}
    
public function getModele()
{
    return $this->_modele;
}

public function getNbPortes()
{
    return $this->_nbPortes;
}

public Function getvitesseActuelle(){
    return $this->_vitesseActuelle;
}

//Placer les METHODES / Ce sont les actions à citer PUIS ACTIVER SUR UNE CONDITION
public function demarrer()
{
    echo  "<br>Le véhicule " .$this->_marque . " " . $this->_modele . " démarre.";
}

public function accelerer($vitesse)
{
    $this->_vitesseActuelle += $vitesse;
    echo "<br>Le véhicule " .$this->_marque . " " . $this->_modele . " accélère de " .$vitesse. " km/h. ";
}
public function stopper()
{
    $this->vitesseActuelle = 0;
    echo "<br>Le véhicule " .$this->_marque . " " . $this->_modele . " est à l'arrêt ";
}

// NOUVELLE METHODE POUR RALENTIR
public function ralentir($vitesse){
    // si la vitesse de décélération est inférieure à la vitesse actuelle, et que la vitesse actuelle alors je décélère 
    if ($this->_vitesseActuelle>$vitesse){
        $this->_vitesseActuelle -=$vitesse;
        echo "<br>Le véhicule " .$this->_marque . " " . $this->_modele . " ralenti de " .$vitesse. " km/h. ";
    }
    else echo "<br>Le vitesse de décélération est trop importante ";
}

// AFFICHER AVEC LES METHODES
public function affichagePersVehicule()
{
    echo "<br>La vitesse actuelle est de : " .$this->_vitesseActuelle . " km/h";
}
}

// Créer les élements à obtenir
$peugeot408 = new Voiture(array
(
'_marque' => 'Peugeot',
'_modele' => '408',
'_nbPortes' => 5
)
);
$citroenC4 = new Voiture(array
(
'_marque' => 'Citroen',
'_modele' => 'C4',
'_nbPortes' => 3
)
);

//UTILISER LES OBJETS/Fonctions 
$peugeot408->demarrer();
$peugeot408->accelerer(50);
$peugeot408->affichagePersVehicule();

//Bonus option ralentir
$peugeot408->ralentir(10);

$citroenC4->demarrer();
$citroenC4->stopper();
$citroenC4->accelerer(20);

?>

