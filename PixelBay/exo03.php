<?php
/*
Mission 3 — Les Décisions du Gérant ⭐⭐⭐⭐

Compétences mobilisées : CP7
Tags : if, else, elseif, opérateurs de comparaison

Chaque soir, le gérant de PixelBay consulte le chiffre d'affaires de la journée pour décider de la stratégie du lendemain. Il vous demande de créer un script qui affiche automatiquement la décision à prendre en fonction du montant réalisé.

Le chiffre d'affaires quotidien détermine l'action à entreprendre :

    Supérieur à 5000 € : "Journée exceptionnelle ! Commander de nouveaux stocks."
    Entre 2000 € et 5000 € : "Bonne journée. Maintenir la stratégie actuelle."
    Entre 500 € et 1999 € : "Journée moyenne. Lancer une promotion sur les réseaux sociaux."
    Inférieur à 500 € : "Journée difficile. Organiser un événement en magasin."

Testez avec les valeurs : 6200, 3500, 800 et 150.

<?php
$chiffreAffaires = 3500; // Testez avec différentes valeurs

// Votre code ici
?>

Résultat attendu (pour 3500) :

CA du jour : 3500 €
Décision : Bonne journée. Maintenir la stratégie actuelle.

Attendus :

    Structure if / elseif / else correcte
    Opérateurs de comparaison appropriés (>, >=, <)
    Les 4 cas sont couverts sans chevauchement
    Test avec les 4 valeurs demandées
*/

function afficherMessage ($chiffreAffaires) {
    if ($chiffreAffaires > 5000) {
    $message = "Journée exceptionnelle ! Commander de nouveaux stocks.<br>"; 
    } elseif (($chiffreAffaires >= 2000) && ($chiffreAffaires <= 5000)) {
    $message = "Bonne journée. Maintenir la stratégie actuelle.<br>";
    } elseif (($chiffreAffaires <= 1999) && ($chiffreAffaires >= 500)) {
    $message = "Journée moyenne. Lancer une promotion sur les réseaux sociaux.<br>";
    } else {
    $message = "Journée difficile. Organiser un événement en magasin.<br>";
    }
    return $message;
};

$chiffreAffaires = 6200;
$message = afficherMessage($chiffreAffaires);
echo $message;

$chiffreAffaires = 3500;
$message = afficherMessage($chiffreAffaires);
echo $message;

$chiffreAffaires = 800;
$message = afficherMessage($chiffreAffaires);
echo $message;

$chiffreAffaires = 150;
$message = afficherMessage($chiffreAffaires);
echo $message;
?>

<?php
/* //Code alternatif après recherche pour correction : 
function afficherMessage2($chiffreAffaires) {
    if ($chiffreAffaires > 5000) {
        return "Journée exceptionnelle ! Commander de nouveaux stocks.<br>";
    } elseif ($chiffreAffaires >= 2000) {
        return "Bonne journée. Maintenir la stratégie actuelle.<br>";
    } elseif ($chiffreAffaires >= 500) {
        return "Journée moyenne. Lancer une promotion sur les réseaux sociaux.<br>";
    } else {
        return "Journée difficile. Organiser un événement en magasin.<br>";
    }
}

echo afficherMessage2(6200);
echo afficherMessage2(3500);
echo afficherMessage2(800);
echo afficherMessage2(150);
?>*/