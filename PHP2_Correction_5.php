<!-- 

<form action="submit_form.php" method="post">
   <label>Nom</label><br>
   <input name="nom" id="nom" type="text" /><br>
<br>

   <label>Prénom</label><br>
   <input firstname="prénom" id="prénom" type="text" /><br>
<br>

   <label>Ville</label><br>
   <input city="ville" id="ville" type="text" /><br>
   <br>

   <button type="submit">Valider</button>

</form> -->

<?php

$nomsInput=array(
    "Nom",
    "Prénom",
    "Ville"
);

function afficherInput($nomsInput) {
echo "<form >";
    foreach ($nomsInput as $key => $value) {
    echo "<label for='{$key}'>{$value}</label><br>";
    echo "<input type='text' name='{$value}'/><br>";    
    }
echo "</form >";
}
echo afficherInput($nomsInput);
?>



<!-- https://stackoverflow.com/questions/16757394/can-i-make-a-php-function-to-create-text-input-fields

https://g-rossolini.developpez.com/tutoriels/php/formulaires/?page=global -->
