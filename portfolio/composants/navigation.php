<?php $page_courante = basename($_SERVER['PHP_SELF']); ?>
<header>
  <a href="/portfolio/index.php" class="logo"><h2>Portfolio.</h2></a>
  <nav>
    <ul>
      <li><a class="head <?php if ($page_courante === 'index.php') echo 'active'; ?>" href="/portfolio/index.php">Accueil</a></li>
      <li><a class="head <?php if ($page_courante === 'a-propos-2.php') echo 'active'; ?>" href="/portfolio/pages/a-propos-2.php">À propos</a></li>
      <li><a class="head <?php if ($page_courante === 'mes-projets-1.php') echo 'active'; ?>" href="/portfolio/pages/mes-projets-1.php">Projets</a></li>
      <li><a class="head <?php if ($page_courante === 'Contact.php') echo 'active'; ?>" href="/portfolio/pages/Contact.php">Contact</a></li>
    </ul>
  </nav>
</header>