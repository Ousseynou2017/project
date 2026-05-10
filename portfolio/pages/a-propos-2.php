<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Compétences | Ousseynou Seck</title>
    
    <link rel="stylesheet" href="../css/a-propos.css" />
    
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  </head>
  <body>
   <?php require __DIR__ . '/../composants/navigation.php'; ?>

    <main>
      <section class="section-1">
        <h1>Mes <span class="span-1">Compétences</span></h1>
        <p>
          Je suis un étudiant passionné par le développement logiciel. 
          Mon objectif est de construire des interfaces utilisateur fluides et de maîtriser 
          l'administration des réseaux pour créer des solutions complètes.
        </p>
        
        <div class="about-buttons">
          <a href="./a-propos-2.php" class="btn-sub active">Compétences</a>
          <a href="./a-propos-3.php" class="btn-sub">A propos de moi</a>
        </div>
      </section>

      <section class="section-2">
        <h1>My <span class="span-1">Skills</span></h1>
        <p class="p-intro">Voici les technologies que je maîtrise pour donner vie à mes projets.</p>
        
        <div class="skills-grid">
          <div class="etiquette">
            <i class="bx bxl-html5"></i>
            <span>HTML5</span>
          </div>
          <div class="etiquette">
            <i class="bx bxl-css3"></i>
            <span>CSS3</span>
          </div>
          <div class="etiquette">
            <i class="bx bxl-javascript"></i>
            <span>JavaScript</span>
          </div>
          <div class="etiquette">
            <i class="bx bxl-python"></i>
            <span>Python</span>
          </div>
          <div class="etiquette">
            <i class="bx bxl-php"></i>
            <span>PHP</span>
          </div>
        </div>

        <p class="p-intro learning-title">Technologies en cours d'apprentissage</p>

        <div class="skills-grid">
          <div class="etiquette">
            <i class="bx bxl-tailwind-css"></i>
            <span>Tailwind</span>
            <small>Pas encore maîtrisé</small>
          </div>
          <div class="etiquette">
            <i class="bx bxl-react"></i>
            <span>React</span>
            <small>Pas encore maîtrisé</small>
          </div>
          <div class="etiquette">
            <i class="bx bxl-nodejs"></i>
            <span>Node.js</span>
            <small>Pas encore maîtrisé</small>
          </div>
        </div>
      </section>
    </main>
    <?php require __DIR__ . '/../composants/pied-de-page.php'; ?>
  </body>
</html>