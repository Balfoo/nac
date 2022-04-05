<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>NAC'ite | <?php echo(isset($titre)) ? $titre : ' ';  ?></title> <!-- Premet de mettre le nom de la page : Mettre la variable $titre = 'nom de la page' en première ligne sur le fichier view.php de la page. Si il n'y a pas de nom, rien ne s'affiche. -->
    <link rel="icon" href="asset/img/logo-nac.png">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="asset/style.css"> 
    <link rel="stylesheet" href="asset/normalize.css">
    <link rel="stylesheet" href="asset/haut.css">
    <link rel="stylesheet" href="asset/bas.css">
    <link rel="stylesheet" href="asset/index.css">
    <link rel="stylesheet" href="asset/bouton.css">
    <link rel="stylesheet" href="asset/animal.css">
    <link rel="stylesheet" href="asset/carte_animaux.css">
    <link rel="stylesheet" href="asset/recherche_animaux.css">
    <link rel="stylesheet" href="asset/contact.css">

    <!-- Carousel -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
</head>
<body>
  <div>
  <div class="posisition-fixe">
    <div class="bandeau_davertissement">
      <p>Ce site est un projet fictif dans la cadre d’un projet d’étude</p>
    </div>

    <header class="header" id="main-header">

        <div class="div1">
          <span class="titre">NAC'ite</span>
          <img class="logo" <?php if (isset($carte) == true) { echo('src="../asset/img/logo-nac.png"');} else {echo('src="asset/img/logo-nac.png"');} ?> alt="Logo NAC">
        </div>

        <div class="header-toogle">
          <a href="#main-header" class="header-toogle-open"><img src="asset/img/menu.svg" width="30" alt="Ouvrir Menu" /></a>
          <a href="#" class="header-toogle-close"><img src="asset/img/cross.svg" width="30" alt="Fermer Menu" /></a>
        </div>

          <div class="div2">
            <!--<a href="">accessibilité</a>
            <a href=""><img src="asset/img/fr.png" alt="langue"></a>-->
          </div>

        <nav class="div3 header-menu">
          <a <?php if (isset($carte) == true) { echo('href="../index.php"');} else {echo('href="index.php"');} ?>>Accueil</a>
          <a <?php if (isset($carte) == true) { echo('href="../recherche_animaux.php"');} else {echo('href="recherche_animaux.php"');} ?>>les NAC</a>
          <a <?php if (isset($carte) == true) { echo('href="index.php"');} else {echo('href="carte/"');} ?>>La carte</a>
          <a <?php if (isset($carte) == true) { echo('href="../contact.php"');} else {echo('href="contact.php"');} ?>>Qui sommes nous ?</a>
          <form class="form_recherche" action="">
            <input class="recherche" type="text" placeholder="Chercher sur le site">
            <button><img <?php if (isset($carte) == true) { echo('src="../asset/img/loupe.svg"');} else {echo('src="asset/img/loupe.svg"');} ?>alt="Rechercher"></button>
          </form>
        </nav>

    </header>
  </div>