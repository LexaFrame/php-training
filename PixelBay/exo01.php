<?php

/* Mission 1 — Bienvenue chez PixelBay ⭐⭐⭐⭐

Compétences mobilisées : CP7
Tags : variable, const, echo, concaténation

Initialement, PixelBay possède 500 jeux en stock et chaque jeu se vend en moyenne 45 €.

    Fiche du magasin : Déclarez le nom de la boutique en constante et le nombre de jeux en stock en variable.
    Promotion éclair : 25% des jeux sont vendus en une journée. Mettez à jour le stock et calculez le chiffre d'affaires de cette vente.
    Affichage : Affichez toutes les informations en utilisant la concaténation avec le point . et l'interpolation avec les guillemets doubles.

<?php
// Déclarer les variables et constantes nécessaires

?>

Résultat attendu :

Boutique : PixelBay
Stock initial : 500 jeux
Jeux vendus : 125
Nouveau stock : 375 jeux
Chiffre d'affaires : 5625 €

Attendus :

    Constante NOM_BOUTIQUE déclarée avec const
    Variables $stock et $prixMoyen correctement initialisées
    Calcul du nombre de jeux vendus (25% du stock)
    Mise à jour du stock après la vente
    Affichage avec concaténation (.) et interpolation ("...")

    Conseils pour cette partie

    Utilisez const pour les valeurs qui ne changent jamais (nom de la boutique)
    Utilisez $variable pour les valeurs modifiables (stock, prix)
    La concaténation en PHP se fait avec le point : 'texte' . $variable
    L'interpolation fonctionne uniquement avec les guillemets doubles : "Stock : $stock"
*/

// Mon code : 
const NOM_BOUTIQUE = "PixelBay";
$stock = 500;
$prix_moyen = 45;

$jeux_vendus = $stock*25/100;
$stock_update = $stock-$jeux_vendus;
$chiffre_affaires = $jeux_vendus*$prix_moyen;

echo NOM_BOUTIQUE . ' dispose d\'un stock de ' . $stock . ' jeux à un prix moyen de ' . $prix_moyen . ' €. ';
echo NOM_BOUTIQUE . " a vendu aujourd'hui $jeux_vendus jeux pour $chiffre_affaires € et le stock est désormais de $stock_update jeux.";
?>


<?php
/* Code alternatif après recherche pour correction : 

const NOM_BOUTIQUE2 = "PixelBay";

$stock = 500;
$prixMoyen = 45;

$jeuxVendus = $stock * 0.25;

echo "Boutique : " . NOM_BOUTIQUE2 . "<br>";
echo "Stock initial : $stock jeux<br>";
echo "Jeux vendus : $jeuxVendus<br>";

$stock -= $jeuxVendus;

$chiffreAffaires = $jeuxVendus * $prixMoyen;

echo "Nouveau stock : $stock jeux<br>";
echo "Chiffre d'affaires : $chiffreAffaires €";*/
?>