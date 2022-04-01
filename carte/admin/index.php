<?php
  session_start();
  require('../config/bd.php');
  require('assets/functions.php');

  if(isset($_POST['send_new_client'])){

    $q = $pdo->prepare('SELECT email FROM client_newsletter
                       WHERE email = :email');

    $q->execute(["email" => $_POST['email']]);

    $client = $q->rowCount();

    if ($client == '0') {
      $q = $pdo->prepare('INSERT INTO client_newsletter(email) VALUES (:email)');

      $q->execute([
        "email" => $_POST['email']
      ]);

      set_flash('Vous avez bien été ajouté !', 'info');

    }
    else {
      set_flash('Votre mail est déjà ajoutée !', 'danger');
    }

  }

  require('views/admin.view.php');

?>
