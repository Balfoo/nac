<?php
if (!isset($_SESSION['user_id']) && !isset($_SESSION['pseudo'])) {

  // Définie la var session qui sauvegarde là où devez aller mais qu'on ne peut pas (il faut être identifié)
  $_SESSION['forwarding_url'] = $_SERVER['REQUEST_URI'];

  // On n'utilise pas la fonction redirect pour ne pas inclure un fichier complet pour rien !
  set_flash('Vous devez être connecté pour accéder à cette page !', 'warning');
  set_flash('Vous devez être connecté pour accéder à cette page !', 'danger');
  header('Location: login');
  exit();
}

?>
