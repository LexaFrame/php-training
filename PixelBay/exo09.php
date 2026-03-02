<?php 
/* 
Mission 9 — La Barre de Recherche

Compétences mobilisées : CP7
Tags : $_GET, formulaire, htmlspecialchars

PixelBay souhaite ajouter une barre de recherche sur son site. Les utilisateurs peuvent rechercher un jeu par nom, et les résultats s'affichent sur la même page.

    Créez un formulaire avec un champ de recherche (méthode GET).
    Récupérez le terme de recherche avec $_GET.
    Comparez le terme aux jeux d'un tableau PHP (recherche insensible à la casse).
    Affichez les résultats trouvés ou un message "Aucun résultat".
    Sécurisez l'affichage avec htmlspecialchars().

Nouvelle fonction PHP 8 : str_contains($chaine, $recherche) retourne true si $chaine contient $recherche. Combinée avec strtolower(), elle permet une recherche insensible à la casse :

if (str_contains(strtolower($titre), strtolower($recherche))) {
    // Le titre contient le terme recherché
}

Fichier : exo09.php

<?php
$catalogue = [
    ["titre" => "Cyber Race", "prix" => 49.99, "genre" => "Course"],
    ["titre" => "Dungeon Crawl", "prix" => 39.99, "genre" => "RPG"],
    ["titre" => "Battle Arena", "prix" => 29.99, "genre" => "Action"],
    ["titre" => "Pixel Quest", "prix" => 19.99, "genre" => "Aventure"],
    ["titre" => "Cyber Punk 2084", "prix" => 59.99, "genre" => "RPG"],
    ["titre" => "Racing Thunder", "prix" => 34.99, "genre" => "Course"]
];

// Votre code de recherche ici
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche - PixelBay</title>
</head>
<body>
    <h1>Recherche PixelBay</h1>
    <form action="" method="GET">
        <input type="text" name="q" placeholder="Rechercher un jeu..."
               value="<?= htmlspecialchars($_GET['q'] ?? '') ?>">
        <button type="submit">Rechercher</button>
    </form>

    <!-- Affichez les résultats ici -->
</body>
</html>

Attendus :

    Formulaire avec méthode GET
    Récupération du paramètre avec $_GET['q']
    Recherche insensible à la casse avec str_contains() et strtolower()
    Échappement des données affichées avec htmlspecialchars()
    Gestion du cas "aucun résultat"

Conseils pour cette partie

    str_contains($chaine, $recherche) retourne true si la chaîne contient le terme recherché
    strtolower() convertit une chaîne en minuscules pour comparer sans tenir compte de la casse
    $_GET['q'] ?? '' utilise l'opérateur null coalescent pour éviter les erreurs si le paramètre n'existe pas
    Toujours échapper les données utilisateur avant affichage pour éviter les failles XSS

*/

$catalogue = [
    ["titre" => "Cyber Race", "prix" => 49.99, "genre" => "Course"],
    ["titre" => "Dungeon Crawl", "prix" => 39.99, "genre" => "RPG"],
    ["titre" => "BattleArena", "prix" => 29.99, "genre" => "Action"],
    ["titre" => "Pixel Quest", "prix" => 19.99, "genre" => "Aventure"],
    ["titre" => "Cyber Punk 2084", "prix" => 59.99, "genre" => "RPG"],
    ["titre" => "Racing Thunder", "prix" => 34.99, "genre" => "Course"]
];

$rechercheJeu = isset($_GET["q"]) ? trim($_GET["q"]) : ""; // On récupère la saisie utilisateur grâce à $_GET et ["q"]. S'il n'a rien saisi, on assigne la valeur vide "". On vérifie avec isset que l'utilisateur a bien soumis le formulaire de recherche. Utilisation de trim pour éviter que la saisie d'un espace n'affiche toute la liste des jeux.
// Alternative : $rechercheJeu = $_GET["q"] ?? "";
$resultatRecherche = []; // Création de la variable qui va permettre de stocker les résultats de la recherche

if ($rechercheJeu !== "") { // On vérifie ce que contient la variable. Si elle contient une saisie utilisateur alors on lance une action :
    foreach ($catalogue as $jeuActuel) { // Filtrage du catalogue :
        if(str_contains(strtolower($jeuActuel["titre"]), strtolower($rechercheJeu))) { // Si la valeur de la variable issue du $_GET est identique au titre d'un jeu existant dans la base de donnée (tout en minuscule dans les deux cas), alors action :
            array_push($resultatRecherche, $jeuActuel); // Récupère la liste des jeux correspondants à la saisie utilisateur
        }
    };
};
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche - PixelBay</title>
</head>
<body>
    <h1>Recherche PixelBay</h1>
    <form action="" method="GET">
        <input type="text" name="q" placeholder="Rechercher un jeu..."
               value="<?= htmlspecialchars($_GET['q'] ?? '') ?>">
        <button type="submit">Rechercher</button>
    </form>

    <h2>Résultats de la recherche</h2>
        <table border = "1">
            <tr>
                <th>Nom du jeu</th>
                <th>Prix</th>
                <th>Genre</th>
            </tr>
            <!-- Ouverture de la balise php pour le IF, fermeture sur la même ligne -->
             <?php if (isset($_GET["q"]) && ($rechercheJeu !== "") && empty($resultatRecherche)) { ?>
            <!-- Insertion des lignes de code permettant d'afficher "aucun résultat" si la saisie utilisateur ne correspond pas à au moins un jeu de la base de données -->
                <tr>    
                <td colspan = "3"><?= "Aucun résultat." ?></td> 
                </tr>

            <!-- Retour de la balise php pour écrire le SINON du IF, fermée dans la foulée -->
            <?php } else { foreach ($resultatRecherche as $jeuActuel) {?>
            <!-- Insertion des lignes de code permettant d'afficher "aucun résultat" si la saisie utilisateur ne correspond pas à au moins un jeu de la base de données -->
            <tr>
                <td><?= htmlspecialchars($jeuActuel["titre"]) ?></td>
                <td><?= $jeuActuel["prix"] ?></td>
                <td><?= htmlspecialchars($jeuActuel["genre"]) ?></td>
            </tr>
            <!-- Réouverture de la balise php pour fermer le IF/ELSE -->
            <?php }}  ?>
        </table>

</body>
</html>