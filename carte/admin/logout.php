<?php
session_start();

// Suppression l'entrée en BDD au niveau de auth_tokens
require("../config/bd.php");

$_SESSION = [];

// Redirection
header('Location: login');

?>
