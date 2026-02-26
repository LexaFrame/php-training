<?php 
/*
Mission 7 — Analyse de la Collection ⭐⭐⭐

Compétences mobilisées : CP7
Tags : array, foreach, function, tableau associatif

PixelBay souhaite analyser sa collection de jeux pour identifier les meilleures ventes et calculer des statistiques sur les scores attribués par les clients.

    Créer la collection : Déclarez un tableau $collection contenant au moins 4 jeux. Chaque jeu est un tableau associatif avec les clés : titre, prix, genre, stock, scores (tableau de notes sur 100).
    afficherJeu($jeu) : Affiche les détails d'un jeu.
    calculerMoyenneScores($jeu) : Calcule et retourne la moyenne des scores d'un jeu.
    trouverMeilleurJeu($collection) : Parcourt la collection et retourne le jeu avec la meilleure moyenne de scores.

    <?php
$collection = [
    [
        "titre" => "Cyber Race",
        "prix" => 49.99,
        "genre" => "Course",
        "stock" => 30,
        "scores" => [85, 90, 78, 92, 88]
    ],
    // Ajoutez au moins 3 autres jeux
];

// Vos fonctions ici

// Tests
?>

Attendus :

    Tableau de tableaux associatifs correctement structuré
    Fonction calculerMoyenneScores() avec parcours foreach et division par count()
    Fonction trouverMeilleurJeu() avec comparaison itérative des moyennes
    Appel des fonctions et affichage du meilleur jeu
*/

$collection = [
    ["Titre" => "Odin Sphere", "Prix" => 49.99, "Genre" => "A-RPG", "Stock" => 6, "Score" => [80, 75, 85, 90]],
    ["Titre" => "Persona3", "Prix" => 49.99, "Genre" => "RPG", "Stock" => 8, "Score" => [80, 70, 88, 85]],
    ["Titre" => "Ragnarok Online", "Prix" => 39.99, "Genre" => "MMORPG", "Stock" => 2, "Score" => [75, 80, 70, 77]],
    ["Titre" => "Mario Kart", "Prix" => 59.99, "Genre" => "Course", "Stock" => 10, "Score" => [90, 85, 82, 80]]
];

// La partie ci-dessus est correcte

function afficherJeu($jeu) { // La fonction reçoit un seul jeu en paramètre et l'affiche
    $nombreScores = count($jeu["Score"]); // Ligne correcte
    $i = 0 ; // Initialise le compteur
    $texte = ""; // Création de la variable qui permettra de stocker les scores issus du foreach avec leur mise en forme.
    foreach ($jeu["Score"] as $scores) { // Ligne correcte. Le foreach est dans la fonction puisque les scores font partie du détail des jeux.
        $texte .= $scores; // On ajoute $scores à la valeur de $texte.
            if ($i == $nombreScores -1) { // Compare la valeur de l'index au nombre de scores
                $texte .= '.'; // Si $i est égal au nombre de scores moins 1 : on ajoute un point à la valeur de $scores.
            } else {
                $texte .= ', '; // Si $i n'est pas égal au nombre de scores moins 1 : on ajoute une virgule à la valeur de $scores..
            }
            $i++ ; // Incrémentation du compteur après avoir utilisé sa valeur courante pour décider si virgule ou point
    }; 
        
    echo $jeu["Titre"] . ', ' . $jeu["Prix"] . ', ' . $jeu["Genre"] . ', ' . $jeu["Stock"] . ', ' . $texte . "<br>"; // Comme les scores sont dans un array, utilisation d'une variable pour pouvoir les afficher.
};

foreach ($collection as $jeu) { // Ligne correcte. Le foreach appelle afficherJeu pour chaque jeu.
    afficherJeu($jeu); // Vérifier s'il est affiché au bon endroit (info un peu floue) 
}


function calculerMoyenneScores($scores) {
    // $nombreScores = count($scores); - Option 1
    $totalScores = 0;
    foreach ($scores as $tousScores) {
        $totalScores = $totalScores + $tousScores;
    }
    // $moyenneScores = $totalScores / $nombreScores; - Option 1
    // echo $moyenneScores; - Option 1
    // return $moyenneScores; - Option 1
    return $totalScores / count($scores); // Option 2
}

// calculerMoyenneScores($jeu["Score"]); : à insérer dans la fonction trouverMeilleureMoyenneJeu

function trouverMeilleureMoyenneJeu($collection) {
    $meilleureMoyenneActuelle = 0; // Initialiser la variable pour l'utiliser ensuite dans la boucle
    $meilleurJeu = null; // Initialiser la variable pour l'utiliser ensuite dans la boucle
    foreach($collection as $jeu) {
        $resultatCalculMoyenneScores = calculerMoyenneScores($jeu["Score"]); // Récupérer le résultat de la fonction et le stocker dans la variable $resultatCalculMoyenneScores
        var_dump($meilleureMoyenneActuelle);
        var_dump($resultatCalculMoyenneScores);
            if ($meilleureMoyenneActuelle < $resultatCalculMoyenneScores) {
            $meilleureMoyenneActuelle = $resultatCalculMoyenneScores;
            $meilleurJeu = $jeu; // Récupération du meilleur jeu
            } else {

            };
    };
    return $meilleurJeu;
};

$jeuFinal = trouverMeilleureMoyenneJeu($collection);
afficherJeu($jeuFinal);
?>