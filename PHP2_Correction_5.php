

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

</form>

<?php

$nomsInput=array(
    "Nom",
    "Prénom",
    "Ville"
);

function afficherInput($nomsInput) {
    $text = id($nomsInput);
    echo "
        <label for='{$nomsInput}'>{$text}</label>
        <input type='text' name='{$nomsInput}' />
    ";
}
// echo $_POST[nomsInput];

// <!-- https://g-rossolini.developpez.com/tutoriels/php/formulaires/?page=global -->
