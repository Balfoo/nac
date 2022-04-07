  <footer>
    <div class="bas container">

    <div class="fleche_haut">
      <a href="#main-header" ><img <?php if (isset($carte) == true) { echo('src="../asset/img/fleche_haut.svg"');} else {echo('src="asset/img/fleche_haut.svg"');} ?>title="Aller en haut de la page" alt="Aller en haut de la page"></a>
    </div>
        
      <nav class="liens">
        <a href="">Plan du site</a>
        <a href="mentions_legales.php">Mentions légales</a>
        <a href="">Presse</a>
        <a href="contact.php">Contact</a>
      </nav>

      <div class="reseaux">
        <span>Réseaux : </span>
        <div class="img_reseaux">
          <a href=""><img <?php if (isset($carte) == true) { echo('src="../asset/img/logo-fb.svg"');} else {echo('src="asset/img/logo-fb.svg"');} ?> alt="Facebook"></a>
          <a href="https://www.youtube.com/channel/UCW9Kk343W9QsPje8cW_UnDw/featured"><img <?php if (isset($carte) == true) { echo('src="../asset/img/logo-yt.svg"');} else {echo('src="asset/img/logo-yt.svg"');} ?> alt="YouTube"></a>
          <a href=""><img <?php if (isset($carte) == true) { echo('src="../asset/img/logo-insta.svg"');} else {echo('src="asset/img/logo-insta.svg"');} ?> alt="Instagram"></a>
        </div>
      </div>

      <div class="lettre">
        <span>S'inscrire à la lettre d'information : </span>
        <form action="">
          <input class="recherche" type="text" placeholder="exemple@email.com">
          <button><img <?php if (isset($carte) == true) { echo('src="../asset/img/envoyer.svg"');} else {echo('src="asset/img/envoyer.svg"');} ?>alt="Rechercher"></button>
        </form>
      </div>

    </div>
  </footer>

  <script type="text/javascript" src="asset/script/jquery.min.js"></script>
  <script type="text/javascript" src="asset/script/jquery-migrate.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script type="text/javascript" src="asset/script/script.js"></script>


</body>