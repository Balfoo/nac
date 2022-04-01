<?php

if (isset($_SESSION['user_id']) && isset($_SESSION['user_pseudo'])) {
  // On n'utilise pas la fonction redirect pour ne pas inclure un fichier complet pour rien !
  header('Location: index');
  exit();
}

 ?>
