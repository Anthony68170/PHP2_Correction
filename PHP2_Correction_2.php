

<!-- https://developer.mozilla.org/fr/docs/Web/HTML/Element/table -->
<table border="1"> 
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
</table>

<?php
$capitales=array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"
);

    function afficherTableauHTML ($capitales){
        ksort($capitales);
    function afficherTableauHTML($capitales){
        $majCapitales = mb_strtoupper($capitales);
    }    
        echo afficherTableauHTML($capitales);
    }
    // var_dump($capitales);
?>
<!-- mb_strtoupper pour transformer en capitale -->
<!-- https://www.php.net/manual/fr/arrayobject.asort.php -->
<!-- https://www.php.net/manual/fr/array.sorting.php -->
<!-- https://www.php.net/manual/fr/function.array.php -->

