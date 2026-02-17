<!-- <?php
echo "Hello, World !";
$name = "Mich Muche";
$age = 17;
$permis = true;
$car = false;

$message = "Attention ! ";

$ma_variable = "toto";
$voiture_sans_permis = true;
?> -->
<?php
// Créer un tableau associatif. Créer une fonction qui peut s'afficher à plusieurs endroits différents : Elle prendrait en argument le tableau et on fait en sorte de l'afficher à plusieurs endroits de la page. On doit afficher les informations d'un utilisateur dans le header et le footer. Dans le tableau : nom, prénom, email, darkmode (true ou false).
?>
<?php
    $users = [
    "name" => "Truc",
    "first_name" => "Bidule",
    "email" => "bidule.truc@mail.com",
    "dark_mode" => FALSE
    ];    
?>

<?php
function display_profile($users) {
    foreach ($users as $key => $value) {
        echo "$key = $value<br>";
        };
    echo "Bonjour ".$users["first_name"]." ".$users["name"]." (".$users["email"].") ! Le mode sombre est ".$users["dark_mode"].".";
    }
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widt, initial-scale=1.0">
    <title>PHP Training</title>
<?php
display_profile($users); 
?>

</head>

<body>
    <main>
        <h1>Welcome

            <?php

            if ($age > 18 ||  $permis && $car || $voiture_sans_permis) {
                echo "Il peut conduire";
            } else {
                echo "$message Vous ne pouvez pas conduire";
            }
            ?>
        </h1>

        <?php
        $people = [
            "nom" => "Dupont",
            "age" => 30,
            "ville" => "Paris"
        ];

        //echo $personne["nom"]; // Dupont


        echo "<hr>";
        foreach ($people as $key => $value) {
        
        echo "$key ======> $value<br>";
        }
        ?>

        <h2>
            <?php
            $valeur_test = "Vive";

            echo $valeur_test;

            $valeur_test .= " le rock !";

            echo $valeur_test;
            ?>

    </main>
    <footer>
        <?php
        display_profile($users); 
        ?>
    </footer>
</body>

</html>
