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
    echo "<input type='text' name='{$value}'/><br><br>";    
    }
    // echo '<input type="submit" value="Submit">';
echo "</form >";
}

echo afficherInput($formInput);


$elements=array(
    "Développeur Logiciel",
    "Designer web",
    "Intégrateur",
    "Chef de projet",
);

        function afficherList($elements) { 
        echo "<select>";
        foreach($elements as $element){
            echo"<form>";
            echo "<option value> ".$element." </option>";
            echo "</form>";
            
        }
        echo "</select>"; 
}
        echo afficherList($elements);

        echo"<form>";
        echo '<br><input type="submit" value="Submit">';
        echo "</form>";
?>