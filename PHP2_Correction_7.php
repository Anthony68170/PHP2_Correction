
<?php
$elements= array(
    "choix 1",
    "choix 2",
    "choix 3",
);

function genererCheckbox($elements){
echo "<form>";

    foreach($elements as $element=>$checkdate) {
    echo "<label for='{$element}'>{$element}</label><br>";
    echo "<input type='checkbox' name='.$element.'/><br>";
}

echo "</form>";
}

echo genererCheckbox($elements);
?>

<!-- //où $elements est un tableau associatif clé => valeur avec 3 entrées -->
