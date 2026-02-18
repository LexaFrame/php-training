<?php
/*
Mission 6 — Le Système de Promotions ⭐⭐⭐⭐

Compétences mobilisées : CP7
Tags : function, return, paramètres

PixelBay applique différentes promotions selon les saisons et les événements. Vous devez créer des fonctions de calcul de prix pour automatiser ces promotions.

Créez les fonctions suivantes :

    promotionEte($prix) : Applique une réduction de 20% et retourne le nouveau prix.
    promotionHiver($prix) : Applique une réduction de 30% et retourne le nouveau prix.
    promotionSpeciale($prix, $pourcentage) : Applique une réduction personnalisée et retourne le nouveau prix.
    afficherPrix($nomJeu, $prixOriginal, $prixReduit, $labelPromo) : Affiche une ligne formatée avec le nom du jeu, le prix original, le nouveau prix et le label de la promotion.

Testez vos fonctions avec un jeu à 59.99 €.

Arrondir un nombre : round($nombre, $decimales) arrondit un nombre à un nombre de décimales donné. Par exemple, round(41.993, 2) retourne 41.99.

Fichier : exo06.php

<?php
// Fonctions de promotion

// Fonction d'affichage

// Tests
$prixJeu = 59.99;
$nomJeu = "Cyber Race";
?>

Résultat attendu :

Cyber Race : 59.99 € → 47.99 € (Promo été -20%)
Cyber Race : 59.99 € → 41.99 € (Promo hiver -30%)
Cyber Race : 59.99 € → 50.99 € (Promo spéciale -15%)

Attendus :

    Fonctions déclarées avec function et valeur de retour avec return
    Paramètres de fonction correctement utilisés
    Arrondi à 2 décimales avec round()
    Fonction d'affichage séparée de la logique de calcul
*/

$nomJeu = "Cyber Race";
$prixJeu = 59.99;
$pourcentage = 0.15;
$labelPromo = "promotionSpeciale";


function promotionEte ($prixJeu) {
    $montantReduction = $prixJeu*0.20;
    $prixReduit = $prixJeu-$montantReduction;
    $prixReduit = round($prixReduit, 2);
    return $prixReduit;
}

function promotionHiver ($prixJeu) {
    $montantReduction = $prixJeu*0.30;
    $prixReduit = $prixJeu-$montantReduction;
    $prixReduit = round($prixReduit, 2);
    return $prixReduit;
}

function promotionSpeciale ($prixJeu, $pourcentage) {
    $montantReduction = $prixJeu*$pourcentage;
    $prixReduit = $prixJeu-$montantReduction;
    $prixReduit = round($prixReduit, 2);
    return $prixReduit;
}


if ($labelPromo == "promotionEte") {
    $labelPromo = "(Promo été -20%)<br>";
} elseif ($labelPromo == "promotionHiver") {
    $labelPromo = "(Promo hiver -30%)<br>";
} elseif ($labelPromo == "promotionSpeciale") {
    $labelPromo = "(Promo spéciale -15%)<br>";
} else {
    $labelPromo = "(Aucune promotion n'est appliquée)<br>";
};

function afficherPrix ($nomJeu, $prixJeu, $prixReduit, $labelPromo) {
    echo $nomJeu . ' : ' . $prixJeu . '€ -> ' . $prixReduit . ' € ' . $labelPromo;
};

// $prixReduit = promotionEte($prixJeu);
// $prixReduit = promotionHiver($prixJeu);
$prixReduit = promotionSpeciale($prixJeu,$pourcentage);
afficherPrix($nomJeu, $prixJeu, $prixReduit, $labelPromo);
?>