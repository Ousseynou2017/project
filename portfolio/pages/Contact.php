<?php
require __DIR__ . '/../fonctions.php';

$erreurs = [];
$succes  = false;
$nom     = '';
$email   = '';
$telephone = '';
$sujet   = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom       = nettoyer($_POST['nom']       ?? '');
    $email     = nettoyer($_POST['email']     ?? '');
    $telephone = nettoyer($_POST['telephone'] ?? '');
    $sujet     = nettoyer($_POST['sujet']     ?? '');
    $message   = nettoyer($_POST['message']   ?? '');

    if (!champ_requis($nom))     $erreurs[] = 'Le nom est obligatoire.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $erreurs[] = 'L\'adresse e-mail est invalide.';
    if (!champ_requis($message)) $erreurs[] = 'Le message ne peut pas être vide.';

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
    <title>Contact | Portfolio Ousseynou Seck</title>
    <link rel="stylesheet" href="../css/Contact.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>

<?php require __DIR__ . '/../composants/navigation.php'; ?>

<main>
    <div class="Contact-1">
        <h1>Lest's <span class="blue">Work Together</span></h1>
        <p>Travaillons ensemble ! N'hésitez pas à me contacter pour discuter de vos projets ou collaborations.</p>
        <div class="icon">
            <div class="icon-info">
                <div><i class="bx bxs-phone"></i></div>
                <div>
                    <div class="name-icon">Phone</div>
                    <div>(+221) 76 463 44 89</div>
                </div>
            </div>
            <div class="icon-info">
                <div><i class="bx bxs-envelope"></i></div>
                <div>
                    <div class="name-icon">Email</div>
                    <div>oseck2005@gmail.com</div>
                </div>
            </div>
            <div class="icon-info">
                <div><i class="bx bxs-location-plus"></i></div>
                <div>
                    <div class="name-icon">Adresse</div>
                    <div>Keur Massar, Cité Pénitence</div>
                </div>
            </div>
        </div>
    </div>

    <div class="Contact-2">
        <h1>Contact <span>Me!</span></h1>

        <?php if ($succes) : ?>
            <p style="color: green; font-weight: bold;">✅ Message envoyé avec succès ! Je vous répondrai bientôt.</p>
        <?php endif; ?>

        <?php if (!empty($erreurs)) : ?>
            <ul style="color: red;">
                <?php foreach ($erreurs as $erreur) : ?>
                    <li><?= $erreur ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="Contact-input">
                <input class="input" type="text" name="nom" placeholder="Nom complet" value="<?= $nom ?>" />
                <input class="input" type="email" name="email" placeholder="Adresse email" value="<?= $email ?>" />
                <input class="input" type="tel" name="telephone" placeholder="Numéro de téléphone" value="<?= $telephone ?>" />
                <input class="input" type="text" name="sujet" placeholder="Sujet" value="<?= $sujet ?>" />
            </div>
            <textarea name="message" placeholder="Votre message" cols="70" rows="10"><?= $message ?></textarea>
            <br />
            <input class="button" type="submit" value="Envoyer le message" />
        </form>
    </div>
</main>

<?php require __DIR__ . '/../composants/pied-de-page.php'; ?>

</body>
</html>