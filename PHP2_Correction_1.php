
<style>
.red{color : red}
</style>

<?php
$texte = "Mon texte en rouge";
function convertirMajRouge($texte){
    $majTxt = mb_strtoupper($texte);
    $redTxt = '<p class="red"> '.$majTxt.' </p>';
    return $redTxt;
    }
    
echo convertirMajRouge($texte);
?>