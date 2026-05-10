<?php
require __DIR__ . '/../fonctions.php';

$erreurs     = [];
$succes      = false;
$nom         = '';
$email       = '';
$type_projet = '';
$description = '';
$budget      = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom         = nettoyer($_POST['nom']         ?? '');
    $email       = nettoyer($_POST['email']       ?? '');
    $type_projet = nettoyer($_POST['type_projet'] ?? '');
    $description = nettoyer($_POST['description'] ?? '');
    $budget      = nettoyer($_POST['budget']      ?? '');

    if (!champ_requis($nom))         $erreurs[] = 'Le nom est obligatoire.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $erreurs[] = 'L\'adresse e-mail est invalide.';
    if (!champ_requis($type_projet)) $erreurs[] = 'Le type de projet est obligatoire.';
    if (!champ_requis($description)) $erreurs[] = 'La description est obligatoire.';

    if (empty($erreurs)) {
        $succes = true;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demande de projet | Portfolio Ousseynou Seck</title>
    <link rel="stylesheet" href="../css/Contact.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

<?php require __DIR__ . '/../composants/navigation.php'; ?>

<main>
    <div class="Contact-2" style="max-width: 700px; margin: 3rem auto;">
        <h1>Demande de <span>Projet</span></h1>
        <p style="margin-bottom: 1.5rem; color: #aaa;">Vous avez un projet en tête ? Remplissez ce formulaire et je vous recontacterai rapidement.</p>

        <?php if ($succes) : ?>
            <div style="background:#1a3a2a; border:1px solid #00abf0; border-radius:8px; padding:1rem; margin-bottom:1.5rem;">
                <p style="color: #00ff88; font-weight: bold;">✅ Demande envoyée avec succès !</p>
                <p style="color: #ccc; margin-top: 0.5rem;">Récapitulatif :</p>
                <ul style="color: #ccc; margin-top: 0.5rem;">
                    <li><strong>Nom :</strong> <?= $nom ?></li>
                    <li><strong>Email :</strong> <?= $email ?></li>
                    <li><strong>Type de projet :</strong> <?= $type_projet ?></li>
                    <li><strong>Budget :</strong> <?= $budget ?: 'Non précisé' ?></li>
                    <li><strong>Description :</strong> <?= $description ?></li>
                </ul>
            </div>
        <?php endif; ?>

        <?php if (!empty($erreurs)) : ?>
            <ul style="color: #ff6b6b; margin-bottom: 1.5rem;">
                <?php foreach ($erreurs as $erreur) : ?>
                    <li><?= $erreur ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="Contact-input">
                <input class="input" type="text" name="nom" placeholder="Votre nom complet *" value="<?= $nom ?>" />
                <input class="input" type="email" name="email" placeholder="Votre email *" value="<?= $email ?>" />
                <input class="input" type="text" name="type_projet" placeholder="Type de projet (ex: site web, app mobile) *" value="<?= $type_projet ?>" />
                <input class="input" type="text" name="budget" placeholder="Budget estimé (optionnel)" value="<?= $budget ?>" />
            </div>
            <textarea name="description" placeholder="Décrivez votre projet *" cols="70" rows="8"><?= $description ?></textarea>
            <br />
            <input class="button" type="submit" value="Envoyer la demande" />
        </form>
    </div>
</main>

<?php require __DIR__ . '/../composants/pied-de-page.php'; ?>