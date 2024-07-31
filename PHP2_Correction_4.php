

<?php

$capitales=array(
    "France"=>"Paris",
"Allemagne"=>"Berlin",
"USA"=>"Washington",
"Italie"=>"Rome"
);
$pays=strtoupper($pays);
// $liens = "<a href='https://fr.wikipedia.org/wiki/$capitale/' target='_blank'>.$pays.</a>";
function afficherTableHTML($capitales){
echo '<table border="1">';
    echo "<thead><tr><th>Pays</th><th>Capitales</th><th>Lien Wiki</th></tr></thead>";
    echo ksort($capitales);
   
   
    // echo "<tbody>"
    foreach($capitales as $capitale=>$pays){
        echo "<tr><td>".strtoupper($capitale)."</td><td>$pays</td><td><a href='https://fr.wikipedia.org/wiki/$capitale/' target='_blank'>.Lien.</a></td></tr></tbody>";
    }
    // echo "</tbody>";
echo '</table>'; 
}
afficherTableHTML($capitales);

?>