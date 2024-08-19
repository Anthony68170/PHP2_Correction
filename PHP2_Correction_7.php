
<?php
$elements= array(
    "choix 1",
    "choix 2",
    "choix 3",
);

function genererCheckbox($elements){
echo "<form>";

    foreach($elements as $i=>$value) {
        // unset($elements[$i]);
    echo "<label for='{$i}'>{$value}</label><br>";
    echo '<input type="checkbox"> <name='.$value.'/><br>';
}

echo "</form>";
}

echo genererCheckbox($elements);
?>

<!-- //où $elements est un tableau associatif clé => valeur avec 3 entrées -->
