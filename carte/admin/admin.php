<?php
  session_start();
  require('assets/functions.php');
  require('../config/bd.php');

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  // use PHPMailer\PHPMailer\SMTP;

  require 'libraries/PHPMailer/Exception.php';
  require 'libraries/PHPMailer/PHPMailer.php';

  require 'libraries/PHPMailer/SMTP.php';
  if (!isset($_SESSION['user_id'])) {
    header('Location: login');
  }
  else{
    require('views/admin.view.php');
  }

  // Envoi d'un mail de type Newsletter

  if (!empty($_POST['send_newsletter'])) {

    $q = $db->query('SELECT email FROM client_newsletter');
    $destinataires = $q->fetchAll(PDO::FETCH_OBJ);
    foreach ($destinataires as $destinataire) {
      try {

        $destinataire = $destinataire->email;
        // ob_start(); // Tout ce qui va être fait sera stocké dans une mémoire tampon et ne sera pas affiché !

        $subject = $_POST['objet'];
        $header = "MIME-Version: 1.0"."\r\n";
        $header.= 'From: TaNewsletter <contact@monsite.fr/>'."\r\n";
        $header.= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
        $header.= 'Content-Transfer-Encoding: 8bit';

        $content = $_POST['message'];

        mail($destinataire, $subject, $content, $header);

        // Informer l'utilisateur pour qu'il vérifie sa boite de reception
        set_flash("La newsletter a été envoyé avec succès", "success");

      } catch (Exception $e) {

        // Informer l'utilisateur pour qu'il vérifie sa boite de reception
        set_flash("Un problème est survenue -->  Erreur : {$mail->ErrorInfo}", "danger");

      }
    }

  }
