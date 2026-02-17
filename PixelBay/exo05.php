<?php 
/* Mission 5 — Le Réapprovisionnement ⭐⭐⭐⭐

Compétences mobilisées : CP7
Tags : while, for, boucle

PixelBay reçoit des livraisons régulières. Chaque livraison apporte 8 jeux. Le gérant veut savoir combien de livraisons sont nécessaires pour atteindre un stock cible, et afficher le calendrier des livraisons.

    Boucle while : Le stock actuel est de 12 jeux. Le stock cible est de 100 jeux. Chaque livraison apporte 8 jeux. Calculez le nombre de livraisons nécessaires avec une boucle while.
    Boucle for : Affichez le calendrier des 12 mois de l'année avec le jeu phare associé à chaque mois (utilisez deux tableaux : $mois et $jeuxPhares).

<?php
// Exercice 1 : Réapprovisionnement avec while
$stockActuel = 12;
$stockCible = 100;
$parLivraison = 8;

// Votre code ici

// Exercice 2 : Calendrier avec for
$mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
         "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
$jeuxPhares = ["Cyber Race", "Pixel Quest", "Block Master", "Sky Pilot",
               "Dungeon Crawl", "Mystic Lands", "Battle Arena", "Escape Room",
               "Neural Rush", "Horror House", "Festival Games", "Winter Sports"];

// Votre code ici
?>

Résultat attendu :

--- Réapprovisionnement ---
Livraison 1 : stock = 20
Livraison 2 : stock = 28
...
Livraison 11 : stock = 100
Nombre total de livraisons : 11

--- Calendrier PixelBay ---
Janvier : Cyber Race
Février : Pixel Quest
...
Décembre : Winter Sports

Attendus :

    Boucle while avec condition d'arrêt correcte
    Compteur de livraisons incrémenté à chaque itération
    Boucle for avec count() pour parcourir les tableaux
    Correspondance correcte entre mois et jeux phares par index
    */

$stockActuel = 12;
$stockCible = 100;
$parLivraison = 8;
$nombreLivraisons = 0;

$mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
$jeuxPhares = ["Cyber Race", "Pixel Quest", "Block Master", "Sky Pilot", "Dungeon Crawl", "Mystic Lands", "Battle Arena", "Escape Room","Neural Rush", "Horror House", "Festival Games", "Winter Sports"];

echo "--- Réapprovisionnement --- <br>";
while ($stockActuel < $stockCible) {
    $stockActuel = $stockActuel + $parLivraison;
    $nombreLivraisons++;
    echo 'Livraison ' . $nombreLivraisons . ' : ' . 'stock = ' . $stockActuel . '<br>';
};

echo "Le nombre total de livraisons nécessaires pour atteindre le stock cible de $stockCible est de $nombreLivraisons livraisons.<br>";

echo "--- Calendrier PixelBay --- <br>";
for ($i = 0; $i< count($mois); $i++) {
    echo $mois[$i] . ' : ' . $jeuxPhares[$i] . '<br>';
};
?>