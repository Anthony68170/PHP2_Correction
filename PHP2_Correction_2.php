<!-- <table border="1">
    <thead>
        <tr>
            <th>Pays</th><th>Capitales</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>France</td><td>Paris</td>
        </tr>
        <tr>
            <td>Allemagne</td><td>Berlin</td>
        </tr>
        <tr>
            <td>USA</td><td>Washington</td>
        </tr>
        <tr>
            <td>Italie</td><td>Rome</td>
        </tr>
        
    </tbody>
</table> -->

<?php

$capitales=array(
    "France"=>"Paris",
"Allemagne"=>"Berlin",
"USA"=>"Washington",
"Italie"=>"Rome"
);

function afficherTableHTML($capitales){
    echo '<table border="1">';
    echo "<thead><tr><th>Pays</th><th>Capitales</th></tr></thead>";
    echo ksort($capitales);
    // echo mb_strtoupper($capitales);
    
foreach($capitales as $capitale=>$pays){
    echo "<tbody><tr><td>$capitale</td><td>$pays</td></tr></tbody>";
}
}
afficherTableHTML($capitales);

?>
