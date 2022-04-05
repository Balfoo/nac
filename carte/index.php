<?php 
$titre="Carte";
$carte=true;
require_once('config/bd.php'); 
include('../partials/_header.php');?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Carte des NAC</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="spectre.min.css" />
  <link rel="stylesheet" href="spectre-icons.min.css" />
  <link rel="stylesheet" href="spectre-exp.min.css" />

  <link rel="stylesheet" href="../asset/normalize.css">
  <link rel="stylesheet" href="../asset/haut.css">
  <link rel="stylesheet" href="../asset/bas.css">
  <link rel="stylesheet" href="../asset/bouton.css">
  <link rel="stylesheet" href="../asset/style.css"> 

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin="" />
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css" />
  <link rel="stylesheet" type="text/css"
    href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css" />
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
  <script type='text/javascript' src='https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js'>
  </script>
  <script type='text/javascript' src='carte.js'></script>

  <script type="text/javascript">
    // On initialise la latitude et la longitude de Paris (centre de la carte)
    var lat = 48.852969;
    var lon = 2.349903;

    <?php 
      $requete = $pdo->query("SELECT * FROM villes");
      $data = $requete->rowCount();

      if ($data >= 1) {
        $resultats = $requete->fetchAll(PDO::FETCH_OBJ);
      }
      
    ?>


    var villes = <?php echo json_encode($resultats); ?>;

    window.onload = function () {
      // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
      initMap();
    };
  </script>
  <style type="text/css">
    #map {
      /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
      height: 600px;
    }
  </style>
  <title>Carte des NAC</title>

</head>

<body>
  <div id="map">
    <!-- Ici s'affichera la carte -->
  </div>

  <a class="btn btn-primary demande_ajout bouton_rouge" href="formulaire.php" target="_blank">
      <i class="fas fa-times fa-fw"></i>
      Demande d'ajout d'animal
    </a>

  <div class="columns">
    <?php
      $requete = $pdo->query("SELECT * FROM animaux");
      $data = $requete->rowCount();
      if ($data >= 1) {
        $resultats = $requete->fetchAll(PDO::FETCH_OBJ);
      }

      foreach ($resultats as $key => $resultat):

    ?>
    <!-- Début du div de la première animal -->
    <div class="column col-xs-12 col-sm-6 col-md-3 col-2 col-lg-1">
      <div id="ville_Paris" class="card bg-dark m-2">
        <!--  L'id de la forme ville_A est nécessaire pour que le lien vers
              la ville A fonctionne. Pensez à ajouter les coordonnées de A
              dans le tableau ville, en début de fichier -->
        <div class="card-header">
          <div class="card-title h5"><?= $resultat->Nom ?></div>
          <div class="card-subtitle text-gray"><?= $resultat->Catégorie ?></div>
        </div>
        <div class="card-image">
          <!-- Utilisez de préférence des images de taille identique partout (ici : 320x200)-->
          <img src="<?= $resultat->Image ?>" class="img-responsive">
        </div>
        <div class="card-body bg-secondary text-dark">
          <?= $resultat->Description ?>
        </div>
      </div>
    </div>
    <!-- Fin du div de la première animal -->
    
    <?php endforeach; ?>
  </div>
    <p class="footer bg-secondary text-center">
  </p>
</body>

</html>

<?php include('../partials/_footer.php'); ?>