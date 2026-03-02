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
// Initialisation des variables pour éviter les bugs HTML :
$name = "";
$email = "";
$subject = "";
$message = "";

// Variable permettant de stocker le message d'erreur à afficher :
$errorMsg = [];

// Variable permettant de dire si les données saisies ont toutes été valides ou non (succès de la soumission du formulaire):
$success = false;

// Options acceptées dans le menu déroulant :
$optionsSelect = ['question', 'reclamation', 'partenariat', 'autre'];

// Vérifier si la méthode est POST : si la méthode est post : alors traitement, sinon, non.
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Récupérer la saisie utilisateur soumise par $_POST, espaces retranchés
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $email = filter_var($email, FILTER_SANITIZE_EMAIL); // Nettoie des caractères interdits.

    // Tests de la saisie utilisateur : la saisie correspond-elle aux contraintes imposées ?
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

    // Si la saisie utilisateur dans le menu déroulant ne correspond pas aux valeurs prédéterminées attendues :
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

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - PixelBay</title>
        <style>
            .error {color: red;}
            .success {color: green;}
    </style>
</head>
<body>
    <h1>Contactez PixelBay</h1>

    <!-- Affichez les erreurs ou le message de succès -->

    <!-- Est-ce qu'il y a au moins un message stocké dans $errorMsg ? : -->
    <?php if(!empty($errorMsg)):?> 
        <ul>
            <!-- Pour chaque message, j'affiche une ligne -->
            <?php foreach ($errorMsg as $errorSingleMessage):?>
                <li class="error"><?= $errorSingleMessage ?></li>
            <?php endforeach;?>
        </ul>
    <?php endif;?>

    <!-- Si $success === true, alors : -->
    <?php if ($success):?>
    <!-- Message à afficher -->
     <p class="success">Le formulaire a été soumis avec succès !</p>
    <?php endif;?>

    <!-- Formulaire -->
    <form class="form" method="POST" action="">

    <!-- Champ Nom -->
    <label for="name">Nom</label>
        <!-- Empêcher l'injection de script malveillant avec htmlspecialchars (nom) -->
    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name);?>" placeholder="Entrez votre nom" required><br>

    <!-- Champ E-mail -->
    <label for="email">E-mail<span class="required"> *</span></label>
        <!-- Empêcher l'injection de script malveillant avec htmlspecialchars (email) -->
    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email);?>" placeholder="votre.email@example.com" required><br>

    <!-- Menu déroulant Sujet -->
    <label for="subject">Sujet<span class="required"> *</span></label>
    <select id="subject" name="subject" required>
    <option value="">-- Sélectionnez un sujet --</option>
        <!-- Vérification que la sélection de l'utilisateur est conforme à ce qui a été stocké dans la variable concernée -->
    <option value="question" <?php if ($subject === "question") echo "selected";?>>Question</option>
    <option value="reclamation" <?php if ($subject === "reclamation") echo "selected";?>>Réclamation</option>
    <option value="partenariat" <?php if ($subject === "partenariat") echo "selected";?>>Partenariat</option>
    <option value="autre" <?php if ($subject === "autre") echo "selected";?>>Autre</option>  
    </select><br>  

    <!-- Champ message -->
    <label for="message" >Message<span class="required"> *</span></label>
    <!-- Empêcher l'injection de script malveillant avec htmlspecialchars (message) -->
    <textarea id="message" name="message" placeholder="Entrez votre message..." rows="5" cols="30" required><?php echo htmlspecialchars($message); ?>
    </textarea>

    <button type="submit">Envoyer</button>
    </form>
</body>
</html>