<!-- <input type="radio" name="Genre" id="masculin" value="radio1"/>
<label for="masculin">Masculin</label><br>

<input type="radio" name="Genre" id="feminin" value="radio2"/>
<label for="feminin">Féminin</label><br>

<input type="radio" name="Genre" id="Autre" value="radio3"/>
<label for="Autre">Autre</label> -->

<?php

$nomsRadio=array(
    "masculin",
    "feminin",
    "autre");

function afficherRadio($nomsRadio){

    echo "<label>";

    echo '<input type="radio" name="genre" id="masculin" value="radio1">';
    echo"Masculin";
    
    echo '<br><input type="radio" name="genre" id="feminin" value="radio2">';
    echo "Féminin";

    echo '<br><input type="radio" name="genre" id="autre" value="radio3">';
    echo "Autre";
    
    echo "</label>"; 
}

echo afficherRadio($nomsRadio);

?>

