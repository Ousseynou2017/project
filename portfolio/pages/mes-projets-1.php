<?php
require '../fonctions.php';

$projets = [
    [
        'titre'        => 'YouTube Clone',
        'description'  => 'RÃ©plique simplifiÃ©e de l\'interface YouTube, rÃ©alisÃ©e pour maÃ®triser les bases du positionnement CSS.',
        'technologies' => ['HTML', 'CSS'],
        'image'        => '../images/Youtube.png',
        'lien'         => 'https://ousseynou2017.github.io/project/YouTube/',
        'github'       => 'https://github.com/Ousseynou2017/project/tree/main/YouTube',
    ],
    [
        'titre'        => 'Netflix Clone',
        'description'  => 'RÃ©plique de la page d\'accueil Netflix pour pratiquer les layouts CSS avancÃ©s.',
        'technologies' => ['HTML', 'CSS'],
        'image'        => '../images/Netflix.png',
        'lien'         => 'https://ousseynou2017.github.io/project/Netflix/',
        'github'       => 'https://github.com/Ousseynou2017/project/tree/main/Netflix',
    ],
    [
        'titre'        => 'Page Hommage',
        'description'  => 'Page d\'hommage rÃ©alisÃ©e dans le cadre d\'un exercice sur la mise en page HTML.',
        'technologies' => ['HTML', 'CSS'],
        'image'        => '../images/combat.png',
        'lien'         => '#',
        'github'       => 'https://github.com/Ousseynou2017/project/tree/main/hommage',
    ],
    [
        'titre'        => 'Product Landing Page',
        'description'  => 'Page de prÃ©sentation d\'un produit, rÃ©alisÃ©e pour pratiquer la mise en page et le design CSS.',
        'technologies' => ['HTML', 'CSS'],
        'image'        => '../images/img-1.png',
        'lien'         => 'https://ousseynou2017.github.io/project/product-landing/',
        'github'       => 'https://github.com/Ousseynou2017/project/tree/main/product-landing',
    ],
];
$mot_cle  = nettoyer($_GET['q'] ?? '');
$resultats = [];

if ($mot_cle !== '') {
    foreach ($projets as $projet) {
        if (stripos($projet['titre'], $mot_cle) !== false ||
            stripos($projet['description'], $mot_cle) !== false) {
            $resultats[] = $projet;
        }
    }
} else {
    $resultats = $projets;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projets | Portfolio Ousseynou Seck</title>
    <link rel="stylesheet" href="../css/mes-projet.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

<?php require '../composants/navigation.php'; ?>

<main>
    <h1 class="titre">Latest <span>Projects</span></h1>

    <!-- Barre de recherche -->
    <form method="GET" action="" style="text-align:center; margin: 2rem 0;">
        <input
            type="text"
            name="q"
            placeholder="Rechercher un projet..."
            value="<?= $mot_cle ?>"
            style="padding: 0.7rem 1rem; width: 300px; border-radius: 8px; border: none; font-size: 1rem;"
        />
        <button type="submit" style="padding: 0.7rem 1.2rem; background: #00abf0; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 1rem;">
            Rechercher
        </button>
    </form>

    <!-- Résultats -->
    <?php if (empty($resultats)) : ?>
        <p style="text-align:center; color: #aaa;">Aucun projet ne correspond à votre recherche.</p>
    <?php endif; ?>

    <?php foreach ($resultats as $projet) : ?>
    <div class="Section">
        <div class="section-1">
            <h3><?= htmlspecialchars($projet['titre']) ?> <span>Project</span></h3>
            <p><?= htmlspecialchars($projet['description']) ?></p>
            <div class="icon">
                <p class="langage"><?= implode(', ', $projet['technologies']) ?></p>
                <div class="project-links">
                    <a target="_blank" href="<?= htmlspecialchars($projet['lien']) ?>"><i class='bx bx-link-external'></i></a>
                    <a target="_blank" href="<?= htmlspecialchars($projet['github']) ?>"><i class='bx bxl-github'></i></a>
                </div>
            </div>
            <a href="/pages/demande-projet.php" class="button-1" style="display:inline-block; margin-top:1rem; padding: 0.6rem 1.2rem; background:#00abf0; color:white; border-radius:8px; text-decoration:none;">
                Demander ce projet
            </a>
        </div>
        <div class="section-2">
            <img src="<?= htmlspecialchars($projet['image']) ?>" alt="<?= htmlspecialchars($projet['titre']) ?>" />
        </div>
    </div>
    <?php endforeach; ?>
</main>

<?php require '../composants/pied-de-page.php'; ?>

</body>
</html>