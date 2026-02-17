<?php
/*
Mission 4 — Les Rayons du Magasin ⭐⭐⭐⭐

Compétences mobilisées : CP7
Tags : switch, case, break

PixelBay organise ses jeux par rayons identifiés par des codes lettres. Les employés doivent pouvoir retrouver rapidement l'emplacement d'un rayon à partir de son code.

Chaque rayon a un code et une description :

    "A" : "Rayon Action-Aventure - Allée 1"
    "R" : "Rayon RPG - Allée 2"
    "S" : "Rayon Sport - Allée 3"
    "C" : "Rayon Course - Allée 4"
    "P" : "Rayon Puzzle-Réflexion - Allée 5"

Créez un script qui affiche la description du rayon à partir de son code. Gérez le cas où le code n'existe pas.

<?php
$codeRayon = "R"; // Testez avec différentes valeurs

// Votre code ici
?>

Résultat attendu :

Code rayon : R
Rayon RPG - Allée 2

Attendus :

    Structure switch / case / break / default correcte
    Tous les 5 codes gérés
    Cas default pour les codes inconnus
    Instruction break présente dans chaque case
*/

// $codeRayon = 'A';

// $codeRayon = 'R';

// $codeRayon = 'S';

// $codeRayon = 'C';

// $codeRayon = 'P';

$codeRayon = '';

switch ($codeRayon) {
    case "A":
        echo "Rayon Action-Aventure - Allée 1";
        break;
    case "R":
        echo "Rayon RPG - Allée 2";
        break;
    case "S":
        echo "Rayon Sport - Allée 3";
        break;
    case "C":
        echo "Rayon Course - Allée 4";
        break;
    case "P":
        echo "Rayon Puzzle-Réflexion - Allée 5";
        break;
    default:
        echo "Code inconnu";
        break;
};
?>