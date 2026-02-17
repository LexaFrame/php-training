<?php
/* Mission 2 — Le Catalogue de Jeux ⭐⭐⭐⭐

Compétences mobilisées : CP7
Tags : array, foreach, echo

PixelBay a besoin d'organiser son catalogue de jeux vidéo. Actuellement, les titres sont listés sur un tableau blanc dans l'arrière-boutique. Votre responsable vous demande de créer une version numérique de ce catalogue pour pouvoir consulter, modifier et afficher les informations des jeux rapidement.

Tableau numéroté : Créez un tableau $jeux contenant au moins 5 noms de jeux vidéo.
Affichage : Affichez le deuxième jeu du tableau.
Modification : Remplacez le troisième jeu par un autre titre, puis affichez-le.
Tableau associatif : Créez un tableau $jeuStar contenant les clés titre, prix, genre et stock pour un jeu phare.
Parcours : Affichez toutes les informations du jeu star avec une boucle foreach.

Résultat attendu :

    Le deuxième jeu est : The Legend of Zelda
    Le nouveau troisième jeu est : Metroid Prime
    --- Jeu Star ---
    [titre] : Cyber Race
    [prix] : 49.99
    [genre] : Course
    [stock] : 30

Tableau numéroté $jeux avec au moins 5 éléments
Accès correct par index (index commence à 0)
Modification d'un élément par son index
Tableau associatif $jeuStar avec clés nommées
Boucle foreach avec extraction clé/valeur

*/
$jeux = ['Odin Sphere', 'Persona 3', 'Soul Calibur 2', 'Tomb Raider 2', 'Rayman', 'Mario Kart'];

echo "$jeux[1]<br>";

$jeux[2] = 'Ragnarok Online';

$jeuStar = [
    "titre" => 'Odin Sphere',
    "prix" => 49.99,
    "genre" => 'A-RPG',
    "stock" => 30
];

foreach ($jeuStar as $clé => $valeur) {
    echo "$clé ===> $valeur<br>";
};
?>


<?php
/* Code alternatif après recherche pour correction : 
Tableau numéroté de jeux vidéo
$jeux = [
    'Odin Sphere',
    'Persona 3',
    'Soul Calibur 2',
    'Tomb Raider 2',
    'Rayman',
    'Mario Kart'
];

Affichage du deuxième jeu (index 1)
echo "Le deuxième jeu est : " . $jeux[1] . "<br>";

Modification du troisième jeu (index 2)
$jeux[2] = 'Ragnarok Online';

Tableau associatif pour le jeu star
$jeuStar = [
    'titre' => 'Odin Sphere',
    'prix'  => 49.99,
    'genre' => 'A-RPG',
    'stock' => 30
];

Affichage des informations du jeu star
echo "--- Jeu Star ---<br>";

foreach ($jeuStar as $cle => $valeur) {
    echo "[$cle] : $valeur<br>";
}*/

?>