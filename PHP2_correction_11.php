
<!-- https://www.php.net/manual/fr/intldateformatter.format.php -->

<?php
function formaterDateFr($date_str) {
    // Créer un objet DateTime à partir de la chaîne de date
    $date_obj = DateTime::createFromFormat('Y-m-d', $date_str);
 
    // Vérifier si la date est valide
    if ($date_obj === false) {
        return "Date invalide";
    }
 
    // Créer un formateur de date pour la locale française
    $formatter = new IntlDateFormatter(
        'fr_FR',
        IntlDateFormatter::FULL,
        IntlDateFormatter::NONE,
        'Europe/Paris',
        IntlDateFormatter::GREGORIAN
    );
 
    // Formater la date
    $date_fr = $formatter->format($date_obj);
 
    // Retourner la date formatée
    return $date_fr;
}
 
// Afficher la date formatée
echo formaterDateFr("2018-02-23");
?>
 