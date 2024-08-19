<?php


$formInput=array(
    "Nom",
    "Prénom",
    "Adresse mail",
    "Ville",
    "Sexe",
);

function afficherInput($formInput) {

    echo "<form >";
    
foreach ($formInput as $key => $value) {
    echo "<label for='{$key}'>{$value}</label><br>";
    echo "<input type='text' name='{$value}'/><br>";    
    }

echo "</form >";
}
echo afficherInput($formInput);


?>