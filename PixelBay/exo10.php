<?php
/*
Mission 10 — Le Formulaire de Contact

Compétences mobilisées : CP7
Tags : $_POST, $_SERVER, validation, htmlspecialchars

PixelBay reçoit des demandes de clients par email. Un formulaire de contact permet de centraliser les messages et de valider les données avant traitement.

Créez un formulaire de contact (méthode POST) sur une seule page (exo10.php) avec les champs suivants :

    Nom (obligatoire, 2 à 50 caractères)
    Email (obligatoire, format email valide)
    Sujet (liste déroulante : "Question", "Réclamation", "Partenariat", "Autre")
    Message (obligatoire, 10 caractères minimum)

Implémentez :

    La vérification de la méthode avec $_SERVER['REQUEST_METHOD']
    Le nettoyage des données avec htmlspecialchars() et filter_var()
    L'affichage des erreurs en rouge et du message de succès en vert
    La conservation des valeurs saisies dans le formulaire après soumission

Fichier : exo10.php

<?php
$erreurs = [];
$succes = false;

// Votre logique de traitement ici
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - PixelBay</title>
</head>
<body>
    <h1>Contactez PixelBay</h1>

    <!-- Affichez les erreurs ou le message de succès -->
    <!-- Votre formulaire ici -->
</body>
</html>

Attendus :

    Formulaire avec méthode POST
    Vérification de $_SERVER['REQUEST_METHOD'] === 'POST'
    Validation de chaque champ avec messages d'erreur explicites
    Nettoyage avec htmlspecialchars() et filter_var() pour l'email
    Conservation des valeurs saisies via l'attribut value
    Affichage conditionnel des erreurs ou du message de succès

*/


// Vérifier si la méthode est POST : si la méthode est post : alors traitement, sinon, non.

$errorMsg = [];
$success = false;
$optionsSelect = ['question', 'reclamation', 'partenariat', 'autre'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (empty($name)) {
        $errorMsg[] = "Merci de saisir votre nom";
    } elseif (strlen($name) <2 || strlen($name) >50) {
        $errorMsg[] = "Merci de saisir un nom dont la longueur est comprise entre 2 et 50 caractères";
    };

    if (empty($email)) {
        $errorMsg[] = "Merci de saisir votre adresse e-mail";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMsg[] = "Veuillez saisir un format d'email valide";
    };

    // SI valeur_recue n’appartient PAS à valeurs_autorisees :
    if (!in_array($subject, $optionsSelect)) {
        $errorMsg[] = "Veuillez sélectionner un sujet valide dans la liste déroulante";
    };

    if (empty($message)){
        $errorMsg[] = "Merci de saisir votre message";
    } elseif (strlen($message) <10) {
        $errorMsg[] = "Merci de saisir un message dont la longueur est d'au minimum 10 caractères";
    };

    if (empty($errorMsg)) {
        $success = true;
    };

};

/*
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
*/

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - PixelBay</title>
</head>
<body>
    <h1>Contactez PixelBay</h1>

    <!-- Affichez les erreurs ou le message de succès -->



    <!-- Formulaire -->

    <form class="form" method="POST" action="">

    <!-- Champ Nom -->
    <label for="name">Nom</label>
    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name);?>" placeholder="Entrez votre nom" required><br>

    <!-- Champ E-mail -->
    <label for="email">E-mail<span class="required"> *</span></label>
    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email);?>" placeholder="votre.email@example.com" required><br>

    <!-- Menu déroulant Sujet -->

    <label for="subject">Sujet<span class="required"> *</span></label>
    <select id="subject" name="subject" required>
    <option value="selection">-- Sélectionnez un sujet --</option>
    <option value="question" <?php if ($subject === "question") echo "selected";?>>Question</option>
    <option value="reclamation" <?php if ($subject === "reclamation") echo "selected";?>>Réclamation</option>
    <option value="partenariat" <?php if ($subject === "partenariat") echo "selected";?>>Partenariat</option>
    <option value="autre" <?php if ($subject === "autre") echo "selected";?>>Autre</option>  
    </select><br>  

    <!-- Champ message -->
    <label for="message" >Message<span class="required"> *</span></label>
    <textarea id="message" name="message" placeholder="Entrez votre message..." rows="5" cols="30" required><?php echo htmlspecialchars($message); ?>
    </textarea>

</body>
</html>
