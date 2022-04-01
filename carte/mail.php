<?php
$name       =   $_POST['name'];
$email      =   $_POST['email'];
$message    =   $_POST['message'];


$destinataires = 'florent.hode.work@gmail.com';
$sujet = "Message Carte NAC";
 
// Version MINE
$entetes = "MIME-Version: 1.0\n";
 
// en-têtes expéditeur
$entetes .= "From : no-reply@Formulaire-NAC.fr\n";

// priorité urgente
$entetes .= "X-Priority : 1\n";
 
// type de contenu HTML
$entetes .= "Content-type: text/html; charset=utf-8\n";
 
// code de transportage
$entetes .= "Content-Transfer-Encoding: 8bit\n";
 
// message HTML
$message = "
<h1> Message provenant de la carte NAC de la part de " . $name . "</h1>
<br>
<h3>Mail emetteur : $email</h3>
" .
"<p>$message</p>";
 
mail($destinataires, $sujet, $message, $entetes);

header('Location: /mes_creation/nac/carte/index.php');