<?php 
/* 
Mission 8 — Le Générateur de Factures

Compétences mobilisées : CP3, CP7
Tags : function, array, foreach, calcul, HTML

PixelBay a besoin d'un système de génération de factures automatisé. Chaque facture affiche les articles commandés, le sous-total HT, la TVA et le total TTC dans un tableau HTML.

    Créez un tableau $commande contenant au moins 3 articles. Chaque article a un nom, un prix_unitaire et une quantite.
    Créez une fonction calculerTTC($prixHT, $tva) qui retourne le prix TTC.
    Générez un tableau HTML affichant chaque article avec son sous-total, puis le total HT, la TVA (20%) et le total TTC.

image

Fichier : exo08.php

<?php
$commande = [
    ["nom" => "Cyber Race", "prix_unitaire" => 49.99, "quantite" => 2],
    ["nom" => "Manette Pro", "prix_unitaire" => 59.99, "quantite" => 1],
    ["nom" => "Carte Mémoire 128Go", "prix_unitaire" => 24.99, "quantite" => 3]
];
$tva = 20;

// Vos fonctions et votre code HTML ici
?>

    Attendus :

        Fonction calculerTTC() avec calcul correct de la TVA
        Tableau HTML avec en-têtes, lignes dynamiques et lignes de total
        Sous-totaux calculés par article (prix unitaire x quantité)
        Mélange PHP/HTML avec la syntaxe alternative <?php foreach(): ?>

Étape 2 — Formulaires, GET et POST

Serveur PHPNavigateurServeur PHPNavigateurGET /exo09.php?q=cyber$_GET['q'] = "cyber"HTML avec résultatsPOST /exo10.php (nom, email, message)$_POST['nom'], validation

*/



?>