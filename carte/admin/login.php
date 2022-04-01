<?php
session_start();
require('assets/functions.php');
require('../config/bd.php');

// Condition d'accès à la page : L'utilisateur ne doit pas être connecté !
include('filters/guest_filter.php');

if (!empty($_SESSION['user_id'])) {
  header('Location: index');
}
  if (isset($_POST['login'])) { // Si le formulaire est soumis

    // Si tous les champs ont été remplis
    if (not_empty(['identifiant', 'password'])) {
      extract($_POST);

      $q = $pdo->prepare("SELECT id, identifiant, password FROM users
                         WHERE (identifiant = :identifiant)
                         AND password = :password");
      $q->execute(array(
        "identifiant" => $identifiant,
        "password" => sha1($password)
      ));

      $UserHasBeenFound = $q->rowCount();

      if ($UserHasBeenFound != 0) {

        $user = $q->fetch(PDO::FETCH_OBJ);

        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_identifiant'] = $user->identifiant;

        redirect_intention('profil?id='.$user->id);
      }
      else {
        set_flash('Combinaison Identifiant / Password incorrecte !', 'danger');
      }


    }else {
      $error[] = "Veuillez remplir tous les champs !";
    }


  }

 require('views/login.view.php');
?>
