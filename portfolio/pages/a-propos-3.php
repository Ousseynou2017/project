<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>� propos de moi | Ousseynou Seck</title>
    
    <link rel="stylesheet" href="../css/a-propos.css" />
    
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php require __DIR__ . '/../composants/navigation.php'; ?>

    <main>
      <section class="section-1">
        <h1>A propos de moi</h1>
        <p>
          Je suis un futur expert en G�nie Logiciel, passionn� par la cr�ation 
          d'applications web et l'optimisation des infrastructures r�seaux.
        </p>
        
        <div class="about-buttons">
          <a href="./a-propos-2.php" class="btn-sub">Comp�tences</a>
          <a href="./a-propos-3.php" class="btn-sub active">A propos de moi</a>
        </div>
      </section>

      <section class="section-2">
        <h1>About <span class="span-1">Me</span></h1>
        <p class="p-1">
          Voici quelques d�tails personnels et professionnels me concernant.
        </p>
        
        <div class="section-info">
          <p><span>Nom</span> Ousseynou Seck</p>
          <p><span>Statut</span> C�libataire</p>
          <p><span>Exp�rience</span> 2 an</p>
          <p><span>T�l�phone</span> (+221) 76 463 44 89</p>
          <p><span>Genre</span> Homme</p>
          <p><span>Ville</span> Dakar</p>
          <p><span>Temps plein</span> Disponible</p>
          <p><span>Email</span> oseck2005@gmail.com</p>
          <p><span>�ge</span> 21 ans</p>
          <p><span>Nationalit�</span> S�n�galais</p>
          <p><span>Freelance</span> Disponible</p>
          <p><span>Langues</span> Fran�ais, Anglais</p>
        </div>
      </section>
    </main>

    <?php require __DIR__ . '/../composants/pied-de-page.php'; ?>
  </body>
</html>