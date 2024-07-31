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
    echo "
        <label for='{$nomsInput}'>{$nomsInput}</label>
        <input type='text' name='{$nomsInput}'/>
        ";
}
afficherInput($nomsInput);
// echo $_POST[nomsInput];

// https://stackoverflow.com/questions/16757394/can-i-make-a-php-function-to-create-text-input-fields

// <!-- https://g-rossolini.developpez.com/tutoriels/php/formulaires/?page=global -->
